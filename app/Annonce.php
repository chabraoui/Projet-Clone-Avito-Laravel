<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{

    protected $fillable = ['title', 'text', 'price','photo1', 'user_id', 'categorie_id'];

    public function categorie(){
      return $this->belongsTo('App\Categorie');
    }
}
