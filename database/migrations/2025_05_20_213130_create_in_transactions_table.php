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
            $table->date('intransaction_date');
            $table->foreignId('lab_id')->constrained('labs')->onDelete('cascade');
            $table->foreignId('bhp_id')->constrained('bhps')->onDelete('cascade');
            $table->integer('qty_intransaction');
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
