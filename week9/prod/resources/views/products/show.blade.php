@extends('layouts.master')
@section('title')
    Products
@endsection
@section('content')
<div class="container">
    <h1>{{$product->name}}</h1>

    <ul class="">
        @foreach($pictures as $picture)
        <li class="postImgList">
            <img src="{{url("img/$picture->picture_name")}}" alt="" class="postImg">
            <p>by {{$picture->user_name}}</p>
        </li>
        @endforeach
    </ul>
    @if (!Auth::guest())
    <form method="POST" action="{{url('picture')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <input type="file" name="picture_name">
        <input type="submit" value="Upload">
    </form>
    @endif

    <p>Price: {{$product->price}}</p>
    <p>Manufacturer: {{$product->manufacturer->name}}</p>
    <p>Describe: {{$product->describe}}</p>
    <p>Link: <a href="{{url("$product->link")}}">{{$product->link}}</a></p>

    @if(!Auth::guest() and Auth::user()->type=='Moderator')
    <p class="d-inline-block"><a href='{{url("product/$product->id/edit")}}' class="editBtn">Edit</a></p>
    <form method="POST" action='{{url("product/$product->id")}}' class="d-inline-block">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <input type="submit" value="Delete">
    </form>
    @endif
    
    
    <div>
        <h5>Reviews:</h5>
        @foreach($reviews as $review)
        <div class="mt-2">
            <div>
                {{$review->user_name}}
                @if ((!Auth::guest()) and ($review->name != Auth::user()->name))
                <form method="post" action="{{url('follow')}}" class="d-inline-block align-middle">
                    {{csrf_field()}}
                    <input type="hidden" name="follow_user" value="{{$review->user_name}}">
                    <input type="hidden" name="follower" value="{{Auth::user()->name}}">
                    <input type="submit" value="" class="follow">
                </form>
                @endif
            </div>
            {{$review->updated_at}} <span class="ms-3">rating: {{$review->product_rating}}</span>
            <div class="content">
                {{$review->review_content}}
                @if (!Auth::guest() and Auth::user()->type=='Moderator')
                
                <form method="POST" action="{{url("review/$review->id")}}" class="delete">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input type="submit" value="Delete">
                </form>
                
                @endif
            </div>
            @foreach($votes as $vote)
                @if($vote->review_id == $review->id)
                <form action="" class="mt-1 text-end">
                    <input type="submit" name="vote" value="" class="like">{{$vote->thumb_up}}
                    <input type="submit" name="vote" value="" class="dislike">{{$vote->thumb_down}}
                </form>
                @endif
            @endforeach
        </div>
        @endforeach
        {{$reviews->links()}}
        @if ((!Auth::guest()) and $poster==0)
        <form action="{{url('/review/create')}}">
            <input type="hidden" name="product_id" value="{{$product->id}}">
            <input type="submit" value="post a review">
        </form>
        @endif
    </div>
</div>
@endsection