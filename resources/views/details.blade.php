@extends("layout")

@section("page_title", "Product Details")

@section("main_content")
  <h3>Product Details {{$item->id}}</h3>

   
    <div class="container p-3">
      <div class="product-container">
      <ul>
        <li>{{$item->title}}, {{$item->description}}</li> from {{$item->brand}} at 15% discount, just TODAY at:  {{$item->price}} €</li>
      </ul>
      <br>
      <a href="/catalog" type="button" class="btn btn-dark">Back</a>
    </div>
    </div>
  
@stop