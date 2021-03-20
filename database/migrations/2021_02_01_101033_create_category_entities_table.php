<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryEntitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_entities', function (Blueprint $table) {
            $table->id();
            $table->string('category_name');
            $table->longText('category_description')->nullable();
            $table->integer('category_status')->default(0);
            $table->integer('category_type')->default(0);
            $table->integer('category_layout')->default(0);
            $table->integer('category_created_by');
            $table->integer('category_last_updated_by');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_entities');
    }
}
