<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    public function up()
    { 
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date_commande');
            $table->integer('quantite_commandee');
            $table->string('etat_paiement');
            $table->foreignId('client_id')->constrained('clients')->onDelete('cascade');
            $table->foreignId('carburant_id')->constrained('carburants')->onDelete('cascade');
            $table->foreignId('vehicule_id')->constrained('vehicules')->onDelete('cascade');
            $table->foreignId('facture_id')->constrained('factures')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
}
