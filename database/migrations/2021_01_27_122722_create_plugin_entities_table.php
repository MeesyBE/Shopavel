<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePluginEntitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plugin_entities', function (Blueprint $table) {
            $table->id();
            $table->string('plugin_name');
            $table->string('plugin_code');
            $table->integer('plugin_status');
            $table->integer('plugin_type');
            $table->integer('plugin_update');
            $table->double('page_version');
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
        Schema::dropIfExists('plugin_entities');
    }
}
