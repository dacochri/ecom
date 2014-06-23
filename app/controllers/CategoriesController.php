<?php

class CategoriesController extends BaseController{
  
  public function index(){
    $categories = Category::all();
    return View::make('index')->with('categories', $categories);
  }

  public function showCategory($categories){
    $category = Category::find($categories);
    return View::make('show')->with('category', $category);
  }

  public function newCategory(){
    return View::make('new');
  }

  public function editCategory($categories){
    $category = Category::find($categories);
    return View::make('edit')->with('category', $category);
  }

  public function createCategory(){
    Category::create([
      'category_id' => $_POST['category_id'],
      'name' => $_POST['name'],
    ]);
  }

  public function updateCategory($categories){
    $category = Category::find($categories);
    $category->category_id = $_POST['category_id'];
    $category->name = $_POST['name'];
    $category->save();
  }

  public function destroyCategory($categories){
    $category = Category::find($categories);
    $category->delete();
    # Category::find($categories)->delete();
  }
}
