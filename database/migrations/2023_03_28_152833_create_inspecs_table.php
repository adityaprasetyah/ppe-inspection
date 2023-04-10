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
        Schema::create('inspecs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('area_id');
            $table->string('string_id');
            $table->string('borrower_name');
            $table->string('ppe_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspecs');
    }
};
