<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;
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
      return view('mission.tableMissions',compact('mission'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $orga = $request->query->get('organisation');
      return view('mission.missionCreate')->with('organisation', $orga);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
      return view('mission.mission',['mission'=>$mission]);
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
    public function getPdf( Mission $mission)
    {
      $total = 0;
      foreach ($mission->missionLine as $line)
          $total += $line->total;

      // share data to view
      view()->share('mission', $mission);
      view()->share('total', $total);

      $pdf = PDF::loadView('pdfMission',  [$mission, $total]);

      // download PDF file with download method
      return $pdf->download('pdf_file.pdf');
  }
}

