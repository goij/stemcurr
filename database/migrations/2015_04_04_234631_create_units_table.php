<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('units', function(Blueprint $table)
		{
			$table->increments('id');
            $table->text('title');
            $table->text("overview");
            $table->text("team_leader");
            $table->text("team_members");
            $table->text("non_profit_partners");
            $table->text("corporate_partners");
            $table->text("au_faculty");
            $table->integer('subject_id')->unsigned();
            $table->foreign('subject_id')->references('id')->on('topics')->onDelete('cascade');
            $table->integer('grade_id')->unsigned();
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('cascade');
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
		Schema::drop('units');
	}

}
