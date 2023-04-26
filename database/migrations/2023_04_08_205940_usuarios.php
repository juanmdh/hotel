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
        Schema::create('usuarios', function(Blueprint $table){
            $table->id();
            $table->string('correo')->unique();
            $table->string('contrasena')->nullable()->change();
            $table->string('numero_documento')->unique();
            $table->string('nombres');
            $table->string('primerApellido');
            $table->string('segundoApellido');
            $table->string('imagen')->nullable();
            $table->string('telefono')->nullable();
            $table->integer('sexo')->nullable();
            $table->date('fechaNacimiento')->nullable();
            $table->unsignedBigInteger('idTiposdocumentos');
            $table->unsignedBigInteger('idTiposusuarios');
            $table->timestamps();

            $table->foreign('idTiposdocumentos')->references('id')->on('tipos_documentos');
            $table->foreign('idTiposusuarios')->references('id')->on('tipos_usuarios');
        });
    }

    public function boot(): void
    {
        Schema::creating(function($user) {
            $user->contrasena = bcrypt($user->contrasena);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
