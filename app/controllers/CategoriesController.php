<?php

class CategoriesController extends BaseController{
  
  public function index(){
    $categories = Category::all();
    return View::make('index')->with('categories', $categories);
  }

  public function show($categories){
    $category = Category::find($categories);
    return View::make('show')->with('category', $category);
  }

  public function create(){
    return View::make('new');
  }

  public function edit($categories){
    $category = Category::find($categories);
    return View::make('edit')->with('category', $category);
  }

  public function store(){
    Category::create(Input::all());

    return Redirect::route('categories.index');
  }

  public function update($categories){
    $category = Category::find($categories);
    $category->create(Input::all());

    return Redirect::route('categories.index');
  }

  public function destroy($categories){
    $category = Category::find($categories);
    $category->delete();
    # Category::find($categories)->delete();

    return Redirect::route('categories.index');
  }
}
