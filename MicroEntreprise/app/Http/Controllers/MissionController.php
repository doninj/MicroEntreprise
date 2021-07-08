<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use App\Models\Organisation;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $mission = Mission::get();
      $user = Auth::user();
      return view('mission.tableMissions',compact('mission','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $orga = $request->query->get('organisation');
      $user = Auth::user();
      return view('mission.missionCreate',compact('user'))->with('organisation', $orga);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validated = Validator::make($request->all(), [
        'title' => 'required|string|max:255',
        'organisation_id' => 'required',
        'reference' => 'required|max:255',
        'comment' => 'string',
        'deposit' => 'required|numeric|min:0|max:100',
        'ended_at' => 'required|date|after_or_equal:tomorrow'
    ]);

    if ($validated->fails()) {
      return redirect()->route('mission.create', ['mission_id' => $request->mission_id, 'organisation' => $request->organisation_id])
          ->withErrors($validated)
          ->withInput();
  }
      Mission::create($request->all());

      return redirect()->route('mission.index')
          ->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $mission = Mission::find($id);
      $orga = Organisation::find($mission->organisation_id);
      return view('mission.mission',['mission'=>$mission, 'user' => Auth::user(),'organisation' => $orga]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function edit(Mission $mission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mission $mission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mission $mission)
    {
    }
    public function getPdfDeposit( Mission $mission)
    {
      $total = 0;
      $orga = Organisation::find($mission->organisation_id);
      $user = Auth::user();
      foreach ($mission->missionLine as $line)
          $total += $line->total;

      // share data to view
      view()->share('mission', $mission);
      view()->share('total', $total);
      view()->share('orga', $orga);
      view()->share('user', $user);

        $pdfDeposit = PDF::loadView('pdf.pdfAccompte',  [$mission, $total, $orga, $user]);
        return $pdfDeposit->download(`pdfAccompte.pdf`);
  }
    public function getPdfPrepaymentBalance( Mission $mission)
    {
      $total = 0;
      $orga = Organisation::find($mission->organisation_id);
      $user = Auth::user();
      foreach ($mission->missionLine as $line)
          $total += $line->total;

      // share data to view
      view()->share('mission', $mission);
      view()->share('total', $total);
      view()->share('orga', $orga);
      view()->share('user', $user);

      if ($orga->type === "school") {
        $pdfDeposit = PDF::loadView('pdfDeposit',  [$mission, $total, $orga, $user]);
        return $pdfDeposit->download(`pdf_PrepaymentBalance.pdf`);
      }
      if ($orga->type === "government" || $orga->type === "client") {
        $pdfDeposit = PDF::loadView('pdfPrepaymentBalance',  [$mission, $total, $orga, $user]);
       return  $pdfDeposit->download(`pdf_PrepaymentBalance.pdf`);
      }
  }
}

