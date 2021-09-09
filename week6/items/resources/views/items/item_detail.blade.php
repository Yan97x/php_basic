@extends('layouts.master')

@section('title')
  Item list
@endsection
  
@section('content')  
    <h1>{{$item -> summary}}</h1>
    <p>{{$item -> details}}</p>

    <a href="{{url("item_delete/$item->id")}}" >Delete Item </a><br>
    <a href="{{url("item_update/$item->id")}}" >Update Item </a><br>
    <a href="{{url("/")}}" >Home Page </a><br>
@endsection