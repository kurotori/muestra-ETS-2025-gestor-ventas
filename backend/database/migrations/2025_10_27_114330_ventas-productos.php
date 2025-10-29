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
         Schema::create('ventas_productos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('ventas_id');
            $table->bigInteger('productos_id');

            $table->foreign('ventas_id')->references('id')->on('ventas');
            $table->foreign('productos_id')->references('id')->on('productos');
         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas_productos');
    }
};
