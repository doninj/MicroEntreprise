@extends('layouts.app')
@section('content')

<div>
  @if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('mission.store') }}" method="POST" >
  @csrf
  <div class="row" >
    <input type="" name="organisation_id" value="{{$organisation}}">
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
              <input  type="number" name="deposit" class="form-control" max="100" min="0" placeholder="deposit %">
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
</div>
</form>
@endsection