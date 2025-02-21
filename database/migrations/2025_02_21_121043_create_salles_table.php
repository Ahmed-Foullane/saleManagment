<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom');
            $table->text('description');
            $table->decimal('prix', 8, 2); // Instead of float
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending');
            $table->integer('nbr_places')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salles');
    }
};
