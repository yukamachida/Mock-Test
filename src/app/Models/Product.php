<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
          'name',
          'price',
          'image',
          'description',
     ];
     public function user()
     {

          return $this->belongsTo(User::class);
     }

     public function condition()
     {
          return $this->belongsTo(Condition::class);
     }

     public function likes()
     {
          return $this->hasMany(Like::class);
     }
}
