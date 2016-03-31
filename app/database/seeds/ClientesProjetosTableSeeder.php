<?php

class ClientesProjetosTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('clientes_projetos')->delete();
        
		\DB::table('clientes_projetos')->insert(array (
			0 => 
			array (
				'id' => 1,
				'nome' => 'Projeto 1',
				'clientes_id' => 1,
				'created_at' => '2016-03-22 16:25:23',
				'updated_at' => '2016-03-22 16:25:23',
			),
			1 => 
			array (
				'id' => 2,
				'nome' => 'Projeto 2',
				'clientes_id' => 1,
				'created_at' => '2016-03-22 16:25:23',
				'updated_at' => '2016-03-22 16:25:23',
			),
			2 => 
			array (
				'id' => 3,
				'nome' => 'Projeto 3',
				'clientes_id' => 1,
				'created_at' => '2016-03-22 16:25:23',
				'updated_at' => '2016-03-22 16:25:23',
			),
			3 => 
			array (
				'id' => 5,
				'nome' => 'Projeto 1 do cliente 2',
				'clientes_id' => 16,
				'created_at' => '2016-03-22 16:27:11',
				'updated_at' => '2016-03-22 17:43:58',
			),
			4 => 
			array (
				'id' => 6,
				'nome' => 'Projeto 2',
				'clientes_id' => 16,
				'created_at' => '2016-03-22 16:27:11',
				'updated_at' => '2016-03-22 16:27:11',
			),
		));
	}

}
