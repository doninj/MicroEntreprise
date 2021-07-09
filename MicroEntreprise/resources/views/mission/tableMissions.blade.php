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
                <th>Action</th>

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
                  <td>
                    <form action="{{ route('mission.destroy', $missions->id) }}" method="POST">
                      <div class="columns ">
                        <div class="col-md-12">
                        <a href="{{ route('mission.show', $missions->id) }}" title="show">
                          <i class="far fa-eye  fa-2x"></i>
                        </a>
                      </div>
                      <div class="col-md-12">
                        <a href="{{ route('mission.edit', $missions->id) }}">
                          <i class="fas fa-edit  fa-lg"></i>
                        </a>
                      </div>
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                          <i class="fas fa-trash-alt fa-2x"></i>

                        </button>
                      </div>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
