<?php

class TarefaStatusTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('tarefa_status')->delete();
        
		\DB::table('tarefa_status')->insert(array (
			0 => 
			array (
				'id' => 1,
				'nome' => 'Aguardando',
				'created_at' => '2016-03-21 16:28:07',
				'updated_at' => '2016-03-21 16:28:07',
			),
			1 => 
			array (
				'id' => 2,
				'nome' => 'Avaliando',
				'created_at' => '2016-03-21 16:28:07',
				'updated_at' => '2016-03-21 16:28:07',
			),
			2 => 
			array (
				'id' => 3,
				'nome' => 'Em aprovação',
				'created_at' => '2016-03-21 16:28:07',
				'updated_at' => '2016-03-21 16:28:07',
			),
			3 => 
			array (
				'id' => 4,
				'nome' => 'Em produção',
				'created_at' => '2016-03-21 16:28:07',
				'updated_at' => '2016-03-21 16:28:07',
			),
			4 => 
			array (
				'id' => 5,
				'nome' => 'Pendente',
				'created_at' => '2016-03-21 16:28:07',
				'updated_at' => '2016-03-21 16:28:07',
			),
			5 => 
			array (
				'id' => 6,
				'nome' => 'Entregue',
				'created_at' => '2016-03-21 16:28:07',
				'updated_at' => '2016-03-21 16:28:07',
			),
		));
	}

}
