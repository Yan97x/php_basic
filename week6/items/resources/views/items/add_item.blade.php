@extends('layouts.master')

@section('title')
  Add Client
@endsection

@section('content')
  <h1>Add Client</h1>
  <form method="post" action="{{url("add_item_action")}}">
    {{csrf_field()}}
    <div class="mb1">  
      <label class="label">Name:</label>
      <input type="text" name="names" class="input">
    </div>
    <div class="mb1">
    <label class="label">Age:</label>
      <input type="text" name="age" class="input">
    </div>
    <div class="mb1">
    <label class="label">Phone:</label>
      <input type="text" name="phone" class="input">
    </div>
    <div class="mb1">
    <label class="label">License:</label>
      <input type="text" name="license" class="input">
      </div>
    <div class="mb1">
    <label class="label">LicenseType:</label>
      <input type="text" name="licenseType" class="input">
      </div>
    <input type="submit" value="Add">
  </form>
  @if($errors -> count()>0)
    @foreach($errors->all() as $error)
      <p>{{$error}}</p>
    @endforeach
  @endif
@endsection