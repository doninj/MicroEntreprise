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
<form action="{{ route('organisation.destroy', $organisation->id) }}" method="POST">
  @csrf

  <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Nom de l'organisation:</strong>
              <input type="text" value="{{ $organisation->name }}" name="name" class="form-control" placeholder="organisation">
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>email:</strong>
              <input type="email" class="form-control"  value="{{ $organisation->email }}" style="height:50px" name="email"
                  placeholder="Introduction">
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>slug:</strong>
              <input type="text" name="slug" value="{{ $organisation->slug }}" class="form-control" placeholder="slug">
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>adresse:</strong>
              <input  name="address" value="{{ $organisation->address }}" class="form-control" placeholder="address">
          </div>
      </div>
      <select name='type'  value="{{ $organisation->type }}" class="form-control form-control-lg" aria-label="Default select example">
        <option selected>Selectionner le type de l'organisation</option>
        <option value="school">école</option>
        <option value="client">client</option>
        <option value="governement">governement</option>
      </select>
      @method('PUT')
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">modifier</button>
      </div>
  </div>

</form>
@endsection