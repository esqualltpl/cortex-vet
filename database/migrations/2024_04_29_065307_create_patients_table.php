<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id')->nullable();
            $table->string('patient_name')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('dob')->nullable();
            $table->enum('sex', ['Male Intact', 'Male Neutered', 'Female Intact', 'Female Spayed', 'Unknown'])->nullable();
            $table->unsignedBigInteger('specie_type')->nullable();
            $table->enum('weight_type', ['Lbs', 'Kgs'])->nullable();
            $table->string('weight')->nullable();
            $table->unsignedBigInteger('breed')->nullable();
            $table->unsignedBigInteger('added_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
