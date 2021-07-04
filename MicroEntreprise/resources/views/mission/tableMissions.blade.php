@extends('layouts.app')

    @section('content')
    <h1 style='text-align:center'>table of missions</h1>
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
          @foreach($mission as $missions)
            <tr>
                <td> {{$missions->id}} </td>
                <td> {{$missions->organisation_id}} </td>
                <td> {{$missions->reference}} </td>
                <td> {{$missions->title}} </td>
                <td> {{$missions->comment}} </td>
                <td> {{$missions->deposit}} </td>
                <td> {{$missions->ended_at}} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
