<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nom','prenom','club_id'];

    // Élève appartient à un seul club
    public function club()
    {
      return $this->belongsTo(Club::class);
    }

    //  Élève participe à plusieurs activités
     public function activites()
    {
      return $this->belongsToMany(Activite::class,'eleve_activite','eleve_id','activite_id');
     }
}
