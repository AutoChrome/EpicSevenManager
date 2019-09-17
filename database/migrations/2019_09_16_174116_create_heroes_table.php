<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHeroesTable extends Migration {

	public function up()
	{
		Schema::create('heroes', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->tinyInteger('natural_star');
			$table->string('attribute', 6);
			$table->string('class', 20);
			$table->string('star_sign', 25);
		});
	}

	public function down()
	{
		Schema::drop('hero');
	}
}