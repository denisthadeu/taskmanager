<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEquipeClientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('equipe_clientes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('cliente_id')->default(0)->index('cliente_id');
			$table->integer('equipe_id')->default(0)->index('equipe_id');
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
		Schema::drop('equipe_clientes');
	}

}
