
    @extends('base')

    @section('content')
    @if(count($list)>0)
    <h2>Product List</h2>
    @foreach ($list as $item)
    <ul>
        <li>BARCODE : {{ $item->barcode }}</li>
        <li>ProductName : {{ $item->product_name }}</li>
        <li>Price : {{ $item->price }}</li>
        <li>Stock : {{ $item->stock }}</li>
        <a href="{{ route('product.edit', [$item->id]) }}">Edit page</a><br>
        <a href="{{ route('product.delete', [$item->id]) }}">Delete page</a><br>
        <hr>
        
    </ul>
      
    @endforeach
        
    @endif
        
    @endsection
    
    



