<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Divida extends Model
{
    //
	protected $fillable = [
    	'cliente', 'empresa', 'divida'
    ];
}
