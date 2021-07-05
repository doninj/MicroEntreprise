@extends('layouts.app')
@section('content')

<form action="{{ route('mission.store') }}" method="POST" >
  @csrf

  <div class="row">
    <input type="hidden" name="organisation_id" value="{{$organisation}}">
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Title</strong>
              <input type="text" name="title" class="form-control" placeholder="title">
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>reference:</strong>
              <input  class="form-control" style="height:50px" name="reference"
                  placeholder="reference">
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>comment:</strong>
              <input type="text" name="comment" class="form-control" placeholder="comment">
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>deposit:</strong>
              <input  name="deposit" class="form-control" placeholder="deposit">
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ended_at :</strong>
                <input type="date" name="ended_at" class="form-control" >
            </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
      </div>
  </div>

</form>
@endsection