<?php

class MensagemTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('mensagem')->delete();
        
		\DB::table('mensagem')->insert(array (
			0 => 
			array (
				'id' => 5,
				'destinatario_id' => 10,
				'remetente_id' => 10,
				'assunto' => 'Teste de mensagem',
				'mensagem' => 'Primeria linha
segunda linha',
				'status' => 0,
				'created_at' => '2016-03-24 00:18:19',
				'updated_at' => '2016-03-24 00:22:41',
			),
			1 => 
			array (
				'id' => 6,
				'destinatario_id' => 16,
				'remetente_id' => 10,
				'assunto' => 'Teste de mensagem',
				'mensagem' => 'Teste de mensagem',
				'status' => 1,
				'created_at' => '2016-03-24 15:36:13',
				'updated_at' => '2016-04-01 17:48:04',
			),
			2 => 
			array (
				'id' => 7,
				'destinatario_id' => 10,
				'remetente_id' => 16,
				'assunto' => 'Teste de mensagem',
				'mensagem' => 'sdajasdhjasdasdhjasdjkas',
				'status' => 0,
				'created_at' => '2016-03-24 22:49:52',
				'updated_at' => '2016-03-24 23:09:21',
			),
			3 => 
			array (
				'id' => 8,
				'destinatario_id' => 10,
				'remetente_id' => 16,
				'assunto' => 'Assunto mais criativo',
				'mensagem' => 'mensagem mais criativa',
				'status' => 0,
				'created_at' => '2016-03-24 23:11:24',
				'updated_at' => '2016-03-24 23:11:36',
			),
			4 => 
			array (
				'id' => 9,
				'destinatario_id' => 16,
				'remetente_id' => 10,
				'assunto' => 'Assunto mais criativo',
				'mensagem' => 'badshdasasdhdash',
				'status' => 1,
				'created_at' => '2016-03-24 23:11:49',
				'updated_at' => '2016-04-01 17:48:04',
			),
			5 => 
			array (
				'id' => 10,
				'destinatario_id' => 16,
				'remetente_id' => 10,
				'assunto' => 'dfdsdfs',
				'mensagem' => 'sdfsdfdfsfsd',
				'status' => 1,
				'created_at' => '2016-03-24 23:17:05',
				'updated_at' => '2016-04-01 17:48:04',
			),
			6 => 
			array (
				'id' => 11,
				'destinatario_id' => 16,
				'remetente_id' => 10,
				'assunto' => 'asddasdas',
				'mensagem' => 'asdasdasd',
				'status' => 1,
				'created_at' => '2016-03-24 23:17:16',
				'updated_at' => '2016-04-01 17:48:04',
			),
			7 => 
			array (
				'id' => 12,
				'destinatario_id' => 10,
				'remetente_id' => 16,
				'assunto' => 'asdasd',
				'mensagem' => 'asdasdasdasddas',
				'status' => 1,
				'created_at' => '2016-03-24 23:49:44',
				'updated_at' => '2016-03-28 14:54:18',
			),
			8 => 
			array (
				'id' => 13,
				'destinatario_id' => 10,
				'remetente_id' => 16,
				'assunto' => 'asddassda',
				'mensagem' => 'fassaasddas',
				'status' => 1,
				'created_at' => '2016-03-24 23:49:49',
				'updated_at' => '2016-03-28 14:54:18',
			),
			9 => 
			array (
				'id' => 14,
				'destinatario_id' => 10,
				'remetente_id' => 16,
				'assunto' => 'dasaddwqewqeqweqw',
				'mensagem' => 'qweqweqweeqweqw',
				'status' => 1,
				'created_at' => '2016-03-24 23:49:54',
				'updated_at' => '2016-03-28 14:54:18',
			),
			10 => 
			array (
				'id' => 15,
				'destinatario_id' => 10,
				'remetente_id' => 16,
				'assunto' => 'eqwewqewqeqw',
				'mensagem' => 'qweweqewqeqweq',
				'status' => 1,
				'created_at' => '2016-03-24 23:50:00',
				'updated_at' => '2016-03-28 14:54:18',
			),
			11 => 
			array (
				'id' => 16,
				'destinatario_id' => 10,
				'remetente_id' => 16,
				'assunto' => 'eqwewqewqeqw',
				'mensagem' => 'qweweqewqeqweq',
				'status' => 1,
				'created_at' => '2016-03-24 23:50:00',
				'updated_at' => '2016-03-28 14:54:18',
			),
			12 => 
			array (
				'id' => 17,
				'destinatario_id' => 16,
				'remetente_id' => 10,
				'assunto' => 'Teste de WYSIWYG',
			'mensagem' => '<p><span style="font-weight: bold;">Olha </span>a <span style="font-style: italic;">mensagem </span>q estou <span style="text-decoration: underline;">mandando</span> com o</p><p> novo <span style="font-weight: bold;">editor </span>chamado de&nbsp;</p><h2 style="font-family: \'Open Sans\', sans-serif; line-height: 30px; background-color: rgb(245, 245, 245);">WYSIWYG</h2>',
				'status' => 1,
				'created_at' => '2016-03-31 17:29:24',
				'updated_at' => '2016-04-01 17:48:04',
			),
			13 => 
			array (
				'id' => 18,
				'destinatario_id' => 16,
				'remetente_id' => 10,
				'assunto' => 'Teste',
				'mensagem' => '<p>tysdatysdaytasd</p>',
				'status' => 0,
				'created_at' => '2016-04-13 20:48:24',
				'updated_at' => '2016-04-19 20:23:57',
			),
			14 => 
			array (
				'id' => 19,
				'destinatario_id' => 37,
				'remetente_id' => 36,
				'assunto' => 'Teste',
				'mensagem' => '<p>Testando</p>',
				'status' => 1,
				'created_at' => '2016-04-29 17:06:28',
				'updated_at' => '2016-04-29 17:06:29',
			),
		));
	}

}
