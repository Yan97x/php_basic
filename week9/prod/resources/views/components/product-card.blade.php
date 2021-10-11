<div class="card" style="width: 18rem; margin:10px;10px;10px;10px;">
  <div class="card-body">
  <a href="product/{{$product->id}}">
    <h5 class="card-title">{{$product->name}}</h5>
    </a>
    <p class="card-text">{{$product->describe}}</p>
    <a href="product/{{$product->id}}" class="btn btn-primary">More</a>
  </div>
</div>