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
        Schema::create('stoks', function (Blueprint $table) {
            $table->id('stok_id');
            $table->DateTime('stok_tanggal');
            $table->integer('stok_jumlah');
            $table->foreignId('supplier_id')-> constrained('suppliers','supplier_id');
            $table->foreignId('barang_id')->constrained('barangs','barang_id');
            $table->foreignId('user_id')->constrained('users','user_id');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stoks');
    }
};
