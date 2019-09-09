<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListTitlecatalogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_titlecatalog', function (Blueprint $table) {
            $table->bigIncrements('id_list');
            $table->string('image');
            $table->string('name');
            $table->bigInteger('id_title')->unsigned();
            $table->foreign('id_title')->references('id_titlecatalog')->on('titlecatalog');
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
        Schema::dropIfExists('list_titlecatalog');
    }
}
