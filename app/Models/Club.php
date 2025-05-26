<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    protected $fillable = ['nom'];
    protected $table = 'club';
    public $timestamps = false;
    public function eleves(){
        return $this->hasMany(Eleve::class);
    }

    /*
     //  Club a plusieurs élèves
    public function eleves()
    {
        return $this->hasMany(Eleve::class, 'codeClub', 'codeClub');
    }

    // Club a plusieurs activités (optionnel)
    public function activites()
    {
        return $this->hasMany(Activite::class, 'codeClub', 'codeClub');
    }

    */

}
