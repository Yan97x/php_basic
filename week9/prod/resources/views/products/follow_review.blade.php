@extends('layouts.master')
@section('title')
    Follow
@endsection
@section('content')
<div class="container">
    <h5>Reviews:</h5>
    @foreach($reviews as $review)
    <div class="mt-2">
        <div>
            {{$review->user_name}}
        </div>
        {{$review->updated_at}} <span class="ms-3">rating: {{$review->product_rating}}</span>
        <div class="content">
            {{$review->review_content}}
        </div>
    </div>
    @endforeach
    
</div>
@endsection