<?php

class Category extends Eloquent{
  protected $table = 'categories';  

  protected $fillable = ['category_id', 'name'];
}
