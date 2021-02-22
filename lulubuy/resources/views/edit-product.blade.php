@extends('base')

@section('title', 'Edit Product')

@section('content')

<h2>Edit a Product</h2>
<form action="{{ route('product.update', [$product->id]) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $product->barcode }}" placeholder="barcode">
    <input type="text" name="name" value="{{ $product->product_name }}" placeholder="Name">
    <input type="number" name="price" value="{{ $product->price }}" placeholder="Price">
    <input type="text" name="poster" value="{{ $product->stock }}" placeholder="Poster">
    <input type="submit" value="UPDATE">
</form>

@endsection