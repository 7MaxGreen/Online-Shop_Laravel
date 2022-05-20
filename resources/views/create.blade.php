@extends('layout')

@section('page_title', 'Create')

@section('main_content')

<h3>Add a new product</h3>

<div style="opacity:0.95" class="product-container mt-5">
<form action="/catalog" method="POST">

    @csrf

    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" name="title">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea type="text" class="form-control" name="description"></textarea>
    </div>
    <div class="mb-3">
      <label class="form-label" for="brand">Brand</label>
      <input type="text" class="form-control" name="brand">
    </div>
    <div class="mb-3">
        <label class="form-label" for="price">Price</label>
        <input type="number" class="form-control" name="price">
      </div>
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
</div>
@stop