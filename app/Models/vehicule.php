<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Vehicle extends Model
{
    use HasFactory;
    protected $table='vehicules';
    protected $fillable = [
        'matricule',
        'marque',
        'client_id',
    ];
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}