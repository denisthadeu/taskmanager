<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTarefaBriefingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tarefa_briefing', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('tarefa_id')->default(0);
			$table->string('pergunta', 100)->nullable();
			$table->string('resposta', 200)->nullable();
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
		Schema::drop('tarefa_briefing');
	}

}
