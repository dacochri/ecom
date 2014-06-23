<?php

class CategoriesController extends BaseController{
  
  public function index(){
    $categories = Category::all();
    return View::make('index')->with('categories', $categories);
  }

  public function showCategory(){
    $category = Category::find($id);
    return View::make('show')->with('category', $category);
  }

  public function newCategory(){
    return View::make('new');
  }

  public function editCategory(){
    $category = Category::find($id);
    return View::make('edit')->with('category', $category);
  }

  public function createCategory(){
    Category::create([
      'category_id' => $_POST['category_id'],
      'name' => $_POST['name'],
    ]);
  }

  public function updateCategory){

  }

  public function destroyCategory(){

  }
}
