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
            $table->string('q1')->nullable();
            $table->string('q2')->nullable();
            $table->string('q3')->nullable();
            $table->string('q4')->nullable();
            $table->string('q5')->nullable();
            $table->string('q6')->nullable();
            $table->string('q7')->nullable();
            $table->string('q8')->nullable();
            $table->string('q9')->nullable();
            $table->string('image')->nullable();
            $table->string('notes')->nullable();
            $table->string('recommendation')->nullable();
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
