<?php

class Product extends Eloquent{
  protected $table = 'products';

  protected $fillable = ['category_id', 'name', 'image', 'price', 'manufacturer', 'quantity', 'description'];
}
