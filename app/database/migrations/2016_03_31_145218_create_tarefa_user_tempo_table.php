<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTarefaUserTempoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tarefa_user_tempo', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('tarefa_id')->nullable();
			$table->integer('user_id')->nullable();
			$table->dateTime('data_ini')->nullable();
			$table->dateTime('data_fim')->nullable();
			$table->integer('minutos')->nullable();
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
		Schema::drop('tarefa_user_tempo');
	}

}
