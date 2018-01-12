@extends('layouts.app')

@section('content')
  <div class='container'>
    <div class='row'>
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">New Client</div>

          <div class="panel-body">
              <form action="{{route('clients.store')}}" method="POST">
                  {{csrf_field()}}
                      <label>name</label>
                      <input class="form-control" type="text" name="name" value="" required>
                  <button type="submit button"  class="btn btn-success">Add</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection