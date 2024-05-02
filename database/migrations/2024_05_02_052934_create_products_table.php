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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('short_description');//sting for short names
            $table->text('description');  //text for large content
            $table->decimal('regular_price'); //column will hold decimal values.
            $table->decimal('sale_price')->nullable();
            $table->string('SKU');
            $table->enum('stock_status',["instock","outofstock"]); //store one of a predefined set of string values
            $table->boolean('featured')->default(false); //only store two states: true or false.
            $table->unsignedInteger('quantity')->default('1'); //unsgisnedInteger  only store positive whole numbers.
            $table->string('image');
            $table->text('images');
            $table->unsignedBigInteger('category_id'); //similar to unsignedInteger, but it allows for larger integer values. It's often used for columns that reference IDs or identifiers in other tables, such as foreign keys.
            $table->unsignedBigInteger('brand_id');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            // Defines a foreign key constraint for the "category_id" column in the current table.
            //Specifies that the "category_id" column in the current table references the "id" column in the "categories" table.
            //Specifies that if a row in the "categories" table is deleted, all associated rows in the current table will also be deleted. This ensures that related data is removed to maintain referential integrity, and it's known as cascading delete.
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
