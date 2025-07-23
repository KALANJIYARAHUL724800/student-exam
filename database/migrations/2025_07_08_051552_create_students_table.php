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
            $table->unsignedBigInteger('class_id')->index();
            $table->string('student_name');
            $table->string('student_email')->unique();
            $table->string('student_password');
            $table->boolean('active_flag')->index()->default(true);;
            $table->timestamps();
            $table->foreign('class_id')->references('id')->on('class_masters')->onDelete('cascade');
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
