<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Commande extends Model
{
    use HasFactory;
    protected $table='commandes';
    protected $fillable = [
        'date_commande',
        'quantite_commandee',
        'etat_paiement',
        'clients_id',
        'carburants_id',
        'vehicules_id',
        'factures_id',
    ];
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function carburant()
    {
        return $this->belongsTo(Carburant::class);
    }

    public function vehicule()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function facture()
    {
        return $this->belongsTo(Facture::class);
    }
}