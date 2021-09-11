@extends('layouts.master')

@section('title')
  Update Client
@endsection

@section('content')
  <h1>Update Client</h1>
  <form method="post" action="{{url("update_item_action/$client->id")}}">
    {{csrf_field()}}
    <p>  
      <lable>Name:</lable>
      <input type="text" name="names" value="{{$client->names}}">
    </p>
    <p>
      <label>Age:</label>
      <input type="text" name="age" value="{{$client->age}}">
    </p>
    <p>
      <label>Phone:</label>
      <input type="text" name="phone" value="{{$client->phone}}">
    </p>
    <p>
      <label>License:</label>
      <input type="text" name="license" value="{{$client->license}}">
    </p>
    <p>
      <label>License Type:</label>
      <input type="text" name="licenseType" value="{{$client->licenseType}}">
    </p>
    <input type="submit" value="Update">
  </form>
  
@endsection