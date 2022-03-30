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
    public function up()        // se crea la tabla
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();   // integer, Unsigned, increment
            $table->string('name', 50);     // varchar 50
            $table->string('email')->unique();     // unique -- email debe ser unico
            $table->timestamp('email_verified_at')->nullable();     //nullable  -- puede quedar vacío
            $table->string('password');
            $table->rememberToken();    // almacena token
            $table->timestamps();   // 2 columnas: created_at y update_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()      // elimina tabla
    {
        Schema::dropIfExists('users');
    }
};
