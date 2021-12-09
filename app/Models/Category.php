<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Category extends Model
{
    use HasFactory,Sluggable;
    public function sluggable(): array
    {
      return[
        'slug'=>['source'=>'cat_name']
      ];
    }
}
