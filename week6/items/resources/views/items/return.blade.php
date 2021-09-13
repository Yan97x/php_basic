@extends('layouts.master')

@section('title')
  Return
@endsection

@section('content')
<h1>Return</h1>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form method="post" action="{{ url("return") }}">
        <label class="label">Booking: </label>
        {{csrf_field()}}
        <select name="booking" class="input form-control"> @foreach($booking as $bookingItem) <option value="{{ $bookingItem->id }}-{{$bookingItem->rego}}">
            {{ $bookingItem->id}} - {{ $bookingItem->rego }} - {{ $bookingItem->names }}
          </option> @endforeach </select> Driven Km. <input class="form-control" name="odo" type="number">
        </br>
    </div>
    <input type="submit" class="btn btn-primary" value="Return">
    </form>
  </div>
</div>
@endsection