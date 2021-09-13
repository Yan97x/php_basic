@extends('layouts.master')

@section('title')
  Client
@endsection

@section('content')
<h1>Clients</h1>
  <a href="{{url("add_item")}}">
    <h2>Add Client</h2>
  </a>
  <br> @foreach ($clients as $client) <li class="col-md-4 inb fz1 mb3 tc">
    <img src="image/user.jpg" alt="" style="width:150px;height:150px;">
    <h2>Name: {{$client -> names}}</h2>
    <p>Age: {{$client -> age}}</p>
    <p>Phone: {{$client -> phone}}</p>
    <p>License: {{$client -> license}}</p>
    <p>License Type: {{$client -> licenseType}}</p>
    <p>
      <a href="{{url("update_item/$client->id")}}">Update</a>
      <a href="{{url("delete_item/$client->id")}}">Delete</a>
    </p>
  </li>
@endforeach

@endsection