<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'ref_machine',
        'nom_machine',
        'date_service',
        'etat_machine'
    ];
}
