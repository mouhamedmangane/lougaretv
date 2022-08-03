<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titre extends Model
{
    use HasFactory;

    public function Article(){
        return $this->hasOne(Article::class);
    }
}
