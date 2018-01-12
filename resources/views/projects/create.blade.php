@extends('layouts.app')

@section('content')
  <div class='container'>
    <div class='row'>
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">New Project</div>

          <div class="panel-body">
              <form action="{{route('projects.store')}}" method="POST">
                  {{csrf_field()}}
                      <label for="name">name</label>
                      <input id="name" class="form-control" type="text" name="name" value="" required>
                      <label for="link">link</label>
                      <input id="link" class="form-control" type="text" name="link"  value="" required>
                      <label for="type">type</label>
                      <input id="type" class="form-control" type="text" name="type" value="" required>
                      <label for="client">client</label>
                      <select name="client_id" class="form-control" id="client" >
                        @foreach($clients as $client)
                          <option value="{{$client->id}}">{{$client->name}}</option>
                        @endforeach
                      </select>
                      <label >status</label>
                      <br>
                      <label for="status">Active</label>
                      <input type="checkbox" name="status" value="0" id="status" checked>
                    <br>
                  <button type="submit"  class="btn btn-success">Add</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection