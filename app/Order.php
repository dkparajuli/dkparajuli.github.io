<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
      protected $fillable = [
        'itemname','customername', 'contact','quantity','deliveryaddress'
    ];
}