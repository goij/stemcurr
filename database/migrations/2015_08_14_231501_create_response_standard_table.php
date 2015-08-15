<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponseStandardTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('response_standard', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('response_id')->unsigned();
            $table->foreign('response_id')->references('id')->on('responses')->onDelete('cascade');
            $table->integer('standard_id')->unsigned();
            $table->foreign('standard_id')->references('id')->on('standards')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('response_standard');
    }

}
