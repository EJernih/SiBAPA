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
        Schema::create('bhp_request_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bhp_request_id')->constrained('bhp_requests')->onDelete('cascade');
            $table->foreignId('bhp_id')->constrained('bhps')->onDelete('cascade');
            $table->foreignId('unit_id')->constrained('units')->onDelete('cascade');
            $table->integer('quantity_requested');
            $table->text('description');         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bhp_request_details');
    }
};
