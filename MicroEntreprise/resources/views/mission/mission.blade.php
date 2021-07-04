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
@endsection
