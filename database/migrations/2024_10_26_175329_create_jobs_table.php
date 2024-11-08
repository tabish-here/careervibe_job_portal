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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('job_type_id')->constrained()->onDelete('cascade');
            $table->integer('vacancy');
            $table->string('salary')->nullable();
            $table->string(column: 'location');
            $table->text(column: 'description')->nullable();
            $table->text(column: 'benefits')->nullable();
            $table->text(column: 'responsibility')->nullable();
            $table->text(column: 'qualification')->nullable();
            $table->text(column: 'Keywords')->nullable();
            $table->string('experience');
            $table->string('company_name');
            $table->string('company_location')->nullable();
            $table->string('company_website')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
