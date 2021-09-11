@extends('layouts.master')

@section('title')
  Home Page
@endsection
  
@section('content') 
@if ($items)
<h1>Vehicles</h1>
<div class="row" style="margin-top: 50px;">
    <div class="col-xs-10 col-md-12">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                  <ul class="clean">
                    @foreach ($items as $item)
                    <li class="col-md-4 inb fz1 mb3">
                      <img src="image/{{$item-> picture}}" alt="" style="width:300px;height:220px;"></br> 
                      <a href="{{url("item_detail/$item->id")}}" >{{$item -> rego}}</a>
                    </li>
                    @endforeach
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>

  @else
    No Item Found!
  @endif
@endsection