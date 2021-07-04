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
                  <th>mission</th>
              </tr>
          </thead>
          <tbody>
               @foreach($organisation as $organisation)
                <tr>
                    <td> <a href="{{ route('organisation.show',['organisation' => $organisation->id]) }}"> {{$organisation->id}} </a></td>
                    <td> {{$organisation->name}} </td>
                    <td> {{$organisation->email}} </td>
                    <td> {{$organisation->tel}} </td>
                    <td> {{$organisation->address}} </td>
                    <td> {{$organisation->mission->map(fn ($mission)=> $mission->title)->join(',')}} </td>

                </tr>
               @endforeach
         </tbody>
      </table>
@endsection