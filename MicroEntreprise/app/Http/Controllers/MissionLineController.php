<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use App\Models\MissionLine;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MissionLineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $missionLine = MissionLine::get();
      $user = Auth::user();
      return view('missionLine.tableMissionLine',compact('missionLine','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $mission_id = $request->query->get('mission');
      return view('missionLine.create')->with('mission_id', $mission_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      MissionLine::create($request->all());

      return redirect()->route('missionLine.index')
          ->with('success', 'Project created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MissionLine  $missionLine
     * @return \Illuminate\Http\Response
     */
    public function show(MissionLine $missionLine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MissionLine  $missionLine
     * @return \Illuminate\Http\Response
     */
    public function edit(MissionLine $missionLine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MissionLine  $missionLine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MissionLine $missionLine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MissionLine  $missionLine
     * @return \Illuminate\Http\Response
     */
    public function destroy(MissionLine $missionLine)
    {
        //
    }
}
