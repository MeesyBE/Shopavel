<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductEntitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_entities', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->integer('product_status');
            $table->integer('product_type');
            $table->integer('product_layout');
            $table->integer('product_created_by');
            $table->integer('product_last_updated_by');
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
        Schema::dropIfExists('product_entities');
    }
}
