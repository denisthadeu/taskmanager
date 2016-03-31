<?php

class CronogramaTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('cronograma')->delete();
        
		\DB::table('cronograma')->insert(array (
			0 => 
			array (
				'id' => 3,
				'nome' => 'Design de Banner',
				'created_at' => '2016-03-23 20:07:55',
				'updated_at' => '2016-03-23 20:07:55',
			),
		));
	}

}
