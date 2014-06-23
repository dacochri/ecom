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
    Product::create([
      'category_id' => Input::get('category_id'),
      'name' => Input::get('name'),
      'price' => Input::get('price'),
      'manufacturer' => Input::get('price'),
      'quantity' => Input::get('quantity'),
      'description' => Input::get('description')
    ]);
  }

  public function update($products){
    $product = Product::find($products);
    $product->category_id = Input::get('category_id');
    $product->name = Input::get('name';
    $product->manufacturer = Input::get('manufacturer');
    $product->quantity = Input::get('quantity');
    $product->description = Input::get('description');
    $product->save();
  }

  public function destroy($products){
    $product = Product::find($products);
    $product->delete();
    # Product::find($id)->delete();
  }
}
