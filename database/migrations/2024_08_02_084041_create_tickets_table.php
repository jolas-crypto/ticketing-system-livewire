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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('issue_number')->index();
            $table->string('modules')->nullable();
            $table->string('system')->nullable();
            $table->text('distributor_details')->nullable();
            $table->string('region_description')->nullable();
            $table->string('raised_by_name')->nullable();
            $table->string('assigned_to')->nullable();
            $table->string('priority')->nullable();
            $table->string('issue_classification')->nullable();
            $table->string('system_affected')->nullable();
            $table->text('other_assigned')->nullable();
            $table->text('initial_assessment')->nullable();
            $table->text('assessment')->nullable();
            $table->integer('resolution_duration')->nullable();
            $table->text('description')->nullable();
            $table->string('status')->index();
            $table->unsignedBigInteger('created_by')->default(0);
            $table->unsignedBigInteger('updated_by')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
