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
            $table->string('warehouse_total')->default('0');
            $table->string('warehouse_body_harness')->default('0');
            $table->string('warehouse_safety_helmet')->default('0');
            $table->string('warehouse_kap_las')->default('0');
            $table->string('warehouse_face_shield')->default('0');
            $table->string('warehouse_sarung_tangan_las')->default('0');
            $table->string('warehouse_earplug')->default('0');
            $table->string('warehouse_safety_shoes')->default('0');
            $table->string('warehouse_vest')->default('0');
            $table->string('onsite_total')->default('0');
            $table->string('onsite_body_harness')->default('0');
            $table->string('onsite_safety_helmet')->default('0');
            $table->string('onsite_kap_las')->default('0');
            $table->string('onsite_face_shield')->default('0');
            $table->string('onsite_sarung_tangan_las')->default('0');
            $table->string('onsite_earplug')->default('0');
            $table->string('onsite_safety_shoes')->default('0');
            $table->string('onsite_vest')->default('0');
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
