<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Titre extends Model
{
    use HasFactory;

    public function Article(){
        return $this->hasOne(Article::class);
    }

    public function alaune(){
        try {
            $txt=Storage::get('articles/alaunes.json');
            $tab=json_decode($txt);
            $tab= array_map(function($x){
                if($x>-1){
                    $titre=Titre::find($x);
                    $titre->image=$titre->article->image;;
                    return $titre;

                }
                else{
                    return null;
                }
            },$tab->alaunes);
            return $tab;
        } catch (\Throwable $th) {
            return [null,null,null,null];
        }

    }

    public function saveAlaune($tab){
        $object=(object)['alaunes'=>$tab];
        $json=json_encode($object);
        Storage::put('articles/alaunes.json', $json);
    }
}
