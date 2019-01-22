<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    protected $table = 'supplier';
    public $timestamps = false;
protected $fillable = [
    'supplier_id', 
    'supplier_name', 
    'supplier_address'];
}
