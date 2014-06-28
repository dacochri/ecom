<?php

class CategoriesController extends BaseController{
  
  public function index(){
    $categories = Category::all();
    return View::make('categories.index')->with('categories', Category::all());
  }

  public function show($categories){
    $category = Category::find($categories);
    return View::make('categories.show')->with('category', Category::find($categories));
  }

  public function create(){
    return View::make('categories.create');
  }

  public function edit($categories){
    return View::make('categories.edit')->with('category', Category::find($categories));
  }

  public function store(){
    Category::create(Input::all());
    return Redirect::route('categories.index');
  }

  public function update($categories){
    $category = Category::find($categories);
    $category->category_id = Input::get('category_id');
    $category->name = Input::get('name');
    $category->save();
    return Redirect::route('categories.index');
  }

  public function destroy($categories){
    Category::destroy($categories);
    return Redirect::route('categories.index');
  }
}
