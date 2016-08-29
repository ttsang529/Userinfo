<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Griddata
 extends Model
{       

     public $fillable = ['first_name','last_name','email','gender','country','salary'];
}
