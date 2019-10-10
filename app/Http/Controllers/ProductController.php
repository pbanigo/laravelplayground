<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Redirect;
use PDF;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data['products'] = Product::orderBy('id','desc')->paginate(10);
   
        return view('product.list',$data); //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'product_code' => 'required',
            'description' => 'required',
        ]);
   
        Product::create($request->all());
    
        return Redirect::to('products')
       ->with('success','Greate! Product created successfully.');//
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
        $where = array('id' => $id);
        $data['product_info'] = Product::where($where)->first();
 
        return view('product.edit', $data);//
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
            'title' => 'required',
            'product_code' => 'required',
            'description' => 'required',
        ]);
         
        $update = ['title' => $request->title, 'description' => $request->description];
        Product::where('id',$id)->update($update);
   
        return Redirect::to('products')
       ->with('success','Great! Product updated successfully');//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('id',$id)->delete();
   
        return Redirect::to('products')->with('success','Product deleted successfully');//
    }
}
