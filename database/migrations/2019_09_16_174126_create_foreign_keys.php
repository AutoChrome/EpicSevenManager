<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('equipment', function(Blueprint $table) {
			$table->foreign('account_id')->references('id')->on('accounts')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('stats', function(Blueprint $table) {
			$table->foreign('hero_id')->references('id')->on('heroes')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('equipment', function(Blueprint $table) {
			$table->dropForeign('equipment_account_id_foreign');
		});
		Schema::table('stats', function(Blueprint $table) {
			$table->dropForeign('stats_hero_id_foreign');
		});
	}
}