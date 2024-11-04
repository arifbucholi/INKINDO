<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id(); // Menambahkan kolom ID auto increment
            $table->string('no')->nullable(); // Kolom untuk 'no'
            $table->string('badan_hukum')->nullable(); // Kolom untuk 'badan_hukum'
            $table->integer('contact_id')->nullable(); // Kolom untuk 'contact_id'
            $table->date('diangkat')->nullable(); // Kolom untuk 'diangkat'
            $table->integer('jtm')->nullable(); // Kolom untuk 'jtm'
            $table->integer('nomor_anggota')->nullable(); // Kolom untuk 'nomor_anggota'
            $table->string('status')->nullable(); // Kolom untuk 'status'
            $table->date('tahun_berlaku')->nullable(); // Kolom untuk 'tahun_berlaku'
            $table->string('kualifikasi')->nullable(); // Kolom untuk 'kualifikasi'
            $table->string('name')->nullable(); // Kolom untuk 'name'
            $table->string('address')->nullable(); // Kolom untuk 'address'
            $table->string('city')->nullable(); // Kolom untuk 'city'
            $table->string('postal_code')->nullable(); // Kolom untuk 'postal_code'
            $table->string('director')->nullable(); // Kolom untuk 'director'
            $table->string('work_phone')->nullable(); // Kolom untuk 'work_phone'
            $table->string('mobile_phone')->nullable(); // Kolom untuk 'mobile_phone'
            $table->string('fax_phone')->nullable(); // Kolom untuk 'fax_phone'
            $table->string('email')->nullable(); // Kolom untuk 'email'
            $table->boolean('kode_etik')->default(false); // Kolom untuk 'kode_etik'
            $table->string('no_sertifikat_kode_etik')->nullable(); // Kolom untuk 'noSertifikatKodeEtik'
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
