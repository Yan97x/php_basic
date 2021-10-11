@extends('layouts.master')
@section('title')
    Review
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
    <form method="POST" action="{{url("review")}}" class="pt-3 addProduct">
        {{csrf_field()}}
        <p><label>User Name:</label><input type="text" name="user_name" value="{{Auth::user()->name}}" readonly></p>
        <p><label>Rating:</label><input type="text" name="product_rating" value=""></p>
        <p><label>Content:</label><input type="text" name="review_content" value=""></p>
        
        <input type="hidden" name="product_id" value="{{$product_id}}">
        <input type="hidden" name="review_id" value="{{$review_id}}">
        <input type="hidden" name="like" value="0">
        <input type="hidden" name="dislike" value="0">
        <input type="submit" value="Add Review">
    </form>
</div>
@endsection