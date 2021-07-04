@extends('layouts.app')

        @section('content')
        <h1 style='text-align:center'>Table of organisations</h1>
        <table class="table table-striped table-hover table-bordered">
          <thead>
              <tr>
                  <th>  id </th>
                  <th> name</th>
                  <th> email </th>
                  <th> phone</th>
                  <th> adddress </th>
              </tr>
          </thead>
          <tbody>
                <tr>
                    <td> {{$organisation->id}} </td>
                    <td> {{$organisation->name}} </td>
                    <td> {{$organisation->email}} </td>
                    <td> {{$organisation->tel}} </td>
                    <td> {{$organisation->address}} </td>
                </tr>
         </tbody>
      </table>

      <h1 style='text-align:center'>Table of missions for {{ $organisation->name }}</h1>
      <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
              <th> Mission id </th>
              <th> organisation_id</th>
              <th> reference</th>
              <th> title </th>
              <th> comment</th>
              <th> deposit</th>
              <th> ended_at </th>
            </tr>
        </thead>
        <tbody>
          @foreach($organisation->mission as $mission)
              <tr>
                <td><a href="{{ route('mission.show',['mission' => $mission->id]) }}">{{$mission->id}}</a> </td>
                <td> {{$mission->organisation_id}} </td>
                <td> {{$mission->reference}} </td>
                <td> {{$mission->title}} </td>
                <td> {{$mission->comment}} </td>
                <td> {{$mission->deposit}} </td>
                <td> {{$mission->ended_at}} </td>
              </tr>
              @endforeach
       </tbody>
    </table>
    @endsection