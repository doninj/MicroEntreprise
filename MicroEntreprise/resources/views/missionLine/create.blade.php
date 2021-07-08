@extends('layouts.app')
@section('content')

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
        <option selected value="/h">heure</option>
        <option value="/day">jour</option>
      </select>
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
      </div>

  </div>

</form>
@endsection