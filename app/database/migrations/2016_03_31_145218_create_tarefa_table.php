<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTarefaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tarefa', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nome', 120)->nullable();
			$table->text('descricao', 65535)->nullable();
			$table->integer('user_id')->nullable()->default(0);
			$table->integer('clientes_id')->nullable()->default(0);
			$table->integer('clientes_projetos_id')->nullable()->default(0);
			$table->integer('hora_esforco')->nullable()->default(0);
			$table->integer('minuto_esforco')->nullable()->default(0);
			$table->integer('minutos')->nullable()->default(0);
			$table->integer('tarefa_status_id')->nullable();
			$table->integer('tarefa_tipo_id')->nullable();
			$table->integer('criado_por')->nullable();
			$table->integer('status')->nullable();
			$table->integer('tarefa_anterior')->nullable();
			$table->integer('tarefa_proximo')->nullable();
			$table->dateTime('data_ini')->nullable();
			$table->dateTime('data_fim')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tarefa');
	}

}
