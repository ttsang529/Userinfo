<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BootGridData
 extends Model
{
     public $fillable = ['first_name','last_name','email','gender','country','salary'];
}
