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
        Schema::create('ppes', function (Blueprint $table) {
            $table->id();
            $table->string('total')->default('0');
            $table->string('total_warehouse')->default('0');
            $table->string('total_onsite')->default('0');
            $table->string('body_harness')->default('0');
            $table->string('safety_helmet')->default('0');
            $table->string('kap_las')->default('0');
            $table->string('face_shield')->default('0');
            $table->string('sarung_tangan_las')->default('0');
            $table->string('earplug')->default('0');
            $table->string('safety_shoes')->default('0');
            $table->string('vest')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppes');
    }
};
