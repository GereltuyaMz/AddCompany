<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'company_name',
        'email',
        'phone_number'
    ];
    public $timestamps = false;
}
