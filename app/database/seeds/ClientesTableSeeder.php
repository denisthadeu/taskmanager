<?php

class ClientesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('clientes')->delete();
        
		\DB::table('clientes')->insert(array (
			0 => 
			array (
				'id' => 1,
				'nome' => 'Cliente 1',
				'created_at' => '2016-03-22 14:04:06',
				'updated_at' => '2016-04-01 14:20:23',
			),
			1 => 
			array (
				'id' => 16,
				'nome' => 'Cliente 2',
				'created_at' => '2016-03-22 16:27:11',
				'updated_at' => '2016-03-22 16:27:11',
			),
		));
	}

}
