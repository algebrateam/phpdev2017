<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrgjedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orgjed', function(Blueprint $table)
		{
			$table->integer('sifOrgjed')->unsigned()->primary();
			$table->char('nazOrgjed', 60);
			$table->integer('sifNadorgjed')->unsigned()->nullable()->index('sifNadorgjed');
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
		Schema::drop('orgjed');
	}

}
