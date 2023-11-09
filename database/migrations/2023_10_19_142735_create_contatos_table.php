<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contatos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('add_remove');
            $table->string('nome');
            $table->string('filial');
            $table->string('email')->unique();;
            $table->string('transportadora');
            $table->string('numero');
            $table->string('status')->nullable();
            $table->string('edit')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contatos');
    }
};
