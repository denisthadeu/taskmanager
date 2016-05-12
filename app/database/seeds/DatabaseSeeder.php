<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('ClientesTableSeeder');
		$this->call('ClientesProjetosTableSeeder');
		$this->call('CronogramaTableSeeder');
		$this->call('CronogramaDescricaoTableSeeder');
		$this->call('EquipeTableSeeder');
		$this->call('EquipeUserTableSeeder');
		$this->call('EstadocivilTableSeeder');
		$this->call('MensagemTableSeeder');
		$this->call('MigrationsTableSeeder');
		$this->call('TarefaTableSeeder');
		$this->call('TarefaAlertaTableSeeder');
		$this->call('TarefaAnexoTableSeeder');
		$this->call('TarefaBriefingTableSeeder');
		$this->call('TarefaComentarioTableSeeder');
		$this->call('TarefaComentarioAnexoTableSeeder');
		$this->call('TarefaStatusTableSeeder');
		$this->call('TarefaTipoTableSeeder');
		$this->call('TarefaUserTempoTableSeeder');
		$this->call('EquipeClientesTableSeeder');
	}

}
