<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id();
            $table->string('menu_item_name');
            $table->integer('menu_id');
            $table->integer('menu_item_parent_id');
            $table->string('menu_item_href')->nullable();
            $table->integer('menu_item_type')->default(0);
            $table->integer('menu_item_created_by');
            $table->integer('menu_item_last_updated_by');
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
        Schema::dropIfExists('menu_items');
    }
}
