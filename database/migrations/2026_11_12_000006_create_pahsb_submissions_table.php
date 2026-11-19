<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pahsb_submissions', function (Blueprint $table) {
            $table->id();
            $table->string('type', 20)->index();
            $table->string('name', 120);
            $table->string('email', 190);
            $table->string('phone', 30);
            $table->string('subject', 180)->nullable();
            $table->text('message')->nullable();
            $table->string('project_interest', 30)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pahsb_submissions');
    }
};
