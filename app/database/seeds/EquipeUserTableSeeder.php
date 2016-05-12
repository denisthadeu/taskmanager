<?php

class EquipeUserTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('equipe_user')->delete();
        
		\DB::table('equipe_user')->insert(array (
			0 => 
			array (
				'id' => 10,
				'user_id' => 13,
				'equipe_id' => 5,
				'created_at' => '2016-04-11 18:44:38',
				'updated_at' => '2016-04-11 18:44:38',
			),
			1 => 
			array (
				'id' => 11,
				'user_id' => 15,
				'equipe_id' => 5,
				'created_at' => '2016-04-11 18:44:38',
				'updated_at' => '2016-04-11 18:44:38',
			),
			2 => 
			array (
				'id' => 12,
				'user_id' => 16,
				'equipe_id' => 5,
				'created_at' => '2016-04-11 18:44:51',
				'updated_at' => '2016-04-11 18:44:51',
			),
			3 => 
			array (
				'id' => 13,
				'user_id' => 14,
				'equipe_id' => 5,
				'created_at' => '2016-04-11 18:47:23',
				'updated_at' => '2016-04-11 18:47:23',
			),
			4 => 
			array (
				'id' => 17,
				'user_id' => 10,
				'equipe_id' => 5,
				'created_at' => '2016-04-26 14:24:14',
				'updated_at' => '2016-04-26 14:24:14',
			),
			5 => 
			array (
				'id' => 18,
				'user_id' => 19,
				'equipe_id' => 14,
				'created_at' => '2016-04-27 11:21:59',
				'updated_at' => '2016-04-27 11:21:59',
			),
			6 => 
			array (
				'id' => 19,
				'user_id' => 18,
				'equipe_id' => 6,
				'created_at' => '2016-04-27 11:22:43',
				'updated_at' => '2016-04-27 11:22:43',
			),
			7 => 
			array (
				'id' => 20,
				'user_id' => 20,
				'equipe_id' => 7,
				'created_at' => '2016-04-27 11:22:54',
				'updated_at' => '2016-04-27 11:22:54',
			),
			8 => 
			array (
				'id' => 21,
				'user_id' => 26,
				'equipe_id' => 8,
				'created_at' => '2016-04-27 12:10:52',
				'updated_at' => '2016-04-27 12:10:52',
			),
			9 => 
			array (
				'id' => 22,
				'user_id' => 23,
				'equipe_id' => 16,
				'created_at' => '2016-04-27 13:22:11',
				'updated_at' => '2016-04-27 13:22:11',
			),
			10 => 
			array (
				'id' => 23,
				'user_id' => 22,
				'equipe_id' => 10,
				'created_at' => '2016-04-27 15:31:30',
				'updated_at' => '2016-04-27 15:31:30',
			),
			11 => 
			array (
				'id' => 24,
				'user_id' => 19,
				'equipe_id' => 11,
				'created_at' => '2016-04-27 18:06:56',
				'updated_at' => '2016-04-27 18:06:56',
			),
			12 => 
			array (
				'id' => 25,
				'user_id' => 27,
				'equipe_id' => 16,
				'created_at' => '2016-04-27 18:15:31',
				'updated_at' => '2016-04-27 18:15:31',
			),
			13 => 
			array (
				'id' => 26,
				'user_id' => 24,
				'equipe_id' => 15,
				'created_at' => '2016-04-28 14:02:07',
				'updated_at' => '2016-04-28 14:02:07',
			),
			14 => 
			array (
				'id' => 27,
				'user_id' => 28,
				'equipe_id' => 6,
				'created_at' => '2016-04-29 12:54:10',
				'updated_at' => '2016-04-29 12:54:10',
			),
			15 => 
			array (
				'id' => 28,
				'user_id' => 31,
				'equipe_id' => 6,
				'created_at' => '2016-04-29 13:05:02',
				'updated_at' => '2016-04-29 13:05:02',
			),
			16 => 
			array (
				'id' => 29,
				'user_id' => 29,
				'equipe_id' => 6,
				'created_at' => '2016-04-29 13:05:02',
				'updated_at' => '2016-04-29 13:05:02',
			),
			17 => 
			array (
				'id' => 30,
				'user_id' => 30,
				'equipe_id' => 6,
				'created_at' => '2016-04-29 13:05:02',
				'updated_at' => '2016-04-29 13:05:02',
			),
			18 => 
			array (
				'id' => 31,
				'user_id' => 32,
				'equipe_id' => 8,
				'created_at' => '2016-04-29 13:10:25',
				'updated_at' => '2016-04-29 13:10:25',
			),
			19 => 
			array (
				'id' => 32,
				'user_id' => 33,
				'equipe_id' => 7,
				'created_at' => '2016-04-29 13:13:28',
				'updated_at' => '2016-04-29 13:13:28',
			),
			20 => 
			array (
				'id' => 33,
				'user_id' => 32,
				'equipe_id' => 7,
				'created_at' => '2016-04-29 13:13:28',
				'updated_at' => '2016-04-29 13:13:28',
			),
			21 => 
			array (
				'id' => 34,
				'user_id' => 34,
				'equipe_id' => 7,
				'created_at' => '2016-04-29 13:13:28',
				'updated_at' => '2016-04-29 13:13:28',
			),
			22 => 
			array (
				'id' => 35,
				'user_id' => 25,
				'equipe_id' => 7,
				'created_at' => '2016-04-29 13:13:28',
				'updated_at' => '2016-04-29 13:13:28',
			),
			23 => 
			array (
				'id' => 36,
				'user_id' => 36,
				'equipe_id' => 15,
				'created_at' => '2016-04-29 14:41:50',
				'updated_at' => '2016-04-29 14:41:50',
			),
			24 => 
			array (
				'id' => 37,
				'user_id' => 37,
				'equipe_id' => 15,
				'created_at' => '2016-04-29 14:41:50',
				'updated_at' => '2016-04-29 14:41:50',
			),
		));
	}

}
