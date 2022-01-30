<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emploiyee extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'matricule',
        'nom',
        'service',
        'telephone'
  
    ];
}
