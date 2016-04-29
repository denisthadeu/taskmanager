<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('email', 50)->nullable();
			$table->string('password', 64)->nullable();
			$table->string('remember_token', 64)->nullable();
			$table->string('nome', 50)->nullable();
			$table->string('sobrenome', 50)->nullable();
			$table->string('cpf', 18)->nullable();
			$table->string('telefone', 20)->nullable();
			$table->string('celular', 20)->nullable();
			$table->string('cargo', 20)->nullable();
			$table->timestamp('hired_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('foto_nome', 150)->nullable();
			$table->string('foto_caminho', 150)->nullable();
			$table->string('foto_caminho_completo', 150)->nullable();
			$table->string('sexo', 10)->nullable();
			$table->boolean('estadocivil_id')->nullable()->default(0);
			$table->boolean('perfil')->nullable();
			$table->string('data_nascimento', 15)->nullable();
			$table->boolean('status')->nullable();
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
		Schema::drop('user');
	}

}
