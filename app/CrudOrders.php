<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrudOrders extends Model
{
    protected $table = 'orders';
    protected $fillable = ['Item_name', 'quantity'];
}
