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
        Schema::create('medications', function (Blueprint $table) {
            $table->id();
            $table->string('medication_code');
            $table->integer('stock');
            $table->foreignId('type_id')->nullable()->constrained('medications_type')->onDelete('cascade');
            $table->string('name');
            $table->integer('dosage');
            $table->string('price');
            $table->date('expiration_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medications_');
    }
};
