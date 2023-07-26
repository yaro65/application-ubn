<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class etudiant extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'matricul',
        'nom',
        'prenom',
        'date_naissace',
        'email',
        'sexe',
        'nationalite',
        'filiere',
        'cycle',
        'niveau_detude',
        'annee_accademique',
        'image',
    ];
}
