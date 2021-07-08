@extends('layouts.app')

        @section('content')

        <h1 style='text-align:center'>Table of organisations</h1>
        <table class="table table-striped table-hover table-bordered">
          <thead>
              <tr>
                  <th> name</th>
                  <th> email </th>
                  <th> phone </i></th>
                  <th> adddress </th>
              </tr>
          </thead>
          <tbody>
                <tr>
                    <td> {{$organisation->name}} </td>
                    <td> {{$organisation->email}} </td>
                    <td> {{$organisation->tel}} </td>
                    <td> {{$organisation->address}} </td>
                </tr>
         </tbody>
      </table>
      <div class="row">
        <div class="col-lg-12 margin text-center">
            <div class="pull-center">
                <h2>Créer une mission </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('mission.create',['organisation' => $organisation->id]) }}" title="Create mission"> Créer une mission
                    </a>
            </div>
        </div>
    </div>
      <h1 style='text-align:center'>Table of missions for {{ $organisation->name }}</h1>
      <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
              <th> organisation</th>
              <th> reference</th>
              <th> title </th>
              <th> comment</th>
              <th> deposit</th>
              <th> ended_at </th>
            </tr>
        </thead>
        <tbody>
          @foreach($organisation->mission as $mission)
          <a href="{{ route('mission.show',['mission' => $mission->id]) }}">
              <tr>
                <td> {{$organisation->name}} </td>
                <td> {{$mission->reference}} </td>
                <td><a href="{{ route('mission.show',['mission' => $mission->id]) }}">{{$mission->title}}</a> </td>
                <td> {{$mission->comment}} </td>
                <td> {{$mission->deposit}} </td>
                <td> {{$mission->ended_at}} </td>
              </tr>
            </a>
              @endforeach
       </tbody>
    </table>
    @endsection