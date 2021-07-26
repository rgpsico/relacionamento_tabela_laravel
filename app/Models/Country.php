<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;
use App\Models\State;

class Country extends Model
{
    protected $fillable = ['name'];
   public function location()
   {
       return $this->hasOne(Location::class);
       //return $this->hasOne(Location::class,"id_queserelaicona");
   }

   public function states() 
   {
       return $this->hasMany(State::class);

   }

   public function cities(){
       return $this->hasManyThrough(City::class,State::class);
   }

   public function comments()
   {
       return $this->morphMany(Comment::class, 'commentable');
   }
}
