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
        Schema::create('issue_types', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->text('description')->nullable();
            $table->boolean('status')->default(true);
            $table->unsignedBigInteger('created_by')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issue_types');
    }
};
