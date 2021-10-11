@extends('layouts.master')
@section('title')
    Product Edit
@endsection
@section('content')
<div class="container">
    @if (count($errors) > 0)
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }} </li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action='{{url("product/$product->id")}}' class="pt-3 addProduct">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <p><label>Product Name:</label><input type="text" name="name" value="{{$product->name}}"></p>
        <p><label>Price:</label><input type="text" name="price" value="{{$product->price}}"></p>
        <p><label>Describe:</label><input type="text" name="describe" value="{{$product->describe}}"></p>
        <p><label>Link:</label><input type="text" name="link" value="{{$product->link}}"></p>
        <p>
            <label>Manufacturer:</label>
            <select name="manufacturer" class="manufacturerSelect">
                @foreach ($manufacturers as $manufacturer)
                @if ($manufacturer->id == old('manufacturer'))
                <option value="{{$manufacturer->id}}" selected="selected">{{$manufacturer->name}}</option>
                @else
                <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
                @endif
                @endforeach
            </select>
        </p>
        <input type="submit" value="Update">
    </form>
</div>
@endsection