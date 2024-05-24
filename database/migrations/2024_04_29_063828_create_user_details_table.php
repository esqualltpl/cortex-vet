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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->enum('contact_type', ['Personal Mobile','Work Mobile', 'Home', 'Office'])->nullable();
            $table->string('contact_no')->nullable();
            $table->string('vet_license')->nullable();
            $table->string('license_state')->nullable();
            $table->string('license_country')->nullable();
            $table->enum('address', ['Clinic', 'Home'])->nullable();
            $table->string('main_street')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
