<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = ['name', 'packs', 'total_qty', 'exp_date', 'price'];
}
