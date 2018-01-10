@extends('layouts.app')

@section('content')
  <div class='container'>
    <div class='row'>
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">Item</div>

          <div class="panel-body">
              <form action="{{route('projects.store')}}" method="POST">
                  {{csrf_field()}}
                      <label>name</label>
                      <input class="form-control" type="text" name="name" value="" required>
                      <label>link</label>
                      <input class="form-control" type="text" name="link" value="" required>
                      <label>type</label>
                      <input class="form-control" type="text" name="type" value="" required>
                      <label>client</label>
                      <input class="form-control" type="text" name="client" value="" required>
                      <label>project</label>
                      <input class="form-control" type="text" name="project" value="" required>    
                      <label >status</label>
                      <br>
                      <label >0</label>
                      <input type="radio" name="status"  value="0">
                      <label >1</label>
                      <input type="radio" name="status"  value="1"><br>
                    <br>
                  <button type="submit button"  class="btn btn-success">Add</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection