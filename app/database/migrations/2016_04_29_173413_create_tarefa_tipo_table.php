<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTarefaTipoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tarefa_tipo', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nome', 50)->nullable();
			$table->integer('hora_esforco')->nullable()->default(0);
			$table->integer('minuto_esforco')->nullable()->default(0);
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
		Schema::drop('tarefa_tipo');
	}

}
