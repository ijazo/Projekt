<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryDriverLicenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_driver_licences', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_of_pass');
            $table->unsignedInteger('driver_licence_id');
            $table->foreign('driver_licence_id')->references('id')->on('driver_licences');
            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::drop('category_driver_licences');
    }
}
