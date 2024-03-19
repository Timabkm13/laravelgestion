<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarburantsTable extends Migration
{ 
     
    public function up()
    {
        Schema::create('carburants', function (Blueprint $table) {
            $table->id();
            $table->string('type_carburant');
            $table->decimal('prix_unitaire', 8, 2);
            $table->timestamps();
        });
    }

     
    public function down()
{
    Schema::dropIfExists('carburants');
}
}