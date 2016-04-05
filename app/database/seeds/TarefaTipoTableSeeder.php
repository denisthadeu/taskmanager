<?php

class TarefaTipoTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('tarefa_tipo')->delete();
        
		\DB::table('tarefa_tipo')->insert(array (
			0 => 
			array (
				'id' => 1,
				'nome' => 'Banner HTML',
				'hora_esforco' => 3,
				'minuto_esforco' => 0,
				'created_at' => '2016-03-23 18:06:18',
				'updated_at' => '2016-03-23 18:06:18',
			),
			1 => 
			array (
				'id' => 2,
				'nome' => 'CT / Inbound - Revisão',
				'hora_esforco' => 0,
				'minuto_esforco' => 45,
				'created_at' => '2016-03-23 18:06:37',
				'updated_at' => '2016-03-23 18:06:37',
			),
			2 => 
			array (
				'id' => 3,
				'nome' => 'Bluefoot / Email Marketing',
				'hora_esforco' => 2,
				'minuto_esforco' => 0,
				'created_at' => '2016-03-23 18:06:59',
				'updated_at' => '2016-03-23 18:07:20',
			),
			3 => 
			array (
				'id' => 4,
				'nome' => 'Tarefa que dura 12 horas',
				'hora_esforco' => 12,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-01 14:54:29',
				'updated_at' => '2016-04-01 14:54:29',
			),
		));
	}

}
