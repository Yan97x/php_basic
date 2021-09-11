@extends('layouts.master')

@section('title')
  Add Client
@endsection

@section('content')
  <h1>Add Client</h1>
  <form method="post" action="{{url("add_item_action")}}">
    {{csrf_field()}}
    <p>  
      <lable>Name:</lable>
      <input type="text" name="names">
    </p>
    <p>
      <label>Age:</label>
      <input type="text" name="age">
    </p>
    <p>
      <label>Phone:</label>
      <input type="text" name="phone">
    </p>
    <p>
      <label>License:</label>
      <input type="text" name="license">
    </p>
    <p>
      <label>License Type:</label>
      <input type="text" name="licenseType">
    </p>
    <input type="submit" value="Add">
  </form>
  @if($errors -> count()>0)
    @foreach($errors->all() as $error)
      <p>{{$error}}</p>
    @endforeach
  @endif
@endsection