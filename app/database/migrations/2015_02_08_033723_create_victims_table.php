<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVictimsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('victims', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name',100);
            $table->string('nic',15);
            $table->integer('user_id')->unsigned();
            $table->string('address',1000);
            $table->string('country',250);
            $table->string('city',250);
            $table->string('phone',13);
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
		Schema::drop('victims');
	}

}
