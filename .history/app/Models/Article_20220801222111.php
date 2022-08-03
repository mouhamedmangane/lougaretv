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
        $txt=Storage::get('articles/alaunes.json');
        if(empty(trim($txt))){
            return [null,null,null,null];
        }
        $tab=json_decode($txt);
        dd($tab);
        return array_map(function($x){
            if($x>-1)
                return Article::find($x);
            else
                return null;
        },$tab->alaunes);
    }

    public function saveAlaune($tab){
        $object=(object)['alaunes'=>$tab];
        $json=json_encode($object);
        Storage::put('articles/alaunes.json', json_encode($json));
    }
}
