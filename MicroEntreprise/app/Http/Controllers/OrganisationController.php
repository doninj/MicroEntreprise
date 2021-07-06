<?php

namespace App\Http\Controllers;

use App\Models\Organisation;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

class OrganisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organisation = Organisation::get();
        $columns = Schema::getColumnListing('organisations'); // users table
        $user = Auth::user();
      return view('organisation.tableOrganisations',compact('organisation','columns','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $user = Auth::user();
      return view('organisation.organisationCreate',compact('user'));

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
        'slug' => 'required|unique:organisations|string|max:255',
        'name' => 'required|max:255',
        'address' => 'required',
        'email' => 'required|max:255|unique:organisations',
        'type' => ['required', Rule::in(['school', 'client', 'government'])]
    ]);

    if ($validated->fails()) {
      return redirect()->route('organisation.create', ['organisation_id' => $request->organisation_id])
          ->withErrors($validated)
          ->withInput();
  }
      Organisation::create($request->all());

      return redirect()->route('organisation.index')
          ->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $organisation = Organisation::find($id);
        $user = Auth::user();
        return view('organisation.tableOrganisation',compact('organisation','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function edit(Organisation $organisation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organisation $organisation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organisation $organisation)
    {
      $organisation->delete();
      return redirect()->route('organisation.index')->with('success', 'Organisation deleted');
    }
}
