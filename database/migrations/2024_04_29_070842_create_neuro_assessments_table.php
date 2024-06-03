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
        Schema::create('neuro_assessments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id')->nullable();
            $table->text('medical_history')->nullable();
            $table->text('vaccination_history')->nullable();
            $table->text('diet_feeding_routine')->nullable();
            $table->text('current_therapy_response')->nullable();
            $table->text('patients_environment')->nullable();
            $table->text('neurological_exam_steps')->nullable();
            $table->text('notes')->nullable();
            $table->unsignedBigInteger('note_added_by')->nullable();
            $table->text('result')->nullable();
            $table->unsignedBigInteger('consult_by')->nullable();
            $table->unsignedBigInteger('treated_by')->nullable();
            $table->enum('status', ['Consult Neurologist', 'Treated'])->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neuro_assessments');
    }
};
