@extends('layouts.app')

        @section('content')
        <div class="row">
          <div class="col-lg-12 margin-tb">
              <div class="pull-left">
                  <h2>Laravel 8 CRUD </h2>
              </div>
              <div class="pull-right">
                  <a class="btn btn-success" href="{{ route('organisation.create') }}" title="Create organisations"> Créer une organisation
                      </a>
              </div>
          </div>
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
                  <th>Action</th>
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
                    <td>
                      @foreach ($organisation->mission as $mission)
                          <li>{{$mission->title}}</li>
                      @endforeach
                      </td>
                      <td>
                        <form action="{{ route('organisation.destroy', $organisation->id) }}" method="POST">

                            <a href="{{ route('organisation.show', $organisation->id) }}" title="show">
                                show
                            </a>

                            <a href="{{ route('organisation.edit', $organisation->id) }}">
                                edit

                            </a>

                            @csrf
                            @method('DELETE')
                            <button type="submit" title="delete" style="border: none; background-color:transparent;">
                              delete

                            </button>
                        </form>
                    </td>
                </tr>
               @endforeach
         </tbody>
      </table>
@endsection