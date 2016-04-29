<?php

class EquipeClientesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('equipe_clientes')->delete();
        
		\DB::table('equipe_clientes')->insert(array (
			0 => 
			array (
				'id' => 14,
				'cliente_id' => 1,
				'equipe_id' => 3,
				'created_at' => '2016-04-04 17:12:01',
				'updated_at' => '2016-04-04 17:12:01',
			),
			1 => 
			array (
				'id' => 15,
				'cliente_id' => 16,
				'equipe_id' => 3,
				'created_at' => '2016-04-04 17:12:01',
				'updated_at' => '2016-04-04 17:12:01',
			),
			2 => 
			array (
				'id' => 16,
				'cliente_id' => 1,
				'equipe_id' => 1,
				'created_at' => '2016-04-04 17:12:13',
				'updated_at' => '2016-04-04 17:12:13',
			),
			3 => 
			array (
				'id' => 17,
				'cliente_id' => 16,
				'equipe_id' => 1,
				'created_at' => '2016-04-04 17:12:13',
				'updated_at' => '2016-04-04 17:12:13',
			),
			4 => 
			array (
				'id' => 18,
				'cliente_id' => 1,
				'equipe_id' => 4,
				'created_at' => '2016-04-04 17:12:18',
				'updated_at' => '2016-04-04 17:12:18',
			),
			5 => 
			array (
				'id' => 19,
				'cliente_id' => 16,
				'equipe_id' => 4,
				'created_at' => '2016-04-04 17:12:18',
				'updated_at' => '2016-04-04 17:12:18',
			),
			6 => 
			array (
				'id' => 20,
				'cliente_id' => 1,
				'equipe_id' => 2,
				'created_at' => '2016-04-04 17:12:23',
				'updated_at' => '2016-04-04 17:12:23',
			),
			7 => 
			array (
				'id' => 21,
				'cliente_id' => 16,
				'equipe_id' => 2,
				'created_at' => '2016-04-04 17:12:23',
				'updated_at' => '2016-04-04 17:12:23',
			),
			8 => 
			array (
				'id' => 25,
				'cliente_id' => 19,
				'equipe_id' => 9,
				'created_at' => '2016-04-26 14:05:05',
				'updated_at' => '2016-04-26 14:05:05',
			),
			9 => 
			array (
				'id' => 29,
				'cliente_id' => 19,
				'equipe_id' => 12,
				'created_at' => '2016-04-26 14:07:56',
				'updated_at' => '2016-04-26 14:07:56',
			),
			10 => 
			array (
				'id' => 68,
				'cliente_id' => 154,
				'equipe_id' => 5,
				'created_at' => '2016-04-26 14:24:23',
				'updated_at' => '2016-04-26 14:24:23',
			),
			11 => 
			array (
				'id' => 69,
				'cliente_id' => 156,
				'equipe_id' => 5,
				'created_at' => '2016-04-26 14:24:23',
				'updated_at' => '2016-04-26 14:24:23',
			),
			12 => 
			array (
				'id' => 70,
				'cliente_id' => 162,
				'equipe_id' => 5,
				'created_at' => '2016-04-26 14:24:23',
				'updated_at' => '2016-04-26 14:24:23',
			),
			13 => 
			array (
				'id' => 71,
				'cliente_id' => 176,
				'equipe_id' => 5,
				'created_at' => '2016-04-26 14:24:23',
				'updated_at' => '2016-04-26 14:24:23',
			),
			14 => 
			array (
				'id' => 72,
				'cliente_id' => 183,
				'equipe_id' => 5,
				'created_at' => '2016-04-26 14:24:23',
				'updated_at' => '2016-04-26 14:24:23',
			),
			15 => 
			array (
				'id' => 73,
				'cliente_id' => 185,
				'equipe_id' => 5,
				'created_at' => '2016-04-26 14:24:23',
				'updated_at' => '2016-04-26 14:24:23',
			),
			16 => 
			array (
				'id' => 74,
				'cliente_id' => 187,
				'equipe_id' => 5,
				'created_at' => '2016-04-26 14:24:23',
				'updated_at' => '2016-04-26 14:24:23',
			),
			17 => 
			array (
				'id' => 78,
				'cliente_id' => 193,
				'equipe_id' => 5,
				'created_at' => '2016-04-26 14:26:29',
				'updated_at' => '2016-04-26 14:26:29',
			),
			18 => 
			array (
				'id' => 79,
				'cliente_id' => 194,
				'equipe_id' => 5,
				'created_at' => '2016-04-26 14:26:39',
				'updated_at' => '2016-04-26 14:26:39',
			),
			19 => 
			array (
				'id' => 89,
				'cliente_id' => 226,
				'equipe_id' => 5,
				'created_at' => '2016-04-26 14:34:02',
				'updated_at' => '2016-04-26 14:34:02',
			),
			20 => 
			array (
				'id' => 111,
				'cliente_id' => 19,
				'equipe_id' => 17,
				'created_at' => '2016-04-26 19:34:25',
				'updated_at' => '2016-04-26 19:34:25',
			),
			21 => 
			array (
				'id' => 134,
				'cliente_id' => 19,
				'equipe_id' => 14,
				'created_at' => '2016-04-27 11:21:59',
				'updated_at' => '2016-04-27 11:21:59',
			),
			22 => 
			array (
				'id' => 147,
				'cliente_id' => 115,
				'equipe_id' => 5,
				'created_at' => '2016-04-27 12:05:03',
				'updated_at' => '2016-04-27 12:05:03',
			),
			23 => 
			array (
				'id' => 188,
				'cliente_id' => 19,
				'equipe_id' => 10,
				'created_at' => '2016-04-27 15:31:30',
				'updated_at' => '2016-04-27 15:31:30',
			),
			24 => 
			array (
				'id' => 189,
				'cliente_id' => 115,
				'equipe_id' => 10,
				'created_at' => '2016-04-27 15:31:30',
				'updated_at' => '2016-04-27 15:31:30',
			),
			25 => 
			array (
				'id' => 190,
				'cliente_id' => 162,
				'equipe_id' => 10,
				'created_at' => '2016-04-27 15:31:30',
				'updated_at' => '2016-04-27 15:31:30',
			),
			26 => 
			array (
				'id' => 191,
				'cliente_id' => 176,
				'equipe_id' => 10,
				'created_at' => '2016-04-27 15:31:30',
				'updated_at' => '2016-04-27 15:31:30',
			),
			27 => 
			array (
				'id' => 192,
				'cliente_id' => 185,
				'equipe_id' => 10,
				'created_at' => '2016-04-27 15:31:30',
				'updated_at' => '2016-04-27 15:31:30',
			),
			28 => 
			array (
				'id' => 193,
				'cliente_id' => 204,
				'equipe_id' => 10,
				'created_at' => '2016-04-27 15:31:30',
				'updated_at' => '2016-04-27 15:31:30',
			),
			29 => 
			array (
				'id' => 194,
				'cliente_id' => 228,
				'equipe_id' => 10,
				'created_at' => '2016-04-27 15:31:30',
				'updated_at' => '2016-04-27 15:31:30',
			),
			30 => 
			array (
				'id' => 196,
				'cliente_id' => 61,
				'equipe_id' => 10,
				'created_at' => '2016-04-27 16:49:58',
				'updated_at' => '2016-04-27 16:49:58',
			),
			31 => 
			array (
				'id' => 197,
				'cliente_id' => 66,
				'equipe_id' => 10,
				'created_at' => '2016-04-27 16:53:25',
				'updated_at' => '2016-04-27 16:53:25',
			),
			32 => 
			array (
				'id' => 198,
				'cliente_id' => 71,
				'equipe_id' => 10,
				'created_at' => '2016-04-27 16:53:44',
				'updated_at' => '2016-04-27 16:53:44',
			),
			33 => 
			array (
				'id' => 199,
				'cliente_id' => 103,
				'equipe_id' => 10,
				'created_at' => '2016-04-27 16:54:45',
				'updated_at' => '2016-04-27 16:54:45',
			),
			34 => 
			array (
				'id' => 200,
				'cliente_id' => 136,
				'equipe_id' => 10,
				'created_at' => '2016-04-27 16:57:41',
				'updated_at' => '2016-04-27 16:57:41',
			),
			35 => 
			array (
				'id' => 201,
				'cliente_id' => 188,
				'equipe_id' => 10,
				'created_at' => '2016-04-27 17:03:07',
				'updated_at' => '2016-04-27 17:03:07',
			),
			36 => 
			array (
				'id' => 202,
				'cliente_id' => 19,
				'equipe_id' => 11,
				'created_at' => '2016-04-27 18:06:56',
				'updated_at' => '2016-04-27 18:06:56',
			),
			37 => 
			array (
				'id' => 203,
				'cliente_id' => 103,
				'equipe_id' => 11,
				'created_at' => '2016-04-27 18:06:56',
				'updated_at' => '2016-04-27 18:06:56',
			),
			38 => 
			array (
				'id' => 204,
				'cliente_id' => 115,
				'equipe_id' => 11,
				'created_at' => '2016-04-27 18:06:56',
				'updated_at' => '2016-04-27 18:06:56',
			),
			39 => 
			array (
				'id' => 205,
				'cliente_id' => 162,
				'equipe_id' => 11,
				'created_at' => '2016-04-27 18:06:56',
				'updated_at' => '2016-04-27 18:06:56',
			),
			40 => 
			array (
				'id' => 206,
				'cliente_id' => 188,
				'equipe_id' => 11,
				'created_at' => '2016-04-27 18:06:56',
				'updated_at' => '2016-04-27 18:06:56',
			),
			41 => 
			array (
				'id' => 229,
				'cliente_id' => 17,
				'equipe_id' => 5,
				'created_at' => '2016-04-28 19:00:16',
				'updated_at' => '2016-04-28 19:00:16',
			),
			42 => 
			array (
				'id' => 235,
				'cliente_id' => 141,
				'equipe_id' => 5,
				'created_at' => '2016-04-29 12:26:46',
				'updated_at' => '2016-04-29 12:26:46',
			),
			43 => 
			array (
				'id' => 237,
				'cliente_id' => 19,
				'equipe_id' => 13,
				'created_at' => '2016-04-29 12:31:34',
				'updated_at' => '2016-04-29 12:31:34',
			),
			44 => 
			array (
				'id' => 238,
				'cliente_id' => 171,
				'equipe_id' => 13,
				'created_at' => '2016-04-29 12:31:34',
				'updated_at' => '2016-04-29 12:31:34',
			),
			45 => 
			array (
				'id' => 246,
				'cliente_id' => 172,
				'equipe_id' => 6,
				'created_at' => '2016-04-29 13:05:02',
				'updated_at' => '2016-04-29 13:05:02',
			),
			46 => 
			array (
				'id' => 247,
				'cliente_id' => 183,
				'equipe_id' => 6,
				'created_at' => '2016-04-29 13:05:02',
				'updated_at' => '2016-04-29 13:05:02',
			),
			47 => 
			array (
				'id' => 248,
				'cliente_id' => 185,
				'equipe_id' => 6,
				'created_at' => '2016-04-29 13:05:02',
				'updated_at' => '2016-04-29 13:05:02',
			),
			48 => 
			array (
				'id' => 249,
				'cliente_id' => 189,
				'equipe_id' => 6,
				'created_at' => '2016-04-29 13:05:02',
				'updated_at' => '2016-04-29 13:05:02',
			),
			49 => 
			array (
				'id' => 250,
				'cliente_id' => 202,
				'equipe_id' => 6,
				'created_at' => '2016-04-29 13:05:02',
				'updated_at' => '2016-04-29 13:05:02',
			),
			50 => 
			array (
				'id' => 251,
				'cliente_id' => 210,
				'equipe_id' => 6,
				'created_at' => '2016-04-29 13:05:02',
				'updated_at' => '2016-04-29 13:05:02',
			),
			51 => 
			array (
				'id' => 252,
				'cliente_id' => 236,
				'equipe_id' => 6,
				'created_at' => '2016-04-29 13:05:02',
				'updated_at' => '2016-04-29 13:05:02',
			),
			52 => 
			array (
				'id' => 262,
				'cliente_id' => 19,
				'equipe_id' => 8,
				'created_at' => '2016-04-29 13:10:25',
				'updated_at' => '2016-04-29 13:10:25',
			),
			53 => 
			array (
				'id' => 263,
				'cliente_id' => 100,
				'equipe_id' => 8,
				'created_at' => '2016-04-29 13:10:25',
				'updated_at' => '2016-04-29 13:10:25',
			),
			54 => 
			array (
				'id' => 265,
				'cliente_id' => 185,
				'equipe_id' => 7,
				'created_at' => '2016-04-29 13:13:28',
				'updated_at' => '2016-04-29 13:13:28',
			),
			55 => 
			array (
				'id' => 267,
				'cliente_id' => 229,
				'equipe_id' => 8,
				'created_at' => '2016-04-29 13:24:02',
				'updated_at' => '2016-04-29 13:24:02',
			),
			56 => 
			array (
				'id' => 268,
				'cliente_id' => 19,
				'equipe_id' => 15,
				'created_at' => '2016-04-29 14:41:50',
				'updated_at' => '2016-04-29 14:41:50',
			),
			57 => 
			array (
				'id' => 269,
				'cliente_id' => 17,
				'equipe_id' => 15,
				'created_at' => '2016-04-29 14:41:50',
				'updated_at' => '2016-04-29 14:41:50',
			),
			58 => 
			array (
				'id' => 270,
				'cliente_id' => 168,
				'equipe_id' => 15,
				'created_at' => '2016-04-29 14:41:50',
				'updated_at' => '2016-04-29 14:41:50',
			),
			59 => 
			array (
				'id' => 271,
				'cliente_id' => 195,
				'equipe_id' => 15,
				'created_at' => '2016-04-29 14:41:50',
				'updated_at' => '2016-04-29 14:41:50',
			),
			60 => 
			array (
				'id' => 272,
				'cliente_id' => 212,
				'equipe_id' => 15,
				'created_at' => '2016-04-29 14:41:50',
				'updated_at' => '2016-04-29 14:41:50',
			),
			61 => 
			array (
				'id' => 273,
				'cliente_id' => 31,
				'equipe_id' => 7,
				'created_at' => '2016-04-29 16:47:26',
				'updated_at' => '2016-04-29 16:47:26',
			),
			62 => 
			array (
				'id' => 274,
				'cliente_id' => 19,
				'equipe_id' => 16,
				'created_at' => '2016-04-29 16:52:20',
				'updated_at' => '2016-04-29 16:52:20',
			),
			63 => 
			array (
				'id' => 275,
				'cliente_id' => 141,
				'equipe_id' => 16,
				'created_at' => '2016-04-29 16:52:20',
				'updated_at' => '2016-04-29 16:52:20',
			),
			64 => 
			array (
				'id' => 276,
				'cliente_id' => 171,
				'equipe_id' => 16,
				'created_at' => '2016-04-29 16:52:20',
				'updated_at' => '2016-04-29 16:52:20',
			),
			65 => 
			array (
				'id' => 277,
				'cliente_id' => 177,
				'equipe_id' => 16,
				'created_at' => '2016-04-29 16:52:20',
				'updated_at' => '2016-04-29 16:52:20',
			),
			66 => 
			array (
				'id' => 278,
				'cliente_id' => 190,
				'equipe_id' => 16,
				'created_at' => '2016-04-29 16:52:20',
				'updated_at' => '2016-04-29 16:52:20',
			),
			67 => 
			array (
				'id' => 279,
				'cliente_id' => 200,
				'equipe_id' => 16,
				'created_at' => '2016-04-29 16:52:20',
				'updated_at' => '2016-04-29 16:52:20',
			),
			68 => 
			array (
				'id' => 280,
				'cliente_id' => 201,
				'equipe_id' => 16,
				'created_at' => '2016-04-29 16:52:20',
				'updated_at' => '2016-04-29 16:52:20',
			),
			69 => 
			array (
				'id' => 281,
				'cliente_id' => 216,
				'equipe_id' => 16,
				'created_at' => '2016-04-29 16:52:20',
				'updated_at' => '2016-04-29 16:52:20',
			),
			70 => 
			array (
				'id' => 282,
				'cliente_id' => 222,
				'equipe_id' => 16,
				'created_at' => '2016-04-29 16:52:20',
				'updated_at' => '2016-04-29 16:52:20',
			),
			71 => 
			array (
				'id' => 283,
				'cliente_id' => 226,
				'equipe_id' => 16,
				'created_at' => '2016-04-29 16:52:20',
				'updated_at' => '2016-04-29 16:52:20',
			),
			72 => 
			array (
				'id' => 284,
				'cliente_id' => 80,
				'equipe_id' => 16,
				'created_at' => '2016-04-29 17:21:03',
				'updated_at' => '2016-04-29 17:21:03',
			),
			73 => 
			array (
				'id' => 285,
				'cliente_id' => 103,
				'equipe_id' => 16,
				'created_at' => '2016-04-29 17:21:28',
				'updated_at' => '2016-04-29 17:21:28',
			),
			74 => 
			array (
				'id' => 286,
				'cliente_id' => 162,
				'equipe_id' => 16,
				'created_at' => '2016-04-29 17:22:30',
				'updated_at' => '2016-04-29 17:22:30',
			),
			75 => 
			array (
				'id' => 287,
				'cliente_id' => 134,
				'equipe_id' => 16,
				'created_at' => '2016-04-29 17:22:56',
				'updated_at' => '2016-04-29 17:22:56',
			),
			76 => 
			array (
				'id' => 288,
				'cliente_id' => 136,
				'equipe_id' => 16,
				'created_at' => '2016-04-29 17:23:24',
				'updated_at' => '2016-04-29 17:23:24',
			),
			77 => 
			array (
				'id' => 289,
				'cliente_id' => 45,
				'equipe_id' => 16,
				'created_at' => '2016-04-29 17:23:59',
				'updated_at' => '2016-04-29 17:23:59',
			),
			78 => 
			array (
				'id' => 290,
				'cliente_id' => 27,
				'equipe_id' => 5,
				'created_at' => '2016-04-29 19:21:48',
				'updated_at' => '2016-04-29 19:21:48',
			),
			79 => 
			array (
				'id' => 291,
				'cliente_id' => 71,
				'equipe_id' => 6,
				'created_at' => '2016-04-29 19:24:20',
				'updated_at' => '2016-04-29 19:24:20',
			),
			80 => 
			array (
				'id' => 292,
				'cliente_id' => 19,
				'equipe_id' => 5,
				'created_at' => '2016-04-29 19:26:14',
				'updated_at' => '2016-04-29 19:26:14',
			),
			81 => 
			array (
				'id' => 293,
				'cliente_id' => 19,
				'equipe_id' => 5,
				'created_at' => '2016-04-29 19:26:14',
				'updated_at' => '2016-04-29 19:26:14',
			),
			82 => 
			array (
				'id' => 294,
				'cliente_id' => 19,
				'equipe_id' => 5,
				'created_at' => '2016-04-29 19:26:18',
				'updated_at' => '2016-04-29 19:26:18',
			),
			83 => 
			array (
				'id' => 295,
				'cliente_id' => 19,
				'equipe_id' => 5,
				'created_at' => '2016-04-29 19:26:19',
				'updated_at' => '2016-04-29 19:26:19',
			),
			84 => 
			array (
				'id' => 296,
				'cliente_id' => 19,
				'equipe_id' => 5,
				'created_at' => '2016-04-29 19:26:19',
				'updated_at' => '2016-04-29 19:26:19',
			),
			85 => 
			array (
				'id' => 297,
				'cliente_id' => 19,
				'equipe_id' => 5,
				'created_at' => '2016-04-29 19:26:19',
				'updated_at' => '2016-04-29 19:26:19',
			),
			86 => 
			array (
				'id' => 298,
				'cliente_id' => 19,
				'equipe_id' => 5,
				'created_at' => '2016-04-29 19:26:19',
				'updated_at' => '2016-04-29 19:26:19',
			),
			87 => 
			array (
				'id' => 299,
				'cliente_id' => 19,
				'equipe_id' => 5,
				'created_at' => '2016-04-29 19:26:20',
				'updated_at' => '2016-04-29 19:26:20',
			),
			88 => 
			array (
				'id' => 300,
				'cliente_id' => 135,
				'equipe_id' => 6,
				'created_at' => '2016-04-29 19:28:14',
				'updated_at' => '2016-04-29 19:28:14',
			),
			89 => 
			array (
				'id' => 301,
				'cliente_id' => 183,
				'equipe_id' => 6,
				'created_at' => '2016-04-29 19:29:35',
				'updated_at' => '2016-04-29 19:29:35',
			),
			90 => 
			array (
				'id' => 302,
				'cliente_id' => 24,
				'equipe_id' => 5,
				'created_at' => '2016-04-29 19:32:15',
				'updated_at' => '2016-04-29 19:32:15',
			),
			91 => 
			array (
				'id' => 303,
				'cliente_id' => 26,
				'equipe_id' => 5,
				'created_at' => '2016-04-29 19:45:31',
				'updated_at' => '2016-04-29 19:45:31',
			),
			92 => 
			array (
				'id' => 304,
				'cliente_id' => 116,
				'equipe_id' => 5,
				'created_at' => '2016-04-29 19:51:10',
				'updated_at' => '2016-04-29 19:51:10',
			),
			93 => 
			array (
				'id' => 305,
				'cliente_id' => 226,
				'equipe_id' => 16,
				'created_at' => '2016-04-29 19:56:02',
				'updated_at' => '2016-04-29 19:56:02',
			),
			94 => 
			array (
				'id' => 306,
				'cliente_id' => 37,
				'equipe_id' => 16,
				'created_at' => '2016-04-29 20:02:48',
				'updated_at' => '2016-04-29 20:02:48',
			),
			95 => 
			array (
				'id' => 307,
				'cliente_id' => 24,
				'equipe_id' => 16,
				'created_at' => '2016-04-29 20:12:08',
				'updated_at' => '2016-04-29 20:12:08',
			),
		));
	}

}
