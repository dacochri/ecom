<?php

class ProductsController extends BaseController{
  
  public function index(){
    return View::make('products/index')->with('products', $products);
  }

  public function showProduct(){
    return View::make('products/show')->with('id', $id);
  }

  public function newProduct(){
    return View::make('products/new');
  }

  public function editProduct(){
    return View::make('products/edit')->with('product', $product);
  }

  public function createProduct(){

  }

  public function updateProduct(){

  }

  public function destroyProduct(){

  }
}
