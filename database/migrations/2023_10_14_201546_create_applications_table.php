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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('nik');
            $table->string('alamat');
            $table->integer('telepon');
            $table->string('email');
            $table->string('univ');
            // $table->string('lokasi');
            $table->string('mulai');
            $table->string('selesai');
            $table->longText('keterangan')->nullable();
            $table->string('berkasktp');
            $table->string('berkasktm');
            $table->string('berkaspermohonan');
            $table->string('berkasproposal');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('institution_id')->constrained()->onDelete('cascade');
            $table->foreignId('stat_id')->constrained()->onDelete('cascade');
            $table->longText('keteranganadmin')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
