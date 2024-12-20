<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturesTable extends Migration
{
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('location_id')->constrained('locations')->onDelete('cascade');
            $table->decimal('montant', 10, 2);
            $table->string('mode_paiement');
            $table->date('date_facture');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('factures');
    }
}
