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
            $table->string('string_id');
            $table->string('ppe_name');
            $table->string('inspector_name');
            $table->date('inspection_date');
            $table->string('area_id');
            $table->string('borrower_name');
            $table->string('q1');
            $table->string('q2');
            $table->string('q3');
            $table->string('q4');
            $table->string('q5');
            $table->string('image');
            $table->string('notes');
            $table->string('recommendation');
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
