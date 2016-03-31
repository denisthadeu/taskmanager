<?php

class MigrationsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('migrations')->delete();
        
		\DB::table('migrations')->insert(array (
			0 => 
			array (
				'migration' => '2016_03_31_145218_create_clientes_table',
				'batch' => 0,
			),
			1 => 
			array (
				'migration' => '2016_03_31_145218_create_clientes_projetos_table',
				'batch' => 0,
			),
			2 => 
			array (
				'migration' => '2016_03_31_145218_create_cronograma_table',
				'batch' => 0,
			),
			3 => 
			array (
				'migration' => '2016_03_31_145218_create_cronograma_descricao_table',
				'batch' => 0,
			),
			4 => 
			array (
				'migration' => '2016_03_31_145218_create_equipe_table',
				'batch' => 0,
			),
			5 => 
			array (
				'migration' => '2016_03_31_145218_create_equipe_user_table',
				'batch' => 0,
			),
			6 => 
			array (
				'migration' => '2016_03_31_145218_create_estadocivil_table',
				'batch' => 0,
			),
			7 => 
			array (
				'migration' => '2016_03_31_145218_create_mensagem_table',
				'batch' => 0,
			),
			8 => 
			array (
				'migration' => '2016_03_31_145218_create_tarefa_table',
				'batch' => 0,
			),
			9 => 
			array (
				'migration' => '2016_03_31_145218_create_tarefa_alerta_table',
				'batch' => 0,
			),
			10 => 
			array (
				'migration' => '2016_03_31_145218_create_tarefa_anexo_table',
				'batch' => 0,
			),
			11 => 
			array (
				'migration' => '2016_03_31_145218_create_tarefa_briefing_table',
				'batch' => 0,
			),
			12 => 
			array (
				'migration' => '2016_03_31_145218_create_tarefa_comentario_table',
				'batch' => 0,
			),
			13 => 
			array (
				'migration' => '2016_03_31_145218_create_tarefa_comentario_anexo_table',
				'batch' => 0,
			),
			14 => 
			array (
				'migration' => '2016_03_31_145218_create_tarefa_status_table',
				'batch' => 0,
			),
			15 => 
			array (
				'migration' => '2016_03_31_145218_create_tarefa_tipo_table',
				'batch' => 0,
			),
			16 => 
			array (
				'migration' => '2016_03_31_145218_create_tarefa_user_tempo_table',
				'batch' => 0,
			),
			17 => 
			array (
				'migration' => '2016_03_31_145218_create_user_table',
				'batch' => 0,
			),
		));
	}

}
