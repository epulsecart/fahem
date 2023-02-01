<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPrices extends Model
{
  protected $table = "products_prices";

  public $timestamps = false;

  public function Service()
  {
    return $this->belongsTo('App\Service');
  }
}
