<?php

class TarefaAlertaTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('tarefa_alerta')->delete();
        
	}

}
