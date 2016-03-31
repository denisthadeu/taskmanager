<?php

class EquipeTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('equipe')->delete();
        
		\DB::table('equipe')->insert(array (
			0 => 
			array (
				'id' => 1,
				'nome' => 'Design',
				'user_id' => 10,
				'created_at' => '2016-03-23 14:16:36',
				'updated_at' => '2016-03-30 19:50:23',
			),
			1 => 
			array (
				'id' => 2,
				'nome' => 'Programação',
				'user_id' => 10,
				'created_at' => '2016-03-23 15:14:41',
				'updated_at' => '2016-03-23 15:14:41',
			),
			2 => 
			array (
				'id' => 3,
				'nome' => 'Desenvolvimento de Sistema',
				'user_id' => 10,
				'created_at' => '2016-03-23 15:14:59',
				'updated_at' => '2016-03-23 15:14:59',
			),
		));
	}

}
