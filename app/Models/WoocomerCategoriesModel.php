<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WoocomerCategoriesModel extends Model
{
    use HasFactory;

      /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
        'id',
        'name'
    ];
}
