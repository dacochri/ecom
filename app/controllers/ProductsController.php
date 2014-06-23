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

  public function updateProduct(){

  }

  public function destroyProduct(){

  }
}
