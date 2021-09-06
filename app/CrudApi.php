<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrudApi extends Model
{
    protected $table = 'crud';
    protected $fillable = ['Employee_name','Item_name', 'stocks'];
}
