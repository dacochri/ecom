<?php

class Product extends Eloquent{
  protected $fillable = array('category_id', 'name', 'image', 'price', 'manufacturer', 'quantity', 'description');
}
