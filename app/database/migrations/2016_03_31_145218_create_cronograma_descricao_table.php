<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCronogramaDescricaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cronograma_descricao', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('cronograma_id')->default(0);
			$table->string('nome', 50)->nullable();
			$table->integer('hora_esforco')->default(0);
			$table->integer('minuto_esforco')->default(0);
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
		Schema::drop('cronograma_descricao');
	}

}
