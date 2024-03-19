<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carburant extends Model
{
    use HasFactory;
    protected $table='carburants';
    protected $fillable = [
        'type_carburant',
        'prix_unitaire',
    ];

}