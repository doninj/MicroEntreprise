@extends('layouts.app')

    @section('content')
    <h1 style='text-align:center'>Table of Missions lines for </h1>
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
            @foreach($missionLine as $missionLine)
            <tr>
                <td> {{$missionLine->id}} </td>
                <td><a href="{{ route('mission.show',['mission' => $missionLine->mission_id]) }}">{{$missionLine->mission_id}}</a> </td>
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
