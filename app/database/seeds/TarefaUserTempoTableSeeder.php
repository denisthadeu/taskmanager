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
				'data_ini' => '2016-03-29 21:28:02',
				'data_fim' => '2016-03-29 21:51:10',
				'minutos' => 23,
				'created_at' => '2016-03-29 21:28:02',
				'updated_at' => '2016-03-29 18:51:50',
			),
			1 => 
			array (
				'id' => 2,
				'tarefa_id' => 13,
				'user_id' => 10,
				'data_ini' => '2016-03-29 21:53:29',
				'data_fim' => '2016-03-29 21:54:04',
				'minutos' => 1,
				'created_at' => '2016-03-29 21:53:29',
				'updated_at' => '2016-03-29 21:54:04',
			),
			2 => 
			array (
				'id' => 3,
				'tarefa_id' => 13,
				'user_id' => 10,
				'data_ini' => '2016-03-29 21:54:13',
				'data_fim' => '2016-03-29 21:54:15',
				'minutos' => 0,
				'created_at' => '2016-03-29 21:54:13',
				'updated_at' => '2016-03-29 21:54:15',
			),
			3 => 
			array (
				'id' => 4,
				'tarefa_id' => 13,
				'user_id' => 10,
				'data_ini' => '2016-03-29 22:04:15',
				'data_fim' => '2016-03-29 22:13:01',
				'minutos' => 9,
				'created_at' => '2016-03-29 22:04:15',
				'updated_at' => '2016-03-29 22:13:01',
			),
			4 => 
			array (
				'id' => 5,
				'tarefa_id' => 13,
				'user_id' => 10,
				'data_ini' => '2016-03-29 22:42:09',
				'data_fim' => '2016-03-29 23:05:19',
				'minutos' => 23,
				'created_at' => '2016-03-29 22:42:09',
				'updated_at' => '2016-03-29 23:05:19',
			),
			5 => 
			array (
				'id' => 6,
				'tarefa_id' => 13,
				'user_id' => 10,
				'data_ini' => '2016-03-29 23:06:11',
				'data_fim' => '2016-03-29 23:07:31',
				'minutos' => 1,
				'created_at' => '2016-03-29 23:06:11',
				'updated_at' => '2016-03-29 23:07:31',
			),
			6 => 
			array (
				'id' => 7,
				'tarefa_id' => 14,
				'user_id' => 10,
				'data_ini' => '2016-03-29 23:07:31',
				'data_fim' => '2016-03-29 23:08:57',
				'minutos' => 1,
				'created_at' => '2016-03-29 23:07:31',
				'updated_at' => '2016-03-29 23:08:57',
			),
			7 => 
			array (
				'id' => 8,
				'tarefa_id' => 1,
				'user_id' => 10,
				'data_ini' => '2016-03-30 16:13:57',
				'data_fim' => '2016-03-30 16:24:10',
				'minutos' => 10,
				'created_at' => '2016-03-30 16:13:57',
				'updated_at' => '2016-03-30 16:24:10',
			),
			8 => 
			array (
				'id' => 9,
				'tarefa_id' => 1,
				'user_id' => 10,
				'data_ini' => '2016-03-30 16:24:22',
				'data_fim' => '2016-03-30 17:21:14',
				'minutos' => 57,
				'created_at' => '2016-03-30 16:24:22',
				'updated_at' => '2016-03-30 17:21:14',
			),
			9 => 
			array (
				'id' => 10,
				'tarefa_id' => 9,
				'user_id' => 10,
				'data_ini' => '2016-03-30 17:21:14',
				'data_fim' => '2016-03-30 18:09:55',
				'minutos' => 49,
				'created_at' => '2016-03-30 17:21:14',
				'updated_at' => '2016-03-30 18:09:55',
			),
			10 => 
			array (
				'id' => 11,
				'tarefa_id' => 13,
				'user_id' => 10,
				'data_ini' => '2016-03-30 18:09:55',
				'data_fim' => '2016-03-31 16:16:07',
				'minutos' => 1326,
				'created_at' => '2016-03-30 18:09:55',
				'updated_at' => '2016-03-31 16:16:07',
			),
			11 => 
			array (
				'id' => 12,
				'tarefa_id' => 25,
				'user_id' => 13,
				'data_ini' => '2016-04-15 13:07:42',
				'data_fim' => '2016-04-15 13:07:50',
				'minutos' => 0,
				'created_at' => '2016-04-15 13:07:42',
				'updated_at' => '2016-04-15 13:07:50',
			),
			12 => 
			array (
				'id' => 13,
				'tarefa_id' => 27,
				'user_id' => 10,
				'data_ini' => '2016-04-19 14:22:28',
				'data_fim' => '2016-04-19 14:57:48',
				'minutos' => 35,
				'created_at' => '2016-04-19 14:22:28',
				'updated_at' => '2016-04-19 14:57:48',
			),
			13 => 
			array (
				'id' => 14,
				'tarefa_id' => 28,
				'user_id' => 10,
				'data_ini' => '2016-04-19 15:06:12',
				'data_fim' => '2016-04-19 15:25:51',
				'minutos' => 20,
				'created_at' => '2016-04-19 15:06:12',
				'updated_at' => '2016-04-19 15:25:51',
			),
			14 => 
			array (
				'id' => 15,
				'tarefa_id' => 27,
				'user_id' => 10,
				'data_ini' => '2016-04-19 16:37:10',
				'data_fim' => '2016-04-19 16:56:59',
				'minutos' => 20,
				'created_at' => '2016-04-19 16:37:10',
				'updated_at' => '2016-04-19 16:56:59',
			),
			15 => 
			array (
				'id' => 16,
				'tarefa_id' => 26,
				'user_id' => 10,
				'data_ini' => '2016-04-19 16:59:27',
				'data_fim' => '2016-04-19 18:24:23',
				'minutos' => 85,
				'created_at' => '2016-04-19 16:59:27',
				'updated_at' => '2016-04-19 18:24:23',
			),
			16 => 
			array (
				'id' => 17,
				'tarefa_id' => 28,
				'user_id' => 10,
				'data_ini' => '2016-04-19 18:24:23',
				'data_fim' => '2016-04-19 20:24:50',
				'minutos' => 120,
				'created_at' => '2016-04-19 18:24:23',
				'updated_at' => '2016-04-19 20:24:50',
			),
			17 => 
			array (
				'id' => 18,
				'tarefa_id' => 26,
				'user_id' => 10,
				'data_ini' => '2016-04-20 12:30:19',
				'data_fim' => '2016-04-26 18:15:02',
				'minutos' => 8985,
				'created_at' => '2016-04-20 12:30:19',
				'updated_at' => '2016-04-26 18:15:02',
			),
			18 => 
			array (
				'id' => 19,
				'tarefa_id' => 29,
				'user_id' => 10,
				'data_ini' => '2016-04-26 18:15:02',
				'data_fim' => '2016-04-26 19:22:43',
				'minutos' => 68,
				'created_at' => '2016-04-26 18:15:02',
				'updated_at' => '2016-04-26 19:22:43',
			),
			19 => 
			array (
				'id' => 20,
				'tarefa_id' => 31,
				'user_id' => 10,
				'data_ini' => '2016-04-27 17:26:47',
				'data_fim' => '2016-04-27 17:47:04',
				'minutos' => 20,
				'created_at' => '2016-04-27 17:26:47',
				'updated_at' => '2016-04-27 17:47:04',
			),
			20 => 
			array (
				'id' => 21,
				'tarefa_id' => 29,
				'user_id' => 10,
				'data_ini' => '2016-04-27 18:29:14',
				'data_fim' => '2016-04-27 19:35:16',
				'minutos' => 66,
				'created_at' => '2016-04-27 18:29:14',
				'updated_at' => '2016-04-27 19:35:16',
			),
			21 => 
			array (
				'id' => 22,
				'tarefa_id' => 30,
				'user_id' => 16,
				'data_ini' => '2016-04-27 19:00:33',
				'data_fim' => '2016-04-27 19:01:29',
				'minutos' => 1,
				'created_at' => '2016-04-27 19:00:33',
				'updated_at' => '2016-04-27 19:01:29',
			),
			22 => 
			array (
				'id' => 23,
				'tarefa_id' => 30,
				'user_id' => 16,
				'data_ini' => '2016-04-27 19:01:42',
				'data_fim' => '2016-04-27 19:12:07',
				'minutos' => 10,
				'created_at' => '2016-04-27 19:01:42',
				'updated_at' => '2016-04-27 19:12:07',
			),
			23 => 
			array (
				'id' => 24,
				'tarefa_id' => 44,
				'user_id' => 14,
				'data_ini' => '2016-04-28 19:20:54',
				'data_fim' => '2016-04-28 19:20:59',
				'minutos' => 0,
				'created_at' => '2016-04-28 19:20:54',
				'updated_at' => '2016-04-28 19:20:59',
			),
			24 => 
			array (
				'id' => 25,
				'tarefa_id' => 44,
				'user_id' => 14,
				'data_ini' => '2016-04-28 19:21:00',
				'data_fim' => '2016-04-28 20:39:51',
				'minutos' => 79,
				'created_at' => '2016-04-28 19:21:00',
				'updated_at' => '2016-04-28 20:39:51',
			),
			25 => 
			array (
				'id' => 26,
				'tarefa_id' => 47,
				'user_id' => 10,
				'data_ini' => '2016-04-28 12:00:00',
				'data_fim' => '2016-04-28 13:00:00',
				'minutos' => 60,
				'created_at' => '2016-04-28 19:55:52',
				'updated_at' => '2016-04-28 19:55:52',
			),
			26 => 
			array (
				'id' => 27,
				'tarefa_id' => 64,
				'user_id' => 26,
				'data_ini' => '2016-04-29 13:28:14',
				'data_fim' => '2016-04-29 14:46:18',
				'minutos' => 78,
				'created_at' => '2016-04-29 13:28:14',
				'updated_at' => '2016-04-29 14:46:19',
			),
			27 => 
			array (
				'id' => 28,
				'tarefa_id' => 46,
				'user_id' => 13,
				'data_ini' => '2016-04-29 16:03:39',
				'data_fim' => '2016-04-29 16:42:34',
				'minutos' => 39,
				'created_at' => '2016-04-29 16:03:39',
				'updated_at' => '2016-04-29 16:42:34',
			),
			28 => 
			array (
				'id' => 29,
				'tarefa_id' => 64,
				'user_id' => 26,
				'data_ini' => '2016-04-29 16:18:31',
				'data_fim' => '2016-04-29 19:15:41',
				'minutos' => 177,
				'created_at' => '2016-04-29 16:18:31',
				'updated_at' => '2016-04-29 19:15:41',
			),
			29 => 
			array (
				'id' => 30,
				'tarefa_id' => 46,
				'user_id' => 13,
				'data_ini' => '2016-04-29 16:43:55',
				'data_fim' => '2016-04-29 19:53:36',
				'minutos' => 190,
				'created_at' => '2016-04-29 16:43:55',
				'updated_at' => '2016-04-29 19:53:36',
			),
			30 => 
			array (
				'id' => 31,
				'tarefa_id' => 73,
				'user_id' => 26,
				'data_ini' => '2016-04-29 19:17:08',
				'data_fim' => NULL,
				'minutos' => 0,
				'created_at' => '2016-04-29 19:17:08',
				'updated_at' => '2016-04-29 19:17:08',
			),
			31 => 
			array (
				'id' => 32,
				'tarefa_id' => 58,
				'user_id' => 15,
				'data_ini' => '2016-04-29 19:19:44',
				'data_fim' => '2016-04-29 19:37:12',
				'minutos' => 17,
				'created_at' => '2016-04-29 19:19:44',
				'updated_at' => '2016-04-29 19:37:12',
			),
			32 => 
			array (
				'id' => 33,
				'tarefa_id' => 54,
				'user_id' => 15,
				'data_ini' => '2016-04-29 19:38:36',
				'data_fim' => '2016-04-29 19:38:40',
				'minutos' => 0,
				'created_at' => '2016-04-29 19:38:36',
				'updated_at' => '2016-04-29 19:38:40',
			),
			33 => 
			array (
				'id' => 34,
				'tarefa_id' => 54,
				'user_id' => 15,
				'data_ini' => '2016-04-29 12:00:00',
				'data_fim' => '2016-04-29 19:42:05',
				'minutos' => 462,
				'created_at' => '2016-04-29 19:41:57',
				'updated_at' => '2016-04-29 19:42:05',
			),
			34 => 
			array (
				'id' => 35,
				'tarefa_id' => 58,
				'user_id' => 15,
				'data_ini' => '2016-04-29 19:54:56',
				'data_fim' => '2016-04-29 19:55:31',
				'minutos' => 1,
				'created_at' => '2016-04-29 19:54:56',
				'updated_at' => '2016-04-29 19:55:31',
			),
			35 => 
			array (
				'id' => 36,
				'tarefa_id' => 58,
				'user_id' => 15,
				'data_ini' => '2016-04-29 19:55:37',
				'data_fim' => '2016-04-29 20:23:06',
				'minutos' => 27,
				'created_at' => '2016-04-29 19:55:37',
				'updated_at' => '2016-04-29 20:23:06',
			),
			36 => 
			array (
				'id' => 37,
				'tarefa_id' => 53,
				'user_id' => 14,
				'data_ini' => '2016-04-29 20:18:07',
				'data_fim' => NULL,
				'minutos' => 0,
				'created_at' => '2016-04-29 20:18:07',
				'updated_at' => '2016-04-29 20:18:07',
			),
		));
	}

}
