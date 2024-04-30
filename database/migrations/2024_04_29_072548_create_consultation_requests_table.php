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
        Schema::create('consultation_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('neuro_assessment_id')->nullable();
            $table->string('request_date_time')->nullable();
            $table->unsignedBigInteger('accept_by')->nullable();
            $table->string('accept_date_time')->nullable();
            $table->text('comments')->nullable();
            $table->enum('communicate_directly', ['Yes', 'No'])->nullable();
            $table->enum('share_through_email', ['Yes', 'No'])->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultation_requests');
    }
};
