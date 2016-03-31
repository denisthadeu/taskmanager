<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTarefaAlertaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tarefa_alerta', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('tarefa_id')->nullable();
			$table->integer('user_id')->nullable();
			$table->text('mensagem', 65535);
			$table->boolean('status')->nullable();
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
		Schema::drop('tarefa_alerta');
	}

}
