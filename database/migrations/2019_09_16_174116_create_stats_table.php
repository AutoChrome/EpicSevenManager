<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatsTable extends Migration {

	public function up()
	{
		Schema::create('stats', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('hero_id')->unsigned();
			$table->smallInteger('level');
			$table->tinyInteger('awakened_level');
			$table->integer('attack');
			$table->integer('defense');
			$table->integer('health');
			$table->integer('speed');
			$table->integer('crit_chance');
			$table->integer('crit_damage');
			$table->integer('effectiveness');
			$table->integer('effect_resistance');
			$table->integer('dual_attack');
		});
	}

	public function down()
	{
		Schema::drop('stats');
	}
}