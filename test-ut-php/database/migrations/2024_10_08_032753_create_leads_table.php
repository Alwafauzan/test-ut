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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->unsignedBigInteger('id_sales');
            $table->unsignedBigInteger('id_produk');
            $table->string('no_wa');
            $table->string('nama_lead');
            $table->string('kota');
            $table->unsignedBigInteger('id_user');
            $table->timestamps();

            $table->foreign('id_sales')->references('id')->on('sales');
            $table->foreign('id_produk')->references('id')->on('produk');
            $table->foreign('id_user')->references('id')->on('users'); // Asumsikan ada tabel users
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
