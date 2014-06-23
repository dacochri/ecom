<?php

class ProductsController extends BaseController{
  
  public function index(){
    $products = Product::all();
    return View::make('products/index')->with('products', $products);
  }

  public function showProduct(){
    $product = Product::find($id)
    return View::make('products/show')->with('product', $product);
  }

  public function newProduct(){
    return View::make('products/new');
  }

  public function editProduct(){
    $product = Product::find($id)
    return View::make('products/edit')->with('product', $product);
  }

  public function createProduct(){
    $product = new Product;
    $product->category_id = $_POST['category_id'];
    $product->name = $_POST['name'];
    $product->price = $_POST['price'];
    $product->manufacturer = $_POST['price'];
    $product->quantity = $_POST['quantity'];
    $product->date_added = date('Y-m-d h:i:s');
    $product->description = $_POST['description'];
    $product->save();
  }

  public function updateProduct(){

  }

  public function destroyProduct(){

  }
}
