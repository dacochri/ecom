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
      'category_id' => $_POST['category_id'],
      'name' => $_POST['name'],
      'price' => $_POST['price'],
      'manufacturer' => $_POST['price'],
      'quantity' => $_POST['quantity'],
      'date_added' => date('Y-m-d h:i:s'),
      'description' => $_POST['description']
    ]);
  }

  public function update($products){
    $product = Product::find($products);
    $product->category_id = $_POST['category_id'];
    $product->name = $_POST['name'];
    $product->manufacturer = $_POST['manufacturer'];
    $product->quantity = $_POST['quantity'];
    $product->date_added = $_POST['date_added'];
    $product->description = $_POST['description'];
    $product->save();
  }

  public function destroy($products){
    $product = Product::find($products);
    $product->delete();
    # Product::find($id)->delete();
  }
}
