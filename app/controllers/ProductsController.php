<?php

class ProductsController extends BaseController{
  
  public function index(){
    $products = Product::all();
    return View::make('products/index')->with('products', $products);
  }

  public function show($products){
    $product = Product::find($products)
    return View::make('products/show')->with('product', $product);
  }

  public function create(){
    return View::make('products/new');
  }

  public function edit($products){
    $product = Product::find($products)
    return View::make('products/edit')->with('product', $product);
  }

  public function store(){
    Product::create(Input::all());

    return Redirect::route('products.index');
  }

  public function update($products){
    $product = Product::find($products);
    $product->create(Input::all());
    
    return Redirect::route('products.index');
  }

  public function destroy($products){
    $product = Product::find($products);
    $product->delete();
    # Product::find($id)->delete();
    
    return Redirect::route('products.index');
  }
}
