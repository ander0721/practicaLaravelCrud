<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = "employee";
    protected $primaryKey = "emp_cod";
    public $timestamps = false;

    protected $fillable = [
        'emp_name', 'emp_email', 'emp_number',
    ];
}
