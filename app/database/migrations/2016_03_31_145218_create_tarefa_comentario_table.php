<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTarefaComentarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tarefa_comentario', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('descricao', 65535)->nullable();
			$table->integer('user_id')->nullable();
			$table->integer('tarefa_id')->nullable();
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
		Schema::drop('tarefa_comentario');
	}

}
