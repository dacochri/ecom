<?php

class CategoriesController extends BaseController{
  
  public function index(){
    $categories = Category::all();
    return View::make('index')->with('categories', $categories);
  }

  public function showCategory($id){
    $category = Category::find($id);
    return View::make('show')->with('category', $category);
  }

  public function newCategory(){
    return View::make('new');
  }

  public function editCategory($id){
    $category = Category::find($id);
    return View::make('edit')->with('category', $category);
  }

  public function createCategory(){
    Category::create([
      'category_id' => $_POST['category_id'],
      'name' => $_POST['name'],
    ]);
  }

  public function updateCategory($id){
    $category = Category::find($id);
    $category->category_id = $_POST['category_id'];
    $category->name = $_POST['name'];
    $category->save();
  }

  public function destroyCategory($id){
    $category = Category::find($id);
    $category->delete();
    # Category::find($id)->delete();
  }
}
