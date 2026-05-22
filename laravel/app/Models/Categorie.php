<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'CAT_NOM',
    ];

    //Retrieve categories of a post.
    public function billets(){
        return $this->belongsToMany(Billet::class);
    }
}
