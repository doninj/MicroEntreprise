@extends('layouts.app')

    @section('content')
    <h1 style='text-align:center'>table of missions of</h1>
    <a class="btn btn-primary" href="{{ URL::to('/mission/'.$mission->id.'/pdf') }}">Export to PDF</a>
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th> id </th>
                <th> organisation_id</th>
                <th> reference</th>
                <th> title </th>
                <th> comment</th>
                <th> deposit</th>
                <th> ended_at </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> {{$mission->id}} </td>
                <td> {{$mission->organisation_id}} </td>
                <td> {{$mission->reference}} </td>
                <td> {{$mission->title}} </td>
                <td> {{$mission->comment}} </td>
                <td> {{$mission->deposit}} </td>
                <td> {{$mission->ended_at}} </td>
            </tr>
        </tbody>
    </table>
    <div class="row">
      <div class="col-lg-12 margin text-center">
          <div class="pull-center">
              <h2>Créer une mission </h2>
          </div>
          <div class="pull-right">
              <a class="btn btn-success" href="{{ route('missionLine.create',['mission' => $mission->id]) }}" title="Create mission"> Create missionLine
                  </a>
          </div>
      </div>
  </div>
    <h1 style='text-align:center'>Table of Missions lines</h1>
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th> id  </th>
                <th> mission_id </th>
                <th> title </th>
                <th> quantity  </th>
                <th> price</th>
                <th> unity </th>
                <th> total </th>
            </tr>
        </thead>
        <tbody>
            @foreach($mission->missionLine as $missionLine)
            <tr>
                <td> {{$missionLine->id}} </td>
                <td> {{$missionLine->mission_id}} </td>
                <td> {{$missionLine->title}} </td>
                <td> {{$missionLine->quantity}} </td>
                <td> {{$missionLine->price}} </td>
                <td> {{$missionLine->unity}} </td>
                <td> {{$missionLine->total}} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
