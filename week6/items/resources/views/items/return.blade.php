@extends('layouts.master')

@section('title')
  Return
@endsection

@section('content')
  <h1>Return</h1>
  <form method="post" action="{{url("add_item_action")}}">
    {{csrf_field()}}
    <p>  
      <lable>Summary</lable>
      <input type="text" name="summary">
    </p>
    <p>
      <label>Details</label>
      <textarea type="text" name="details"></textarea><br>
    </p>
    <input type="submit" value="Add">
  
  </form>
@endsection