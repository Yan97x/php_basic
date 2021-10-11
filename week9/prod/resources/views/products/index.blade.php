@extends('layouts.master')
@section('title')
    Products
@endsection
@section('content')
<div class="container">
<div class="row">
        @foreach ($products as $product)
            <!-- product card -->
            @include('components.product-card', ['product' => $product])
        @endforeach

    @if(!Auth::guest())
    <a href="{{url('/product/create')}}">
        <span class="badge rounded-pill bg-primary"><b>+</b> Add</span>
        </a>
    @endif
</div>
</div>
@endsection