@extends('layout')

@section('page_title', 'Delete')

@section('main_content')

<h3>Delete your item</h3>

<form action="/catalog" method="POST">
    @method('DELETE')
      @csrf
      <input type="hidden" name="id" value="{{$id}}">
      <button class="btn btn-danger" type="submit">Confirm the removal</button>

</form>

@stop