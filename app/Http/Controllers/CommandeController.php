<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;
use App\Models\Client;
use App\Models\Vehicle;
use App\Models\Carburant; // Assuming Carburant is the correct class name

class CommandeController extends Controller
{
    // public function index()
    // {
    //     $commandes=Commande::all();
    //     return view('commandes.index', compact('commandes'));
    // }    
    public function create(){
        $carburants = Carburant::all(); // Fetching carburants
        return view('commandes.add-commande', compact('carburants'));
    }
   
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'carburants_id' => 'required|integer',
            'date_commande' => 'required|date',
            'quantite_commandee' => 'required|numeric',
            'etat_paiement' => 'required|string',
        ]);

        // Check if client or vehicle needs to be created
        if ($request->has('nom') && $request->has('adresse') && $request->has('telephone')) {
            $client = Client::create([
                'nom' => $request->nom,
                'adresse' => $request->adresse,
                'telephone' => $request->telephone,
            ]);
            $validatedData['clients_id'] = $client->id;
        }

        if ($request->has('matricule') && $request->has('marque')) {
            $vehicle = Vehicle::create([
                'matricule' => $request->matricule,
                'marque' => $request->marque,
                'clients_id' => $validatedData['clients_id'] ?? null, // Set client_id if created
            ]);
            $validatedData['vehicules_id'] = $vehicle->id;
        }

        Commande::create($validatedData);

        return redirect()->route('commandes.index')->with('success', 'Commande créée avec succès!');
    }
}
