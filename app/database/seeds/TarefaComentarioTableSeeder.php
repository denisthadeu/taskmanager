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
				'created_at' => '2016-03-29 16:52:46',
				'updated_at' => '2016-03-29 16:52:46',
			),
			1 => 
			array (
				'id' => 7,
				'descricao' => 'Teste de comentário com upload de arquivo',
				'user_id' => 10,
				'tarefa_id' => 13,
				'created_at' => '2016-03-29 16:58:18',
				'updated_at' => '2016-03-29 16:58:18',
			),
			2 => 
			array (
				'id' => 8,
				'descricao' => 'Novo teste de mensagem',
				'user_id' => 11,
				'tarefa_id' => 13,
				'created_at' => '2016-03-29 17:33:16',
				'updated_at' => '2016-03-29 17:33:16',
			),
			3 => 
			array (
				'id' => 9,
				'descricao' => 'Aviso do sistema: Dênis iniciou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 13,
				'created_at' => '2016-03-29 23:06:11',
				'updated_at' => '2016-03-29 23:06:11',
			),
			4 => 
			array (
				'id' => 10,
				'descricao' => 'Aviso do sistema: Dênis pausou esta tarefa para iniciar <a href="http://localhost/taskmanager/public/tarefa/edit/14">esta tarefa</a>',
				'user_id' => 10,
				'tarefa_id' => 13,
				'created_at' => '2016-03-29 23:07:31',
				'updated_at' => '2016-03-29 20:08:45',
			),
			5 => 
			array (
				'id' => 11,
				'descricao' => 'Aviso do sistema: Dênis iniciou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 14,
				'created_at' => '2016-03-29 23:07:31',
				'updated_at' => '2016-03-29 23:07:31',
			),
			6 => 
			array (
				'id' => 12,
				'descricao' => 'Aviso do sistema: Dênis pausou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 14,
				'created_at' => '2016-03-29 23:08:57',
				'updated_at' => '2016-03-29 23:08:57',
			),
			7 => 
			array (
				'id' => 13,
				'descricao' => 'Aviso do sistema: Dênis iniciou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 1,
				'created_at' => '2016-03-30 16:13:57',
				'updated_at' => '2016-03-30 16:13:57',
			),
			8 => 
			array (
				'id' => 14,
				'descricao' => 'Aviso do sistema: Dênis pausou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 1,
				'created_at' => '2016-03-30 16:24:10',
				'updated_at' => '2016-03-30 16:24:10',
			),
			9 => 
			array (
				'id' => 15,
				'descricao' => 'Aviso do sistema: Dênis iniciou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 1,
				'created_at' => '2016-03-30 16:24:22',
				'updated_at' => '2016-03-30 16:24:22',
			),
			10 => 
			array (
				'id' => 16,
				'descricao' => 'Aviso do sistema: Dênis pausou esta tarefa para iniciar <a href="http://localhost/taskmanager/public/tarefa/edit/9">esta tarefa</a>',
				'user_id' => 10,
				'tarefa_id' => 1,
				'created_at' => '2016-03-30 17:21:14',
				'updated_at' => '2016-03-30 17:21:14',
			),
			11 => 
			array (
				'id' => 17,
				'descricao' => 'Aviso do sistema: Dênis iniciou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 9,
				'created_at' => '2016-03-30 17:21:14',
				'updated_at' => '2016-03-30 17:21:14',
			),
			12 => 
			array (
				'id' => 18,
				'descricao' => 'Aviso do sistema: Dênis pausou esta tarefa para iniciar <a href="http://localhost/taskmanager/public/tarefa/edit/13">esta tarefa</a>',
				'user_id' => 10,
				'tarefa_id' => 9,
				'created_at' => '2016-03-30 18:09:55',
				'updated_at' => '2016-03-30 18:09:55',
			),
			13 => 
			array (
				'id' => 19,
				'descricao' => 'Aviso do sistema: Dênis iniciou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 13,
				'created_at' => '2016-03-30 18:09:55',
				'updated_at' => '2016-03-30 18:09:55',
			),
			14 => 
			array (
				'id' => 20,
				'descricao' => 'Aviso do sistema: Dênis pausou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 13,
				'created_at' => '2016-03-31 16:16:07',
				'updated_at' => '2016-03-31 16:16:07',
			),
			15 => 
			array (
				'id' => 21,
				'descricao' => 'Aviso do sistema: Angélica iniciou esta tarefa',
				'user_id' => 13,
				'tarefa_id' => 25,
				'created_at' => '2016-04-15 13:07:42',
				'updated_at' => '2016-04-15 13:07:42',
			),
			16 => 
			array (
				'id' => 22,
				'descricao' => 'Aviso do sistema: Angélica pausou esta tarefa',
				'user_id' => 13,
				'tarefa_id' => 25,
				'created_at' => '2016-04-15 13:07:50',
				'updated_at' => '2016-04-15 13:07:50',
			),
			17 => 
			array (
				'id' => 23,
				'descricao' => 'Aviso do sistema: Dênis iniciou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 27,
				'created_at' => '2016-04-19 14:22:28',
				'updated_at' => '2016-04-19 14:22:28',
			),
			18 => 
			array (
				'id' => 24,
				'descricao' => 'O Manual do webservice foi atualizado já, e os parametros já são outros! ',
				'user_id' => 10,
				'tarefa_id' => 27,
				'created_at' => '2016-04-19 14:38:45',
				'updated_at' => '2016-04-19 14:38:45',
			),
			19 => 
			array (
				'id' => 25,
				'descricao' => 'Aviso do sistema: Dênis pausou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 27,
				'created_at' => '2016-04-19 14:57:48',
				'updated_at' => '2016-04-19 14:57:48',
			),
			20 => 
			array (
				'id' => 26,
				'descricao' => 'Aviso do sistema: Dênis iniciou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 28,
				'created_at' => '2016-04-19 15:06:12',
				'updated_at' => '2016-04-19 15:06:12',
			),
			21 => 
			array (
				'id' => 27,
				'descricao' => 'Aviso do sistema: Dênis pausou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 28,
				'created_at' => '2016-04-19 15:25:51',
				'updated_at' => '2016-04-19 15:25:51',
			),
			22 => 
			array (
				'id' => 28,
				'descricao' => 'Aviso do sistema: Dênis iniciou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 27,
				'created_at' => '2016-04-19 16:37:10',
				'updated_at' => '2016-04-19 16:37:10',
			),
			23 => 
			array (
				'id' => 29,
				'descricao' => 'Me mandaram mais um manual atualizado da api!',
				'user_id' => 10,
				'tarefa_id' => 27,
				'created_at' => '2016-04-19 16:37:32',
				'updated_at' => '2016-04-19 16:37:32',
			),
			24 => 
			array (
				'id' => 30,
				'descricao' => 'Aviso do sistema: Dênis pausou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 27,
				'created_at' => '2016-04-19 16:56:59',
				'updated_at' => '2016-04-19 16:56:59',
			),
			25 => 
			array (
				'id' => 31,
				'descricao' => 'Aviso do sistema: Dênis iniciou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 26,
				'created_at' => '2016-04-19 16:59:27',
				'updated_at' => '2016-04-19 16:59:27',
			),
			26 => 
			array (
				'id' => 32,
				'descricao' => 'Aviso do sistema: Dênis pausou esta tarefa para iniciar <a href="http://task.bluefoot.uni5.net/tarefa/edit/28">esta tarefa</a>',
				'user_id' => 10,
				'tarefa_id' => 26,
				'created_at' => '2016-04-19 18:24:23',
				'updated_at' => '2016-04-19 18:24:23',
			),
			27 => 
			array (
				'id' => 33,
				'descricao' => 'Aviso do sistema: Dênis iniciou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 28,
				'created_at' => '2016-04-19 18:24:23',
				'updated_at' => '2016-04-19 18:24:23',
			),
			28 => 
			array (
				'id' => 34,
				'descricao' => 'Aviso do sistema: Dênis pausou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 28,
				'created_at' => '2016-04-19 20:24:50',
				'updated_at' => '2016-04-19 20:24:50',
			),
			29 => 
			array (
				'id' => 35,
				'descricao' => 'Aviso do sistema: Dênis iniciou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 26,
				'created_at' => '2016-04-20 12:30:19',
				'updated_at' => '2016-04-20 12:30:19',
			),
			30 => 
			array (
				'id' => 36,
				'descricao' => 'Aviso do sistema: Dênis pausou esta tarefa para iniciar <a href="http://task.bluefoot.uni5.net/tarefa/edit/29">esta tarefa</a>',
				'user_id' => 10,
				'tarefa_id' => 26,
				'created_at' => '2016-04-26 18:15:02',
				'updated_at' => '2016-04-26 18:15:02',
			),
			31 => 
			array (
				'id' => 37,
				'descricao' => 'Aviso do sistema: Dênis iniciou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 29,
				'created_at' => '2016-04-26 18:15:02',
				'updated_at' => '2016-04-26 18:15:02',
			),
			32 => 
			array (
				'id' => 38,
				'descricao' => 'Aviso do sistema: Dênis pausou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 29,
				'created_at' => '2016-04-26 19:22:43',
				'updated_at' => '2016-04-26 19:22:43',
			),
			33 => 
			array (
				'id' => 39,
				'descricao' => 'Aviso do sistema: Dênis iniciou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 31,
				'created_at' => '2016-04-27 17:26:47',
				'updated_at' => '2016-04-27 17:26:47',
			),
			34 => 
			array (
				'id' => 40,
				'descricao' => 'Tarefa ja esta quase concluída, falta apenas saber desde quando tem que importar os pedidos, se são todos, desde o começo, ou a partir de um mês específico.

Arquivo para executar a integração: http://projetos.bluefoot.uni5.net/integracao/newnutrition/integracao.php
Arquivo para gerar o excel: http://projetos.bluefoot.uni5.net/integracao/newnutrition/export.php',
				'user_id' => 10,
				'tarefa_id' => 31,
				'created_at' => '2016-04-27 17:46:50',
				'updated_at' => '2016-04-27 17:46:50',
			),
			35 => 
			array (
				'id' => 41,
				'descricao' => 'Aviso do sistema: Dênis pausou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 31,
				'created_at' => '2016-04-27 17:47:04',
				'updated_at' => '2016-04-27 17:47:04',
			),
			36 => 
			array (
				'id' => 42,
				'descricao' => 'Foi feito ontem, dia 26/04/2016',
				'user_id' => 10,
				'tarefa_id' => 32,
				'created_at' => '2016-04-27 18:02:10',
				'updated_at' => '2016-04-27 18:02:10',
			),
			37 => 
			array (
				'id' => 43,
				'descricao' => 'Aviso do sistema: Tarefa foi marcada como entregue',
				'user_id' => 10,
				'tarefa_id' => 32,
				'created_at' => '2016-04-27 18:02:22',
				'updated_at' => '2016-04-27 18:02:22',
			),
			38 => 
			array (
				'id' => 44,
				'descricao' => 'Aviso do sistema: Dênis iniciou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 29,
				'created_at' => '2016-04-27 18:29:14',
				'updated_at' => '2016-04-27 18:29:14',
			),
			39 => 
			array (
				'id' => 45,
				'descricao' => 'Aviso do sistema: Jamir iniciou esta tarefa',
				'user_id' => 16,
				'tarefa_id' => 30,
				'created_at' => '2016-04-27 19:00:33',
				'updated_at' => '2016-04-27 19:00:33',
			),
			40 => 
			array (
				'id' => 46,
				'descricao' => 'Aviso do sistema: Jamir pausou esta tarefa',
				'user_id' => 16,
				'tarefa_id' => 30,
				'created_at' => '2016-04-27 19:01:29',
				'updated_at' => '2016-04-27 19:01:29',
			),
			41 => 
			array (
				'id' => 47,
				'descricao' => 'Aviso do sistema: Jamir iniciou esta tarefa',
				'user_id' => 16,
				'tarefa_id' => 30,
				'created_at' => '2016-04-27 19:01:42',
				'updated_at' => '2016-04-27 19:01:42',
			),
			42 => 
			array (
				'id' => 48,
				'descricao' => 'Aviso do sistema: Jamir pausou esta tarefa',
				'user_id' => 16,
				'tarefa_id' => 30,
				'created_at' => '2016-04-27 19:12:07',
				'updated_at' => '2016-04-27 19:12:07',
			),
			43 => 
			array (
				'id' => 49,
				'descricao' => 'Aviso do sistema: Tarefa foi marcada como entregue',
				'user_id' => 16,
				'tarefa_id' => 30,
				'created_at' => '2016-04-27 19:12:35',
				'updated_at' => '2016-04-27 19:12:35',
			),
			44 => 
			array (
				'id' => 50,
			'descricao' => 'Funcionalidade: 40 minutos (não compatível com internet explorer anterior ao 11)',
				'user_id' => 16,
				'tarefa_id' => 30,
				'created_at' => '2016-04-27 19:13:34',
				'updated_at' => '2016-04-27 19:13:34',
			),
			45 => 
			array (
				'id' => 51,
				'descricao' => 'Aviso do sistema: Dênis pausou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 29,
				'created_at' => '2016-04-27 19:35:10',
				'updated_at' => '2016-04-27 19:35:10',
			),
			46 => 
			array (
				'id' => 52,
				'descricao' => 'Aviso do sistema: Dênis pausou esta tarefa',
				'user_id' => 10,
				'tarefa_id' => 29,
				'created_at' => '2016-04-27 19:35:16',
				'updated_at' => '2016-04-27 19:35:16',
			),
			47 => 
			array (
				'id' => 53,
				'descricao' => 'Aviso do sistema: Tarefa foi marcada como entregue',
				'user_id' => 10,
				'tarefa_id' => 29,
				'created_at' => '2016-04-27 19:35:16',
				'updated_at' => '2016-04-27 19:35:16',
			),
			48 => 
			array (
				'id' => 54,
				'descricao' => 'Aviso do sistema: Andre iniciou esta tarefa',
				'user_id' => 14,
				'tarefa_id' => 44,
				'created_at' => '2016-04-28 19:20:54',
				'updated_at' => '2016-04-28 19:20:54',
			),
			49 => 
			array (
				'id' => 55,
				'descricao' => 'Aviso do sistema: Andre pausou esta tarefa',
				'user_id' => 14,
				'tarefa_id' => 44,
				'created_at' => '2016-04-28 19:20:59',
				'updated_at' => '2016-04-28 19:20:59',
			),
			50 => 
			array (
				'id' => 56,
				'descricao' => 'Aviso do sistema: Andre iniciou esta tarefa',
				'user_id' => 14,
				'tarefa_id' => 44,
				'created_at' => '2016-04-28 19:21:00',
				'updated_at' => '2016-04-28 19:21:00',
			),
			51 => 
			array (
				'id' => 57,
				'descricao' => 'http://criacao.bluefoot.com.br/2016/snook_shop/email_mkt/04_abr/29/SNO_44_email.html',
				'user_id' => 14,
				'tarefa_id' => 44,
				'created_at' => '2016-04-28 20:39:00',
				'updated_at' => '2016-04-28 20:39:00',
			),
			52 => 
			array (
				'id' => 58,
				'descricao' => 'Aviso do sistema: Andre pausou esta tarefa',
				'user_id' => 14,
				'tarefa_id' => 44,
				'created_at' => '2016-04-28 20:39:09',
				'updated_at' => '2016-04-28 20:39:09',
			),
			53 => 
			array (
				'id' => 59,
				'descricao' => 'Aviso do sistema: Andre pausou esta tarefa',
				'user_id' => 14,
				'tarefa_id' => 44,
				'created_at' => '2016-04-28 20:39:50',
				'updated_at' => '2016-04-28 20:39:50',
			),
			54 => 
			array (
				'id' => 60,
				'descricao' => 'Aviso do sistema: Tarefa foi marcada como entregue',
				'user_id' => 14,
				'tarefa_id' => 44,
				'created_at' => '2016-04-28 20:39:50',
				'updated_at' => '2016-04-28 20:39:50',
			),
			55 => 
			array (
				'id' => 61,
				'descricao' => 'Aviso do sistema: Andre pausou esta tarefa',
				'user_id' => 14,
				'tarefa_id' => 44,
				'created_at' => '2016-04-28 20:39:51',
				'updated_at' => '2016-04-28 20:39:51',
			),
			56 => 
			array (
				'id' => 62,
				'descricao' => 'Aviso do sistema: Tarefa foi marcada como entregue',
				'user_id' => 14,
				'tarefa_id' => 44,
				'created_at' => '2016-04-28 20:39:51',
				'updated_at' => '2016-04-28 20:39:51',
			),
			57 => 
			array (
				'id' => 63,
				'descricao' => 'Aviso do sistema: Tarefa foi marcada como entregue',
				'user_id' => 27,
				'tarefa_id' => 57,
				'created_at' => '2016-04-29 12:32:06',
				'updated_at' => '2016-04-29 12:32:06',
			),
			58 => 
			array (
				'id' => 64,
				'descricao' => 'Aviso do sistema: Evelyn Arendt iniciou esta tarefa',
				'user_id' => 26,
				'tarefa_id' => 64,
				'created_at' => '2016-04-29 13:28:14',
				'updated_at' => '2016-04-29 13:28:14',
			),
			59 => 
			array (
				'id' => 65,
				'descricao' => 'Aviso do sistema: Evelyn Arendt pausou esta tarefa',
				'user_id' => 26,
				'tarefa_id' => 64,
				'created_at' => '2016-04-29 14:46:19',
				'updated_at' => '2016-04-29 14:46:19',
			),
			60 => 
			array (
				'id' => 66,
				'descricao' => 'Aviso do sistema: Angélica iniciou esta tarefa',
				'user_id' => 13,
				'tarefa_id' => 46,
				'created_at' => '2016-04-29 16:03:39',
				'updated_at' => '2016-04-29 16:03:39',
			),
			61 => 
			array (
				'id' => 67,
				'descricao' => 'Aviso do sistema: Evelyn Arendt iniciou esta tarefa',
				'user_id' => 26,
				'tarefa_id' => 64,
				'created_at' => '2016-04-29 16:18:31',
				'updated_at' => '2016-04-29 16:18:31',
			),
			62 => 
			array (
				'id' => 68,
				'descricao' => 'Aviso do sistema: Angélica pausou esta tarefa',
				'user_id' => 13,
				'tarefa_id' => 46,
				'created_at' => '2016-04-29 16:42:34',
				'updated_at' => '2016-04-29 16:42:34',
			),
			63 => 
			array (
				'id' => 69,
				'descricao' => 'Aviso do sistema: Angélica iniciou esta tarefa',
				'user_id' => 13,
				'tarefa_id' => 46,
				'created_at' => '2016-04-29 16:43:55',
				'updated_at' => '2016-04-29 16:43:55',
			),
			64 => 
			array (
				'id' => 70,
				'descricao' => 'Aviso do sistema: Angélica pausou esta tarefa',
				'user_id' => 13,
				'tarefa_id' => 46,
				'created_at' => '2016-04-29 17:10:53',
				'updated_at' => '2016-04-29 17:10:53',
			),
			65 => 
			array (
				'id' => 71,
				'descricao' => 'Aviso do sistema: Evelyn Arendt pausou esta tarefa',
				'user_id' => 26,
				'tarefa_id' => 64,
				'created_at' => '2016-04-29 19:15:41',
				'updated_at' => '2016-04-29 19:15:41',
			),
			66 => 
			array (
				'id' => 72,
				'descricao' => 'Aviso do sistema: Evelyn Arendt iniciou esta tarefa',
				'user_id' => 26,
				'tarefa_id' => 73,
				'created_at' => '2016-04-29 19:17:08',
				'updated_at' => '2016-04-29 19:17:08',
			),
			67 => 
			array (
				'id' => 73,
				'descricao' => 'Aviso do sistema: Gustavo iniciou esta tarefa',
				'user_id' => 15,
				'tarefa_id' => 58,
				'created_at' => '2016-04-29 19:19:44',
				'updated_at' => '2016-04-29 19:19:44',
			),
			68 => 
			array (
				'id' => 74,
				'descricao' => 'Aviso do sistema: Gustavo pausou esta tarefa',
				'user_id' => 15,
				'tarefa_id' => 58,
				'created_at' => '2016-04-29 19:37:12',
				'updated_at' => '2016-04-29 19:37:12',
			),
			69 => 
			array (
				'id' => 75,
				'descricao' => 'Aviso do sistema: Gustavo iniciou esta tarefa',
				'user_id' => 15,
				'tarefa_id' => 54,
				'created_at' => '2016-04-29 19:38:36',
				'updated_at' => '2016-04-29 19:38:36',
			),
			70 => 
			array (
				'id' => 76,
				'descricao' => 'Aviso do sistema: Gustavo pausou esta tarefa',
				'user_id' => 15,
				'tarefa_id' => 54,
				'created_at' => '2016-04-29 19:38:40',
				'updated_at' => '2016-04-29 19:38:40',
			),
			71 => 
			array (
				'id' => 77,
				'descricao' => 'Devido a falta de acesso a ferramenta essa tarefa não foi contabilizada com o tempo correto.',
				'user_id' => 15,
				'tarefa_id' => 54,
				'created_at' => '2016-04-29 19:40:42',
				'updated_at' => '2016-04-29 19:40:42',
			),
			72 => 
			array (
				'id' => 78,
				'descricao' => 'Aviso do sistema: Gustavo pausou esta tarefa',
				'user_id' => 15,
				'tarefa_id' => 54,
				'created_at' => '2016-04-29 19:42:05',
				'updated_at' => '2016-04-29 19:42:05',
			),
			73 => 
			array (
				'id' => 79,
				'descricao' => 'Aviso do sistema: Tarefa foi marcada como entregue',
				'user_id' => 15,
				'tarefa_id' => 54,
				'created_at' => '2016-04-29 19:42:05',
				'updated_at' => '2016-04-29 19:42:05',
			),
			74 => 
			array (
				'id' => 80,
				'descricao' => 'Aviso do sistema: Angélica pausou esta tarefa',
				'user_id' => 13,
				'tarefa_id' => 46,
				'created_at' => '2016-04-29 19:53:36',
				'updated_at' => '2016-04-29 19:53:36',
			),
			75 => 
			array (
				'id' => 81,
				'descricao' => 'Aviso do sistema: Tarefa foi marcada como entregue',
				'user_id' => 13,
				'tarefa_id' => 46,
				'created_at' => '2016-04-29 19:53:36',
				'updated_at' => '2016-04-29 19:53:36',
			),
			76 => 
			array (
				'id' => 82,
				'descricao' => 'Aviso do sistema: Gustavo iniciou esta tarefa',
				'user_id' => 15,
				'tarefa_id' => 58,
				'created_at' => '2016-04-29 19:54:56',
				'updated_at' => '2016-04-29 19:54:56',
			),
			77 => 
			array (
				'id' => 83,
				'descricao' => 'Aviso do sistema: Gustavo pausou esta tarefa',
				'user_id' => 15,
				'tarefa_id' => 58,
				'created_at' => '2016-04-29 19:55:31',
				'updated_at' => '2016-04-29 19:55:31',
			),
			78 => 
			array (
				'id' => 84,
				'descricao' => 'Aviso do sistema: Gustavo iniciou esta tarefa',
				'user_id' => 15,
				'tarefa_id' => 58,
				'created_at' => '2016-04-29 19:55:37',
				'updated_at' => '2016-04-29 19:55:37',
			),
			79 => 
			array (
				'id' => 85,
				'descricao' => 'Aviso do sistema: Andre iniciou esta tarefa',
				'user_id' => 14,
				'tarefa_id' => 53,
				'created_at' => '2016-04-29 20:18:07',
				'updated_at' => '2016-04-29 20:18:07',
			),
			80 => 
			array (
				'id' => 86,
				'descricao' => 'Aviso do sistema: Gustavo pausou esta tarefa',
				'user_id' => 15,
				'tarefa_id' => 58,
				'created_at' => '2016-04-29 20:19:43',
				'updated_at' => '2016-04-29 20:19:43',
			),
			81 => 
			array (
				'id' => 87,
				'descricao' => 'Aviso do sistema: Gustavo pausou esta tarefa',
				'user_id' => 15,
				'tarefa_id' => 58,
				'created_at' => '2016-04-29 20:23:06',
				'updated_at' => '2016-04-29 20:23:06',
			),
			82 => 
			array (
				'id' => 88,
				'descricao' => 'Aviso do sistema: Tarefa foi marcada como entregue',
				'user_id' => 15,
				'tarefa_id' => 58,
				'created_at' => '2016-04-29 20:23:06',
				'updated_at' => '2016-04-29 20:23:06',
			),
		));
	}

}
