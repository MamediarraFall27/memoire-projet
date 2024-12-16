<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiensImmobiliersTable extends Migration
{
    public function up()
    {
        Schema::create('biens_immobiliers', function (Blueprint $table) {
            $table->id();
            $table->string('adresse');
            $table->decimal('prix', 10, 2);
            $table->text('description');
            $table->string('etat');
            $table->foreignId('proprietaire_id')->constrained('proprietaires')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('biens_immobiliers');
    }
}
