@extends('layouts.master')

@section('title')
  Item list
@endsection
  
@section('content') 
<h1>Cars</h1> 
  @if ($items)
    <ul>
    @foreach ($items as $item)
      <li><a href="{{url("item_detail/$item->id")}}" >{{$item -> summary}}</a></li> 
    @endforeach
    </ul>
  @else
    No Item Found!
  @endif

  <a href="{{url("https://s5191915.elf.ict.griffith.edu.au/webAppDev/week6/items/public/add_item")}}" >Add Item </a><br>

@endsection