<?php

class TarefaTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('tarefa')->delete();
        
		\DB::table('tarefa')->insert(array (
			0 => 
			array (
				'id' => 1,
			'nome' => '#1 - Teste de tarefa(tipo de tarefa)',
				'descricao' => 'Criar uma tarefa de tipo de tarefa',
				'user_id' => 10,
				'clientes_id' => 1,
				'clientes_projetos_id' => 2,
				'hora_esforco' => 2,
				'minuto_esforco' => 0,
				'minutos' => 120,
				'tarefa_status_id' => 1,
				'tarefa_tipo_id' => 3,
				'criado_por' => 10,
				'status' => 0,
				'tarefa_anterior' => 0,
				'tarefa_proximo' => 0,
				'data_ini' => '2016-03-28 18:19:32',
				'data_fim' => '2016-03-29 11:19:32',
				'created_at' => '2016-03-28 18:19:32',
				'updated_at' => '2016-03-28 15:41:24',
				'deleted_at' => NULL,
			),
			1 => 
			array (
				'id' => 9,
				'nome' => '#9 - Teste de criação de cronograma - Fazer o Banner',
				'descricao' => 'Fazer o Banner. Descrição de cronograma',
				'user_id' => 11,
				'clientes_id' => 16,
				'clientes_projetos_id' => 5,
				'hora_esforco' => 3,
				'minuto_esforco' => 15,
				'minutos' => 195,
				'tarefa_status_id' => 1,
				'tarefa_tipo_id' => 0,
				'criado_por' => 10,
				'status' => 0,
				'tarefa_anterior' => 0,
				'tarefa_proximo' => 10,
				'data_ini' => '2016-03-29 11:12:54',
				'data_fim' => '2016-03-29 14:27:54',
				'created_at' => '2016-03-28 20:12:54',
				'updated_at' => '2016-03-28 20:12:55',
				'deleted_at' => NULL,
			),
			2 => 
			array (
				'id' => 10,
				'nome' => '#10 - Teste de criação de cronograma - Aprovação do cliente',
				'descricao' => 'Aprovação do cliente. Descrição de cronograma',
				'user_id' => 10,
				'clientes_id' => 16,
				'clientes_projetos_id' => 5,
				'hora_esforco' => 8,
				'minuto_esforco' => 45,
				'minutos' => 525,
				'tarefa_status_id' => 6,
				'tarefa_tipo_id' => 0,
				'criado_por' => 10,
				'status' => 0,
				'tarefa_anterior' => 9,
				'tarefa_proximo' => 0,
				'data_ini' => '2016-04-28 14:27:54',
				'data_fim' => '2016-04-29 08:12:54',
				'created_at' => '2016-03-28 20:12:54',
				'updated_at' => '2016-03-31 13:15:21',
				'deleted_at' => NULL,
			),
			3 => 
			array (
				'id' => 13,
				'nome' => '#13 - Teste com upload de arquivo',
				'descricao' => 'Testeyweytywet',
				'user_id' => 11,
				'clientes_id' => 1,
				'clientes_projetos_id' => 3,
				'hora_esforco' => 2,
				'minuto_esforco' => 0,
				'minutos' => 120,
				'tarefa_status_id' => 1,
				'tarefa_tipo_id' => 0,
				'criado_por' => 10,
				'status' => 0,
				'tarefa_anterior' => 0,
				'tarefa_proximo' => 0,
				'data_ini' => '2016-04-28 20:55:14',
				'data_fim' => '2016-04-29 13:55:14',
				'created_at' => '2016-03-28 20:55:14',
				'updated_at' => '2016-03-31 13:16:19',
				'deleted_at' => NULL,
			),
			4 => 
			array (
				'id' => 14,
				'nome' => '#14 - Teste de cronograma com upload - Fazer o Banner - Atualizado',
				'descricao' => 'Fazer o Banner. Descrição teste de upload em cronograma - Atualizado',
				'user_id' => 11,
				'clientes_id' => 1,
				'clientes_projetos_id' => 3,
				'hora_esforco' => 3,
				'minuto_esforco' => 30,
				'minutos' => 210,
				'tarefa_status_id' => 6,
				'tarefa_tipo_id' => 1,
				'criado_por' => 10,
				'status' => 0,
				'tarefa_anterior' => 0,
				'tarefa_proximo' => 15,
				'data_ini' => '2016-03-29 12:30:19',
				'data_fim' => '2016-03-29 16:00:19',
				'created_at' => '2016-03-28 20:56:50',
				'updated_at' => '2016-03-30 12:31:13',
				'deleted_at' => NULL,
			),
			5 => 
			array (
				'id' => 15,
				'nome' => '#15 - Teste de cronograma com upload - Aprovação do cliente',
				'descricao' => 'Aprovação do cliente. Descrição teste de upload em cronograma',
				'user_id' => 11,
				'clientes_id' => 1,
				'clientes_projetos_id' => 2,
				'hora_esforco' => 8,
				'minuto_esforco' => 45,
				'minutos' => 525,
				'tarefa_status_id' => 1,
				'tarefa_tipo_id' => 0,
				'criado_por' => 10,
				'status' => 0,
				'tarefa_anterior' => 14,
				'tarefa_proximo' => 0,
				'data_ini' => '2016-03-29 00:11:50',
				'data_fim' => '2016-03-29 08:56:50',
				'created_at' => '2016-03-28 20:56:50',
				'updated_at' => '2016-03-28 20:56:50',
				'deleted_at' => NULL,
			),
		));
	}

}