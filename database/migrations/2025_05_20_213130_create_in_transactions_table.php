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
        Schema::create('in_transactions', function (Blueprint $table) {
            $table->id();
            $table->date('transaction_date');
            $table->string('prodi');
            $table->foreignId('bhp_id')->constrained('bhps')->onDelete('cascade');
            $table->integer('qty_intransaction');
            $table->foreignId('unit_id')->constrained('units')->onDelete('cascade');
            $table->string('location');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('in_transactions');
    }
};
