<?php

class EquipeUserTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('equipe_user')->delete();
        
		\DB::table('equipe_user')->insert(array (
			0 => 
			array (
				'id' => 1,
				'user_id' => 11,
				'equipe_id' => 1,
				'created_at' => '2016-03-23 14:16:36',
				'updated_at' => '2016-03-23 14:16:36',
			),
			1 => 
			array (
				'id' => 4,
				'user_id' => 10,
				'equipe_id' => 2,
				'created_at' => '2016-03-23 15:14:41',
				'updated_at' => '2016-03-23 15:14:41',
			),
			2 => 
			array (
				'id' => 5,
				'user_id' => 11,
				'equipe_id' => 2,
				'created_at' => '2016-03-23 15:14:41',
				'updated_at' => '2016-03-23 15:14:41',
			),
			3 => 
			array (
				'id' => 6,
				'user_id' => 10,
				'equipe_id' => 3,
				'created_at' => '2016-03-23 15:14:59',
				'updated_at' => '2016-03-23 15:14:59',
			),
		));
	}

}
