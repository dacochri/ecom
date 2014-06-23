<?php

class ProductsController extends BaseController{
  
  public function index(){
    $products = Product::all();
    return View::make('products/index')->with('products', $products);
  }

  public function showProduct($products){
    $product = Product::find($products)
    return View::make('products/show')->with('product', $product);
  }

  public function newProduct(){
    return View::make('products/new');
  }

  public function editProduct($products){
    $product = Product::find($products)
    return View::make('products/edit')->with('product', $product);
  }

  public function createProduct(){
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

  public function updateProduct($products){
    $product = Product::find($products);
    $product->category_id = $_POST['category_id'];
    $product->name = $_POST['name'];
    $product->manufacturer = $_POST['manufacturer'];
    $product->quantity = $_POST['quantity'];
    $product->date_added = $_POST['date_added'];
    $product->description = $_POST['description'];
    $product->save();
  }

  public function destroyProduct($products){
    $product = Product::find($products);
    $product->delete();
    # Product::find($id)->delete();
  }
}
