@extends("layout")

@section("page_title", "Catalog")

@section("main_content")
  <h3>Products</h3>
  {{-- <div class="catalog-container"> --}}
   @foreach ($products as $product)
    <div class="container p-3">
      <div class="product-container">
      <ul class="mt-2">
        {{-- <li>{{$product["name"]}}, {{$product["color"]}} from {{$product["brand"]}}</li> --}}
        <li>{{ $product -> title }} , {{ $product -> description }}, {{ $product -> brand }} </li>
        <li>Price: {{ $product -> price }} €</li>
      </ul>
      <a href="/details/{{$product["id"]}}" type="button" class="btn btn-dark mb-2">Details</a>
      <a href="/update/{{$product["id"]}}" type="button" class="btn btn-info mb-2">Update</a>
      <a href="/delete/{{$product["id"]}}" type="button" class="btn btn-danger mb-2">Delete</a>
    </div>
    
    </div>
   @endforeach
{{-- </div> --}}
@stop