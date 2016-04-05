<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMensagemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mensagem', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('destinatario_id')->default(0);
			$table->integer('remetente_id')->default(0);
			$table->string('assunto', 50)->nullable();
			$table->text('mensagem', 65535)->nullable();
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
		Schema::drop('mensagem');
	}

}
