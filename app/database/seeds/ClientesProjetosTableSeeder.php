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
				'id' => 7,
				'nome' => 'Plataforma',
				'clientes_id' => 17,
				'created_at' => '2016-04-18 20:40:27',
				'updated_at' => '2016-04-18 20:40:27',
			),
			1 => 
			array (
				'id' => 8,
				'nome' => 'Criação',
				'clientes_id' => 17,
				'created_at' => '2016-04-19 13:22:14',
				'updated_at' => '2016-04-19 13:22:14',
			),
			2 => 
			array (
				'id' => 9,
				'nome' => 'Plataforma',
				'clientes_id' => 18,
				'created_at' => '2016-04-19 13:37:42',
				'updated_at' => '2016-04-19 13:37:42',
			),
			3 => 
			array (
				'id' => 10,
				'nome' => 'Criação',
				'clientes_id' => 18,
				'created_at' => '2016-04-19 13:37:42',
				'updated_at' => '2016-04-19 13:37:42',
			),
			4 => 
			array (
				'id' => 11,
				'nome' => 'Criação',
				'clientes_id' => 19,
				'created_at' => '2016-04-19 13:49:11',
				'updated_at' => '2016-04-19 13:49:11',
			),
			5 => 
			array (
				'id' => 12,
				'nome' => 'Criação',
				'clientes_id' => 20,
				'created_at' => '2016-04-19 13:50:59',
				'updated_at' => '2016-04-19 13:50:59',
			),
			6 => 
			array (
				'id' => 13,
				'nome' => 'Criação',
				'clientes_id' => 21,
				'created_at' => '2016-04-19 13:51:26',
				'updated_at' => '2016-04-19 13:51:26',
			),
			7 => 
			array (
				'id' => 15,
				'nome' => 'Criação',
				'clientes_id' => 23,
				'created_at' => '2016-04-19 13:52:13',
				'updated_at' => '2016-04-19 13:52:13',
			),
			8 => 
			array (
				'id' => 16,
				'nome' => 'Criação',
				'clientes_id' => 24,
				'created_at' => '2016-04-19 13:52:32',
				'updated_at' => '2016-04-19 13:52:32',
			),
			9 => 
			array (
				'id' => 17,
				'nome' => 'Criação',
				'clientes_id' => 25,
				'created_at' => '2016-04-19 13:52:48',
				'updated_at' => '2016-04-19 13:52:48',
			),
			10 => 
			array (
				'id' => 18,
				'nome' => 'Criação',
				'clientes_id' => 26,
				'created_at' => '2016-04-19 13:53:12',
				'updated_at' => '2016-04-19 13:53:12',
			),
			11 => 
			array (
				'id' => 19,
				'nome' => 'Criação',
				'clientes_id' => 27,
				'created_at' => '2016-04-19 13:53:30',
				'updated_at' => '2016-04-19 13:53:30',
			),
			12 => 
			array (
				'id' => 20,
				'nome' => 'Criação',
				'clientes_id' => 36,
				'created_at' => '2016-04-19 14:41:49',
				'updated_at' => '2016-04-19 14:41:49',
			),
			13 => 
			array (
				'id' => 21,
				'nome' => 'Criação',
				'clientes_id' => 115,
				'created_at' => '2016-04-27 11:49:13',
				'updated_at' => '2016-04-27 11:49:13',
			),
			14 => 
			array (
				'id' => 22,
				'nome' => 'GTE | Gestão de E-commerce',
				'clientes_id' => 103,
				'created_at' => '2016-04-27 14:35:50',
				'updated_at' => '2016-04-27 14:35:50',
			),
		));
	}

}
