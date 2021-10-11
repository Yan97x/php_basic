<div class="card" style="width: 18rem; margin:10px;10px;10px;10px;">
  <div class="card-body">
    <a href="follow/{{$follow->follow_user}}">
      <h5 class="card-title">{{$follow->follow_user}}</h5>
    </a>
    <form method="POST" action="{{url("follow/$follow->follow_user")}}">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <input type="submit" value="unfollow" class="btn btn-primary">
    </form>
  </div>
</div>
