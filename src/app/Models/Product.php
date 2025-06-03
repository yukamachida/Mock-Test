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

     public function likedUsers()
     {
          return $this->belongsToMany(User::class, 'likes')->withTimestamps();
     }
     public function comments()
     {
          return $this->hasMany(Comment::class);
     }

     public function categories()
     {
          return $this->belongsToMany(Category::class);
     }

     public function purchase() 
     {
          return $this->hasOne(Purchase::class);
     }

     public function getIsSoldAttribute()
     {
          return $this->purchase !== null;
     }

}
