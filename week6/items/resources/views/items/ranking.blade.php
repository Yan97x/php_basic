@extends('layouts.master')

@section('title')
  Ranking Page
@endsection
  
@section('content') 
@if ($items)
<h1>Ranking</h1>
<div class="row" style="margin-top: 50px;">
    <div class="col-xs-10 col-md-12">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                  <ul class="clean">
                    @foreach ($items as $item)
                    <li class="fz1 mb3">
                        <img src="image/{{$item-> picture}}" alt="" style="width:300px;height:220px;">
                        <div class="inb pl2">
                            <label for="">Model:</label>{{$item -> summary}}<br>
                            <label for="">Times:</label>{{$item -> cartimes}}<br>
                            <label for="">Rego:</label>{{$item -> rego}}
                        </div>
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