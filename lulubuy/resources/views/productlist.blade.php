
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
        
    </ul>
        
    @endforeach
        
    @endif
        
    @endsection
    
    



