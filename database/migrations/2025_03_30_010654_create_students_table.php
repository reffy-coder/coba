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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap',300);
            $table->string('namapanggilan',300);
            $table->string('email',300);
            $table->string('nomor_hp',17);
            $table->string('jalur',300);
            $table->text('image');
            $table->string('programstudi_1',300);
            $table->string('programstudi_2',300);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
