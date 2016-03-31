<?php

class TarefaUserTempoTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('tarefa_user_tempo')->delete();
        
		\DB::table('tarefa_user_tempo')->insert(array (
			0 => 
			array (
				'id' => 1,
				'tarefa_id' => 13,
				'user_id' => 10,
				'data_ini' => '2016-03-29 18:28:02',
				'data_fim' => '2016-03-29 18:51:10',
				'minutos' => 23,
				'created_at' => '2016-03-29 18:28:02',
				'updated_at' => '2016-03-29 15:51:50',
			),
			1 => 
			array (
				'id' => 2,
				'tarefa_id' => 13,
				'user_id' => 10,
				'data_ini' => '2016-03-29 18:53:29',
				'data_fim' => '2016-03-29 18:54:04',
				'minutos' => 1,
				'created_at' => '2016-03-29 18:53:29',
				'updated_at' => '2016-03-29 18:54:04',
			),
			2 => 
			array (
				'id' => 3,
				'tarefa_id' => 13,
				'user_id' => 10,
				'data_ini' => '2016-03-29 18:54:13',
				'data_fim' => '2016-03-29 18:54:15',
				'minutos' => 0,
				'created_at' => '2016-03-29 18:54:13',
				'updated_at' => '2016-03-29 18:54:15',
			),
			3 => 
			array (
				'id' => 4,
				'tarefa_id' => 13,
				'user_id' => 10,
				'data_ini' => '2016-03-29 19:04:15',
				'data_fim' => '2016-03-29 19:13:01',
				'minutos' => 9,
				'created_at' => '2016-03-29 19:04:15',
				'updated_at' => '2016-03-29 19:13:01',
			),
			4 => 
			array (
				'id' => 5,
				'tarefa_id' => 13,
				'user_id' => 10,
				'data_ini' => '2016-03-29 19:42:09',
				'data_fim' => '2016-03-29 20:05:19',
				'minutos' => 23,
				'created_at' => '2016-03-29 19:42:09',
				'updated_at' => '2016-03-29 20:05:19',
			),
			5 => 
			array (
				'id' => 6,
				'tarefa_id' => 13,
				'user_id' => 10,
				'data_ini' => '2016-03-29 20:06:11',
				'data_fim' => '2016-03-29 20:07:31',
				'minutos' => 1,
				'created_at' => '2016-03-29 20:06:11',
				'updated_at' => '2016-03-29 20:07:31',
			),
			6 => 
			array (
				'id' => 7,
				'tarefa_id' => 14,
				'user_id' => 10,
				'data_ini' => '2016-03-29 20:07:31',
				'data_fim' => '2016-03-29 20:08:57',
				'minutos' => 1,
				'created_at' => '2016-03-29 20:07:31',
				'updated_at' => '2016-03-29 20:08:57',
			),
			7 => 
			array (
				'id' => 8,
				'tarefa_id' => 1,
				'user_id' => 10,
				'data_ini' => '2016-03-30 13:13:57',
				'data_fim' => '2016-03-30 13:24:10',
				'minutos' => 10,
				'created_at' => '2016-03-30 13:13:57',
				'updated_at' => '2016-03-30 13:24:10',
			),
			8 => 
			array (
				'id' => 9,
				'tarefa_id' => 1,
				'user_id' => 10,
				'data_ini' => '2016-03-30 13:24:22',
				'data_fim' => '2016-03-30 14:21:14',
				'minutos' => 57,
				'created_at' => '2016-03-30 13:24:22',
				'updated_at' => '2016-03-30 14:21:14',
			),
			9 => 
			array (
				'id' => 10,
				'tarefa_id' => 9,
				'user_id' => 10,
				'data_ini' => '2016-03-30 14:21:14',
				'data_fim' => '2016-03-30 15:09:55',
				'minutos' => 49,
				'created_at' => '2016-03-30 14:21:14',
				'updated_at' => '2016-03-30 15:09:55',
			),
			10 => 
			array (
				'id' => 11,
				'tarefa_id' => 13,
				'user_id' => 10,
				'data_ini' => '2016-03-30 15:09:55',
				'data_fim' => '2016-03-31 13:16:07',
				'minutos' => 1326,
				'created_at' => '2016-03-30 15:09:55',
				'updated_at' => '2016-03-31 13:16:07',
			),
		));
	}

}
