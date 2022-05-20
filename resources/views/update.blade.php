@extends('layout')

@section('page_title', 'Update')

@section('main_content')

<h3>Update your product</h3>

<div style="opacity:0.95" class="product-container mt-5">
<form action="/catalog" method="POST">
    @method('PUT')
    @csrf

    <div class="mb-3">
      <input type="hidden" name="id" value="{{$item->id}}" />

      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" name="title" value="{{$item->title}}">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea type="text" class="form-control" name="description" >{{$item->description}}</textarea>
    </div>
    <div class="mb-3">
      <label class="form-label" for="brand">Brand</label>
      <input type="text" class="form-control" name="brand" value="{{$item->brand}}">
    </div>
    <div class="mb-3">
        <label class="form-label" for="price">Price</label>
        <input type="number" class="form-control" name="price" value="{{$item->price}}">
      </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
@stop