<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEquipmentTable extends Migration {

	public function up()
	{
		Schema::create('equipment', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('account_id')->unsigned()->index();
			$table->integer('slot');
			$table->smallInteger('level');
			$table->smallInteger('enhanced');
			$table->string('quality', 255);
			$table->integer('attack');
			$table->smallInteger('attack_percent');
			$table->integer('defense');
			$table->smallInteger('defense_percent');
			$table->integer('health');
			$table->smallInteger('health_percent');
			$table->smallInteger('speed');
			$table->smallInteger('crit_chance');
			$table->smallInteger('crit_damage');
			$table->smallInteger('effectiveness');
			$table->smallInteger('effect_resistance');
		});
	}

	public function down()
	{
		Schema::drop('equipment');
	}
}