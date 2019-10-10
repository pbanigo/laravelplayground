<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'city',
        'country',
        'job_title'       
    ];
    //show it can write to indicated columns?
}
