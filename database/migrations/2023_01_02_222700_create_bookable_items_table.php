<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookable_items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('description');
            $table->string('type');
            $table->json('images_url');
            $table->unsignedBigInteger('category_id')->nullable()->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreignId('location_id')->constrained();
            $table->boolean('available')->default(false);
            $table->decimal('price', 2, 1);
            $table->decimal('refund_percentage', 3, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookable_items', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropForeign(['location_id']);
        });
        Schema::dropIfExists('bookable_items');
    }
};
