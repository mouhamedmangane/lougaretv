<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;


    public function titre(){
        return $this->belongsTo(Titre::class);
    }

    public function commentaire(){
        return $this->hasMany(Commentaire::class);
    }
}