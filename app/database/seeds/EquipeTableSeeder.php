<?php

class EquipeTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('equipe')->delete();
        
		\DB::table('equipe')->insert(array (
			0 => 
			array (
				'id' => 5,
				'nome' => 'CRI | Criação / Sites',
				'user_id' => 13,
				'created_at' => '2016-04-11 18:43:25',
				'updated_at' => '2016-04-26 14:24:23',
			),
			1 => 
			array (
				'id' => 6,
				'nome' => 'PPC | Links Patrocinados',
				'user_id' => 18,
				'created_at' => '2016-04-26 14:02:41',
				'updated_at' => '2016-04-26 18:14:08',
			),
			2 => 
			array (
				'id' => 7,
				'nome' => 'SEO | Search Engine Optimization ',
				'user_id' => 20,
				'created_at' => '2016-04-26 14:03:44',
				'updated_at' => '2016-04-26 18:14:24',
			),
			3 => 
			array (
				'id' => 8,
				'nome' => 'CT | Conteúdo',
				'user_id' => 26,
				'created_at' => '2016-04-26 14:05:03',
				'updated_at' => '2016-04-29 12:25:13',
			),
			4 => 
			array (
				'id' => 10,
				'nome' => 'EMK | Email Marketing',
				'user_id' => 22,
				'created_at' => '2016-04-26 14:06:11',
				'updated_at' => '2016-04-27 12:11:07',
			),
			5 => 
			array (
				'id' => 11,
				'nome' => 'GTE | Gestão de E-commerce',
				'user_id' => 19,
				'created_at' => '2016-04-26 14:07:14',
				'updated_at' => '2016-04-26 18:14:55',
			),
			6 => 
			array (
				'id' => 13,
				'nome' => 'INB | Inbound Marketing',
				'user_id' => 25,
				'created_at' => '2016-04-26 14:07:57',
				'updated_at' => '2016-04-29 12:31:34',
			),
			7 => 
			array (
				'id' => 14,
				'nome' => 'PLN | Plano de Negócios',
				'user_id' => 19,
				'created_at' => '2016-04-26 14:08:24',
				'updated_at' => '2016-04-26 18:13:52',
			),
			8 => 
			array (
				'id' => 15,
				'nome' => 'PLT | Plataforma',
				'user_id' => 24,
				'created_at' => '2016-04-26 14:08:39',
				'updated_at' => '2016-04-27 12:11:45',
			),
			9 => 
			array (
				'id' => 16,
				'nome' => 'SMM | Social Media',
				'user_id' => 23,
				'created_at' => '2016-04-26 14:09:30',
				'updated_at' => '2016-04-29 16:52:20',
			),
			10 => 
			array (
				'id' => 17,
				'nome' => 'CMR | Comercial',
				'user_id' => 21,
				'created_at' => '2016-04-26 14:10:03',
				'updated_at' => '2016-04-26 19:34:25',
			),
			11 => 
			array (
				'id' => 18,
				'nome' => 'FNC | Financeiro',
				'user_id' => 21,
				'created_at' => '2016-04-26 14:11:07',
				'updated_at' => '2016-04-26 19:35:02',
			),
		));
	}

}
