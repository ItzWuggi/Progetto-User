
  <div class="card" style="width: 18rem;">
    <img src="{{Storage::url($product->img)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$product->name}}</h5>
      <h6 class="card-subtitle mb-2 text-body-secondary">{{$product->price}}$</h6>
      <p class="card-text">{{$product->description}}</p>
      
    </div>
  </div>