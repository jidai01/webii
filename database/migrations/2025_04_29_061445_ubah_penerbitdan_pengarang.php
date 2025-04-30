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
        Schema::table('buku', function (Blueprint $table) {
            $table->renameColumn('pengarang', 'id_pengarang');
            $table->renameColumn('penerbit', 'id_penerbit');

            $table->unsignedBigInteger('id_pengarang')->change();
            $table->unsignedBigInteger('id_penerbit')->change();

            $table->foreign('id_pengarang')->references('id_pengarang')->on('pengarang');
            $table->foreign('id_penerbit')->references('id_penerbit')->on('penerbit');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
