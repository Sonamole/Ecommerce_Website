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
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique(); //specify that the values in the "slug" column must be unique across all rows in the table. This means that no two rows can have the same value in the "slug" column.
            $table->string('image')->nullable(); //specify that the "image" column can contain NULL values, meaning it is optional for a row to have a value in this column. If no value is provided, it will default to NULL.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
