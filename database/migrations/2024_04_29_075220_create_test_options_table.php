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
        Schema::create('test_options', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('test_id')->nullable();
            $table->string('name')->nullable();
            $table->string('video_url')->nullable();
            $table->string('upload_video')->nullable();
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
        Schema::dropIfExists('test_options');
    }
};