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
        Schema::create('bhp_requests', function (Blueprint $table) {
            $table->id();
            $table->string('semester');
            $table->string('academic_year');
            $table->string('request_by');
            $table->date('request_date');
            $table->enum ('status', ['pending', 'approved', 'rejected', 'completed']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bhp_requests');
    }
};
