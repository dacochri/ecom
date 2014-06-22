<?php

class CategoriesController extends BaseController{
  
  public function index(){
    return View::make('index')->with('categories', $categories);
  }

  public function showCategory(){
    return View::make('show')->with('id', $id);
  }

  public function newCategory(){
    return View::make('new');
  }

  public function editCategory(){
    return View::make('edit')->with('category', $category);
  }

  public function createCategory(){

  }

  public function updateCategory){

  }

  public function destroyCategory(){

  }
}
