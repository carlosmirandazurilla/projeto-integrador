<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table = 'compra';
    protected $primaryKey = 'id';
    protected $dates = ['data_compra', 'data_entrega'];
}
