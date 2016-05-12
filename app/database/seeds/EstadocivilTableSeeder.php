<?php

class EstadocivilTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('estadocivil')->delete();
        
		\DB::table('estadocivil')->insert(array (
			0 => 
			array (
				'id' => 1,
				'nome' => 'Solteiro',
			),
			1 => 
			array (
				'id' => 2,
				'nome' => 'Casado',
			),
			2 => 
			array (
				'id' => 3,
				'nome' => 'Divorciado',
			),
			3 => 
			array (
				'id' => 4,
				'nome' => 'Viuvo',
			),
			4 => 
			array (
				'id' => 5,
				'nome' => 'União Estável',
			),
		));
	}

}
