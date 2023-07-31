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
        Schema::create('drugs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('category_id')->index();
            $table->foreign('category_id')->references('id')->on('categories')->cascadeOnDelete();
            $table->unsignedBigInteger('hard_drugs_id')->index();
            $table->foreign('hard_drugs_id')->references('id')->on('hard_drugs')->cascadeOnDelete();
            $table->unsignedBigInteger('soft_drugs_id')->index();
            $table->foreign('soft_drugs_id')->references('id')->on('soft_drugs')->cascadeOnDelete();
            $table->unsignedBigInteger('liquids_id')->index();
            $table->foreign('liquids_id')->references('id')->on('liquids')->cascadeOnDelete();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->unsignedDouble('price')->default(0);
            $table->unsignedInteger('viewed')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drugs');
    }
};
