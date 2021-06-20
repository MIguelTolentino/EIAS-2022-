<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->string('item_status');
            $table->char('status');
            $table->unsignedBigInteger('brands_id');
            $table->unsignedBigInteger('categories_id');
            $table->unsignedBigInteger('locations_id');
            $table->unsignedBigInteger('parts_id');
            $table->timestamps();
        });

        Schema::table('items', function (Blueprint $table) {
            $table->foreign('brands_id')->references('id')->on('brands')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('locations_id')->references('id')->on('brands')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('parts_id')->references('id')->on('brands')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
