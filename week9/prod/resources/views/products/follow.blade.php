@extends('layouts.master')
@section('title')
    Follow
@endsection
@section('content')
<div class="container">
    <div class="row">
        @foreach ($follows as $follow)
            <!-- follow card -->
            @include('components.follow-card', ['follow' => $follow])
        @endforeach
    </div>
</div>
@endsection