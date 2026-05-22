<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billet extends Model
{
    use HasFactory;
    protected $fillable = [
        'BIL_DATE',
        'BIL_TITRE',
        'BIL_CONTENU',
    ];

    //Retrieve comments of a post.
    public function commentaires(){
        return $this->hasMany(Commentaire::class);
    }

    //retrieve categories of a post.
    public function categories(){
        return $this->belongsToMany(Categorie::class);
    }
}
