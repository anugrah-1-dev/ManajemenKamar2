<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sewa_id');
            $table->integer('harga_selected');
            $table->integer('biaya_admin');
            $table->integer('harga_total');
            $table->string('bukti_pembayaran');
            $table->timestamps();

            $table->foreign('sewa_id')->references('id')->on('sewas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
