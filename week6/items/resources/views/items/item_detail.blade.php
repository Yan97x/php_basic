@extends('layouts.master')

@section('title')
  Item list
@endsection
  
@section('content') 
  <div class="tc">
    <img src="../image/{{$item-> picture}}" alt="" style="width:600px;height:420px;">   
    <h1>{{$item -> summary}}</h1>
      <p>Rego: {{$item -> rego}}</p>
      <p>Year: {{$item -> years}}</p>
      <p>Odometer: {{$item -> odometer}}</p>
      <p>Color: {{$item -> color}}</p>
  </div>

@endsection