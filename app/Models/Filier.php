<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filier extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle_filiere',
    ];
}
