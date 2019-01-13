<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriverLicencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_licences', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_of_issue');
            $table->date('expiration_date');
            $table->unsignedInteger('county_id');
            $table->foreign('county_id')->references('id')->on('counties');
            $table->unsignedInteger('driver_id');
            $table->foreign('driver_id')->references('id')->on('drivers')->onDelete('cascade');
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
        Schema::drop('driver_licences');
    }
}
