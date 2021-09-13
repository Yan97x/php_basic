@extends('layouts.master')

@section('title')
  Booking
@endsection

@section('content')
<h1>Booking</h1>
    <form method="post" action="{{url("booking")}}">
      {{csrf_field()}}
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <label class="label">Client: </label>
            <select name="names" class="input form-control"> @foreach($client as $clients) <option value="{{$clients->names}}">{{$clients->names}}</option> @endforeach </select>
          </div>
          <div class="col-md-3">
            <label class="label">Rego: </label>
            <select name="rego" class="input form-control"> @foreach($item as $items) <option value="{{$items->rego}}">{{$items->rego}}</option> @endforeach </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <label for="" class="label">Start from:</label>
            <input type="datetime-local" name="starting" class="input form-control">
          </div>
          <div class="col-md-3">
            <label for="" class="label">Return at:</label>
            <input type="datetime-local" name="returning" class="input form-control">
          </div>
          <div class="row">
            <div class="col-md-12">
              <br>
              <input type="submit" class="btn btn-primary" value="Make Booking">
            </div>
          </div>
    </form>
    </div>
    <div class="row">
      <div class="col-md-12">
        <hr>
        <table class="table table-striped">
          <thead>
            <tr>
              <td scope="col">ID</td>
              <td scope="col">Name</td>
              <td scope="col">Rego</td>
              <td scope="col">License</td>
              <td scope="col">start</td>
              <td scope="col">Return</td>
            </tr>
          </thead>
          <tbody></tbody> @foreach($booking as $bookingItem) <tr>
            <td>{{ $bookingItem->id }}</td>
            <td>{{ $bookingItem->names }}</td>
            <td>{{ $bookingItem->rego }}</td>
            <td>{{ $bookingItem->license }}</td>
            <td>{{ $bookingItem->starting }}</td>
            <td>{{ $bookingItem->returning }}</td>
          </tr> @endforeach
        </table>
      </div>
    </div>
    </div>
@endsection
