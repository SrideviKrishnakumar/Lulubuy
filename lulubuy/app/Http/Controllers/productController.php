<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prod = Product::all();
        return view('productlist',['list'=>$prod]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prod = Product::find($id);

        return view('edit-product', ['product' => $prod]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'barcode'=>'required',
            'product_name'=>'required',
            'price'=>'required',
            'stock'=>'requireds'
        ]);

        $result = DB::update('UPDATE products
        SET barcode=?,product_name=?, price=?, stock=?
        WHERE id=?',
        [$request->barcode,$request->product_name, $request->price, $request->stock, $id] );

        return redirect('productlist')->with('success', $request->product_name . ' Update successfully');

        
        /*$prod = new Product();

        $prod->barcode = $request->barcode;
        $prod->product_name = $request->product_name;
        $prod->price=$request->price;
        $prod->stock = $request->stock;

        $prod->save();
        return view('productlist');*/

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prod = Product::find($id);
        $prod->delete();
        return view('productlist');
    }
}
