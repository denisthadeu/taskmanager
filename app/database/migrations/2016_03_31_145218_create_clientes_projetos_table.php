<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientesProjetosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clientes_projetos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nome', 50)->default('0');
			$table->boolean('clientes_id')->default(0)->index('clientes_id');
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
		Schema::drop('clientes_projetos');
	}

}
