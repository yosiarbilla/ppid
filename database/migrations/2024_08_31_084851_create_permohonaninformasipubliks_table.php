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
        Schema::create('permohonaninformasipubliks', function (Blueprint $table) {
            $table->id();
            
            $table->string('nik')->nullable();
            $table->string('nama')->nullable();
            $table->string('imagektp')->nullable();
            $table->longText('alamat')->nullable();
            $table->string('email')->nullable();
            $table->string('nomortelepon')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->longText('rincianinformasi')->nullable();
            $table->longText('tujuan')->nullable();
            $table->string('caramemperolehinformasi')->nullable();
            $table->string('mendapatkansalinaninformasi')->nullable();
            $table->string('caramendapatkansalinaninformasi')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permohonaninformasipubliks');
    }
};
