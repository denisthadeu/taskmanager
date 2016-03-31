<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTarefaAnexoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tarefa_anexo', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('tarefa_id')->nullable();
			$table->string('caminho', 80)->nullable();
			$table->string('nome', 80)->nullable();
			$table->string('caminho_completo', 120)->nullable();
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
		Schema::drop('tarefa_anexo');
	}

}
