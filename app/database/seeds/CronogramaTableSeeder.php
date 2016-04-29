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
				'id' => 4,
				'nome' => 'BLUEFOOT | SITE | PADRÃO INSTITUCIONAL',
				'created_at' => '2016-04-26 15:02:29',
				'updated_at' => '2016-04-26 15:02:58',
			),
			1 => 
			array (
				'id' => 5,
				'nome' => 'BLUEFOOT | SITE | MOBILE FIRST',
				'created_at' => '2016-04-26 15:29:17',
				'updated_at' => '2016-04-26 15:29:17',
			),
			2 => 
			array (
				'id' => 6,
				'nome' => 'BLUEFOOT | SITE | REDESIGN',
				'created_at' => '2016-04-26 19:02:12',
				'updated_at' => '2016-04-26 19:02:12',
			),
			3 => 
			array (
				'id' => 7,
				'nome' => 'PN | Pesquisa de Mercado',
				'created_at' => '2016-04-27 18:14:01',
				'updated_at' => '2016-04-27 18:14:01',
			),
			4 => 
			array (
				'id' => 8,
				'nome' => 'PN | Análise Financeira',
				'created_at' => '2016-04-27 18:46:35',
				'updated_at' => '2016-04-27 18:46:35',
			),
		));
	}

}
