<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    use HasFactory;


    public function titre(){
        return $this->belongsTo(Titre::class);
    }

    public function commentaire(){
        return $this->hasMany(Commentaire::class);
    }

    public function redacteur(){
        return $this->belongsTo(User::class);
    }

    public function resume(){
        return $this->belongsTo(Resume::class);
    }

    public function alaune(){

    }

    public function saveAlaune($tab){
        $json=json_encode($tab);
        Storage::put('articles/alaunes.json', json_encode($json));
    }
}
