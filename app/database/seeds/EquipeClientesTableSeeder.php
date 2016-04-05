<?php

class EquipeClientesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('equipe_clientes')->delete();
        
		\DB::table('equipe_clientes')->insert(array (
			0 => 
			array (
				'id' => 14,
				'cliente_id' => 1,
				'equipe_id' => 3,
				'created_at' => '2016-04-04 14:12:01',
				'updated_at' => '2016-04-04 14:12:01',
			),
			1 => 
			array (
				'id' => 15,
				'cliente_id' => 16,
				'equipe_id' => 3,
				'created_at' => '2016-04-04 14:12:01',
				'updated_at' => '2016-04-04 14:12:01',
			),
			2 => 
			array (
				'id' => 16,
				'cliente_id' => 1,
				'equipe_id' => 1,
				'created_at' => '2016-04-04 14:12:13',
				'updated_at' => '2016-04-04 14:12:13',
			),
			3 => 
			array (
				'id' => 17,
				'cliente_id' => 16,
				'equipe_id' => 1,
				'created_at' => '2016-04-04 14:12:13',
				'updated_at' => '2016-04-04 14:12:13',
			),
			4 => 
			array (
				'id' => 18,
				'cliente_id' => 1,
				'equipe_id' => 4,
				'created_at' => '2016-04-04 14:12:18',
				'updated_at' => '2016-04-04 14:12:18',
			),
			5 => 
			array (
				'id' => 19,
				'cliente_id' => 16,
				'equipe_id' => 4,
				'created_at' => '2016-04-04 14:12:18',
				'updated_at' => '2016-04-04 14:12:18',
			),
			6 => 
			array (
				'id' => 20,
				'cliente_id' => 1,
				'equipe_id' => 2,
				'created_at' => '2016-04-04 14:12:23',
				'updated_at' => '2016-04-04 14:12:23',
			),
			7 => 
			array (
				'id' => 21,
				'cliente_id' => 16,
				'equipe_id' => 2,
				'created_at' => '2016-04-04 14:12:23',
				'updated_at' => '2016-04-04 14:12:23',
			),
		));
	}

}
