<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
protected $table = 'employee';
protected $primaryKey = 'employee_id';
public $timestamps = false;
protected $fillable = [
    'employee_id',
    'employee_name',
    'empoyee_address',
'employee_phone"_number'];
}
