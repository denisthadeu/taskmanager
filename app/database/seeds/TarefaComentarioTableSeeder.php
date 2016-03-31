<?php

class TarefaComentarioTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('tarefa_comentario')->delete();
        
		\DB::table('tarefa_comentario')->insert(array (
			0 => 
			array (
				'id' => 1,
				'descricao' => 'Teste de comentario',
				'user_id' => 10,
				'tarefa_id' => 13,
				'created_at' => '2016-03-29 13:52:46',
				'updated_at' => '2016-03-29 13:52:46',
			),
			1 => 
			array (
				'id' => 7,
				'descricao' => 'Teste de comentário com upload de arquivo',
				'user_id' => 10,
				'tarefa_id' => 13,
				'created_at' => '2016-03-29 13:58:18',
				'updated_at' => '2016-03-29 13:58:18',
			),
			2 => 
			array (
				'id' => 8,
				'descricao' => 'Novo teste de mensagem',
				'user_id' => 11,
				'tarefa_id' => 13,
				'created_at' => '2016-03-29 14:33:16',
				'updated_at' => '2016-03-29 14:33:16',
			),
			3 => 
			array (
				'id' => 9,
				'descricao' => 'Aviso do sistema: Dênis iniciou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 13,
				'created_at' => '2016-03-29 20:06:11',
				'updated_at' => '2016-03-29 20:06:11',
			),
			4 => 
			array (
				'id' => 10,
				'descricao' => 'Aviso do sistema: Dênis pausou esta tarefa para iniciar <a href="http://localhost/taskmanager/public/tarefa/edit/14">esta tarefa</a>',
				'user_id' => 10,
				'tarefa_id' => 13,
				'created_at' => '2016-03-29 20:07:31',
				'updated_at' => '2016-03-29 17:08:45',
			),
			5 => 
			array (
				'id' => 11,
				'descricao' => 'Aviso do sistema: Dênis iniciou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 14,
				'created_at' => '2016-03-29 20:07:31',
				'updated_at' => '2016-03-29 20:07:31',
			),
			6 => 
			array (
				'id' => 12,
				'descricao' => 'Aviso do sistema: Dênis pausou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 14,
				'created_at' => '2016-03-29 20:08:57',
				'updated_at' => '2016-03-29 20:08:57',
			),
			7 => 
			array (
				'id' => 13,
				'descricao' => 'Aviso do sistema: Dênis iniciou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 1,
				'created_at' => '2016-03-30 13:13:57',
				'updated_at' => '2016-03-30 13:13:57',
			),
			8 => 
			array (
				'id' => 14,
				'descricao' => 'Aviso do sistema: Dênis pausou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 1,
				'created_at' => '2016-03-30 13:24:10',
				'updated_at' => '2016-03-30 13:24:10',
			),
			9 => 
			array (
				'id' => 15,
				'descricao' => 'Aviso do sistema: Dênis iniciou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 1,
				'created_at' => '2016-03-30 13:24:22',
				'updated_at' => '2016-03-30 13:24:22',
			),
			10 => 
			array (
				'id' => 16,
				'descricao' => 'Aviso do sistema: Dênis pausou esta tarefa para iniciar <a href="http://localhost/taskmanager/public/tarefa/edit/9">esta tarefa</a>',
				'user_id' => 10,
				'tarefa_id' => 1,
				'created_at' => '2016-03-30 14:21:14',
				'updated_at' => '2016-03-30 14:21:14',
			),
			11 => 
			array (
				'id' => 17,
				'descricao' => 'Aviso do sistema: Dênis iniciou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 9,
				'created_at' => '2016-03-30 14:21:14',
				'updated_at' => '2016-03-30 14:21:14',
			),
			12 => 
			array (
				'id' => 18,
				'descricao' => 'Aviso do sistema: Dênis pausou esta tarefa para iniciar <a href="http://localhost/taskmanager/public/tarefa/edit/13">esta tarefa</a>',
				'user_id' => 10,
				'tarefa_id' => 9,
				'created_at' => '2016-03-30 15:09:55',
				'updated_at' => '2016-03-30 15:09:55',
			),
			13 => 
			array (
				'id' => 19,
				'descricao' => 'Aviso do sistema: Dênis iniciou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 13,
				'created_at' => '2016-03-30 15:09:55',
				'updated_at' => '2016-03-30 15:09:55',
			),
			14 => 
			array (
				'id' => 20,
				'descricao' => 'Aviso do sistema: Dênis pausou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 13,
				'created_at' => '2016-03-31 13:16:07',
				'updated_at' => '2016-03-31 13:16:07',
			),
		));
	}

}
