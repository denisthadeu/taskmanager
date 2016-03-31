<?php

class CronogramaDescricaoTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('cronograma_descricao')->delete();
        
		\DB::table('cronograma_descricao')->insert(array (
			0 => 
			array (
				'id' => 1,
				'cronograma_id' => 3,
				'nome' => 'Fazer o Banner',
				'hora_esforco' => 3,
				'minuto_esforco' => 15,
				'created_at' => '2016-03-23 20:07:55',
				'updated_at' => '2016-03-23 20:10:45',
			),
			1 => 
			array (
				'id' => 3,
				'cronograma_id' => 3,
				'nome' => 'Aprovação do cliente',
				'hora_esforco' => 8,
				'minuto_esforco' => 45,
				'created_at' => '2016-03-23 20:10:45',
				'updated_at' => '2016-03-23 20:10:45',
			),
		));
	}

}
