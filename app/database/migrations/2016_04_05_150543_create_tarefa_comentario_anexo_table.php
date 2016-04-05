<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTarefaComentarioAnexoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tarefa_comentario_anexo', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('tarefa_comentario_id')->nullable();
			$table->string('caminho', 80)->nullable();
			$table->string('nome', 80)->nullable();
			$table->string('caminho_completo', 80)->nullable();
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
		Schema::drop('tarefa_comentario_anexo');
	}

}
