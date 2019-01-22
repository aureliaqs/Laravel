<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
protected $table = 'customer';
protected $primaryKey = 'customer_id';
public $timestamps = false;
protected $fillable = [
    'customer_id',
    'name',
    'address'];
}
