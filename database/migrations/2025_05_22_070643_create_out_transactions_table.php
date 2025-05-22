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
        Schema::create('out_transactions', function (Blueprint $table) {
            $table->id();
            $table->date('outtransaction_date');
            $table->string('matakuliah');
            $table->string('prodi');
            $table->string('location');
            $table->foreignId('bhp_id')->constrained('bhps')->onDelete('cascade');
            $table->integer('qty_outtransaction');
            $table->foreignId('unit_id')->constrained('units')->onDelete('cascade');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('out_transactions');
    }
};
