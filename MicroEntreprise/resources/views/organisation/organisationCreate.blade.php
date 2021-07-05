@extends('layouts.app')
@section('content')

<form action="{{ route('organisation.store') }}" method="POST" >
  @csrf

  <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Name of organisation:</strong>
              <input type="text" name="name" class="form-control" placeholder="organisation">
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>email:</strong>
              <input type="email" class="form-control" style="height:50px" name="email"
                  placeholder="Introduction">
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>slug:</strong>
              <input type="text" name="slug" class="form-control" placeholder="slug">
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>address:</strong>
              <input  name="address" class="form-control" placeholder="address">
          </div>
      </div>
      <select name='type' class="form-control form-control-lg" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="school">school</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
      </div>
  </div>

</form>
@endsection