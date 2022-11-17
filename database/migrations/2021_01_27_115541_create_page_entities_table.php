v<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageEntitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_entities', function (Blueprint $table) {
            $table->id();
            $table->string('page_name');
            $table->integer('page_status');
            $table->integer('page_type');
            $table->integer('page_layout');
            $table->integer('page_created_by');
            $table->integer('page_last_updated_by');

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
        Schema::dropIfExists('page_entities');
    }
}
