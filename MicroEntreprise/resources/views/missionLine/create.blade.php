@extends('layouts.app')
@section('content')

<form action="{{ route('missionLine.store') }}" method="POST" >
  @csrf

  <div class="row">
    <input type="hidden" name="mission_id" value="{{$mission_id}}">
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Title</strong>
              <input type="text" name="title" class="form-control" placeholder="title">
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>quantity:</strong>
              <input  type="number" class="form-control" style="height:50px" name="quantity"
                  placeholder="quantity">
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>price:</strong>
              <input type="number" name="price" class="form-control" placeholder="price">
          </div>
      </div>
      <select name='unity' class="form-control form-control-lg" aria-label="Default select example">
        <option selected value="/h">/h</option>
        <option value="/day">/day</option>
        <option value="/week">/week</option>
      </select>
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
      </div>

  </div>

</form>
@endsection