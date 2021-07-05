@extends('layouts.app')

        @section('content')

        <h1 style='text-align:center'>Table of Contribution</h1>
        <table class="table table-striped table-hover table-bordered">
          <thead>
              <tr>
                  <th>  title </th>
                  <th> comment</th>
                  <th> organisation_id </th>
                  <th> Created At</th>
              </tr>
          </thead>
          <tbody>
                <tr>
                    <td> {{$contribution->id}} </td>
                    <td> {{$contribution->comment}} </td>
                    <td> {{$contribution->organisation_id}} </td>
                    <td> {{$contribution->created_at}} </td>
                </tr>
         </tbody>
      </table>
    @endsection