<?php

class TarefaTipoTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('tarefa_tipo')->delete();
        
		\DB::table('tarefa_tipo')->insert(array (
			0 => 
			array (
				'id' => 5,
				'nome' => 'CRI | Ajustes e Refações ',
				'hora_esforco' => 0,
				'minuto_esforco' => 30,
				'created_at' => '2016-04-18 12:38:13',
				'updated_at' => '2016-04-18 14:40:28',
			),
			1 => 
			array (
				'id' => 6,
				'nome' => 'CRI | Atendimento - Suporte',
				'hora_esforco' => 0,
				'minuto_esforco' => 30,
				'created_at' => '2016-04-18 14:40:58',
				'updated_at' => '2016-04-18 14:40:58',
			),
			2 => 
			array (
				'id' => 7,
				'nome' => 'CRI | Apresentação Slides - Diagramação',
				'hora_esforco' => 2,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 14:41:33',
				'updated_at' => '2016-04-18 14:41:33',
			),
			3 => 
			array (
				'id' => 8,
				'nome' => 'CRI | Apresentação Slides - Criação',
				'hora_esforco' => 5,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 14:42:01',
				'updated_at' => '2016-04-18 14:42:01',
			),
			4 => 
			array (
				'id' => 9,
				'nome' => 'CRI | Back-end - Ajustes',
				'hora_esforco' => 1,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 14:42:50',
				'updated_at' => '2016-04-18 14:42:50',
			),
			5 => 
			array (
				'id' => 10,
				'nome' => 'CRI | Front-end - Ajustes',
				'hora_esforco' => 1,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 14:43:07',
				'updated_at' => '2016-04-18 14:43:07',
			),
			6 => 
			array (
				'id' => 11,
				'nome' => 'CRI | Site - Back-end ',
				'hora_esforco' => 5,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 14:46:35',
				'updated_at' => '2016-04-18 14:47:19',
			),
			7 => 
			array (
				'id' => 12,
				'nome' => 'CRI | Site - Front-end ',
				'hora_esforco' => 5,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 14:46:55',
				'updated_at' => '2016-04-18 14:46:55',
			),
			8 => 
			array (
				'id' => 13,
				'nome' => 'CRI | Banner adaptação de layout',
				'hora_esforco' => 0,
				'minuto_esforco' => 30,
				'created_at' => '2016-04-18 14:47:45',
				'updated_at' => '2016-04-18 14:47:45',
			),
			9 => 
			array (
				'id' => 14,
				'nome' => 'CRI | Banner estático home',
				'hora_esforco' => 1,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 14:48:10',
				'updated_at' => '2016-04-18 14:48:10',
			),
			10 => 
			array (
				'id' => 15,
				'nome' => 'CRI | Banner estático lateral',
				'hora_esforco' => 0,
				'minuto_esforco' => 30,
				'created_at' => '2016-04-18 14:48:36',
				'updated_at' => '2016-04-18 14:48:44',
			),
			11 => 
			array (
				'id' => 16,
				'nome' => 'CRI | Banner estático categoria',
				'hora_esforco' => 1,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 14:49:20',
				'updated_at' => '2016-04-18 14:49:20',
			),
			12 => 
			array (
				'id' => 17,
				'nome' => 'CRI | Banner estático footer',
				'hora_esforco' => 1,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 14:52:27',
				'updated_at' => '2016-04-18 14:52:27',
			),
			13 => 
			array (
				'id' => 18,
				'nome' => 'CRI | Banner faixa hint',
				'hora_esforco' => 0,
				'minuto_esforco' => 15,
				'created_at' => '2016-04-18 14:52:49',
				'updated_at' => '2016-04-18 14:52:49',
			),
			14 => 
			array (
				'id' => 19,
				'nome' => 'CRI | Banner HTML',
				'hora_esforco' => 2,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 14:53:06',
				'updated_at' => '2016-04-18 14:53:06',
			),
			15 => 
			array (
				'id' => 20,
				'nome' => 'CRI | Banner slim',
				'hora_esforco' => 0,
				'minuto_esforco' => 30,
				'created_at' => '2016-04-18 14:53:35',
				'updated_at' => '2016-04-18 14:53:35',
			),
			16 => 
			array (
				'id' => 21,
				'nome' => 'CRI | Criação para concorrência',
				'hora_esforco' => 4,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 14:54:02',
				'updated_at' => '2016-04-18 14:54:37',
			),
			17 => 
			array (
				'id' => 22,
				'nome' => 'CRI | Criação de identidade digital',
				'hora_esforco' => 2,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 14:55:08',
				'updated_at' => '2016-04-18 14:55:08',
			),
			18 => 
			array (
				'id' => 23,
				'nome' => 'CRI | Criação de selo',
				'hora_esforco' => 1,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 14:55:25',
				'updated_at' => '2016-04-18 14:55:25',
			),
			19 => 
			array (
				'id' => 24,
				'nome' => 'CRI | Estudo',
				'hora_esforco' => 2,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 14:55:51',
				'updated_at' => '2016-04-18 14:55:51',
			),
			20 => 
			array (
				'id' => 25,
				'nome' => 'CRI | CRM - Carrinho abandonado',
				'hora_esforco' => 2,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 14:56:23',
				'updated_at' => '2016-04-18 14:56:23',
			),
			21 => 
			array (
				'id' => 26,
				'nome' => 'CRI | CRM - Novo template',
				'hora_esforco' => 2,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 14:56:49',
				'updated_at' => '2016-04-18 14:56:49',
			),
			22 => 
			array (
				'id' => 27,
				'nome' => 'CRI | CRM - Não compradores',
				'hora_esforco' => 2,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 14:57:14',
				'updated_at' => '2016-04-18 14:57:14',
			),
			23 => 
			array (
				'id' => 28,
				'nome' => 'CRI | Endomarketing',
				'hora_esforco' => 1,
				'minuto_esforco' => 30,
				'created_at' => '2016-04-18 14:57:43',
				'updated_at' => '2016-04-18 14:57:43',
			),
			24 => 
			array (
				'id' => 29,
				'nome' => 'CRI | Diagramação de e-book',
				'hora_esforco' => 5,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 14:58:02',
				'updated_at' => '2016-04-18 14:58:02',
			),
			25 => 
			array (
				'id' => 30,
				'nome' => 'CRI | Email Marketing - Double optin',
				'hora_esforco' => 2,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 14:58:33',
				'updated_at' => '2016-04-18 14:58:33',
			),
			26 => 
			array (
				'id' => 31,
				'nome' => 'CRI | Campanha - conteúdo',
				'hora_esforco' => 1,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 14:58:54',
				'updated_at' => '2016-04-18 14:58:54',
			),
			27 => 
			array (
				'id' => 32,
				'nome' => 'CRI | Campanha - layout',
				'hora_esforco' => 3,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 15:00:11',
				'updated_at' => '2016-04-18 15:00:11',
			),
			28 => 
			array (
				'id' => 33,
				'nome' => 'CRI | Email Marketing - Adaptado',
				'hora_esforco' => 0,
				'minuto_esforco' => 30,
				'created_at' => '2016-04-18 15:01:28',
				'updated_at' => '2016-04-18 15:01:28',
			),
			29 => 
			array (
				'id' => 34,
				'nome' => 'CRI | Email Marketing - Banner único',
				'hora_esforco' => 0,
				'minuto_esforco' => 30,
				'created_at' => '2016-04-18 15:04:21',
				'updated_at' => '2016-04-18 15:04:21',
			),
			30 => 
			array (
				'id' => 35,
				'nome' => 'CRI | Email Marketing - Manutenção',
				'hora_esforco' => 0,
				'minuto_esforco' => 15,
				'created_at' => '2016-04-18 15:04:47',
				'updated_at' => '2016-04-18 15:04:47',
			),
			31 => 
			array (
				'id' => 36,
				'nome' => 'CRI | Email Marketing - Novo template',
				'hora_esforco' => 2,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 15:05:15',
				'updated_at' => '2016-04-18 15:05:15',
			),
			32 => 
			array (
				'id' => 37,
				'nome' => 'CRI | Email Marketing -  Programação',
				'hora_esforco' => 2,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 15:05:38',
				'updated_at' => '2016-04-18 15:05:53',
			),
			33 => 
			array (
				'id' => 38,
				'nome' => 'CRI | Email Marketing - Vitrine',
				'hora_esforco' => 1,
				'minuto_esforco' => 30,
				'created_at' => '2016-04-18 15:06:23',
				'updated_at' => '2016-04-18 15:06:23',
			),
			34 => 
			array (
				'id' => 39,
				'nome' => 'CRI | Email Marketing -  Transacional',
				'hora_esforco' => 2,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 15:06:49',
				'updated_at' => '2016-04-18 15:06:49',
			),
			35 => 
			array (
				'id' => 40,
				'nome' => 'CRI | Envelopamento - Layout',
				'hora_esforco' => 2,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 15:07:29',
				'updated_at' => '2016-04-18 15:07:34',
			),
			36 => 
			array (
				'id' => 41,
				'nome' => 'CRI | Envelopamento - Programação',
				'hora_esforco' => 2,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 15:07:50',
				'updated_at' => '2016-04-18 15:07:50',
			),
			37 => 
			array (
				'id' => 42,
				'nome' => 'CRI | Floater - Programação',
				'hora_esforco' => 2,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 15:08:09',
				'updated_at' => '2016-04-18 15:10:11',
			),
			38 => 
			array (
				'id' => 43,
				'nome' => 'CRI | Floater  - Criação',
				'hora_esforco' => 1,
				'minuto_esforco' => 30,
				'created_at' => '2016-04-18 15:09:15',
				'updated_at' => '2016-04-18 15:09:15',
			),
			39 => 
			array (
				'id' => 44,
				'nome' => 'CRI | Criação de Infográfico',
				'hora_esforco' => 4,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 15:20:37',
				'updated_at' => '2016-04-18 15:20:37',
			),
			40 => 
			array (
				'id' => 45,
				'nome' => 'CRI | Site - Criação - Landing page ',
				'hora_esforco' => 5,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 15:21:17',
				'updated_at' => '2016-04-18 15:22:29',
			),
			41 => 
			array (
				'id' => 46,
				'nome' => 'CRI | Site - Landing page - Programação',
				'hora_esforco' => 7,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 15:21:53',
				'updated_at' => '2016-04-18 15:21:53',
			),
			42 => 
			array (
				'id' => 47,
				'nome' => 'CRI | Links - Adaptação de layout',
				'hora_esforco' => 1,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 15:22:54',
				'updated_at' => '2016-04-18 15:22:59',
			),
			43 => 
			array (
				'id' => 48,
				'nome' => 'CRI |  Links - Carrossel Facebook',
				'hora_esforco' => 1,
				'minuto_esforco' => 30,
				'created_at' => '2016-04-18 15:23:34',
				'updated_at' => '2016-04-18 15:23:34',
			),
			44 => 
			array (
				'id' => 49,
				'nome' => 'CRI |  Links - Criação de layout',
				'hora_esforco' => 2,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 15:23:54',
				'updated_at' => '2016-04-18 15:23:54',
			),
			45 => 
			array (
				'id' => 50,
				'nome' => 'CRI |  Links - Criação de layout - Animado',
				'hora_esforco' => 4,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 15:24:32',
				'updated_at' => '2016-04-18 15:24:32',
			),
			46 => 
			array (
				'id' => 51,
				'nome' => 'CRI | Material institucional',
				'hora_esforco' => 2,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 15:24:51',
				'updated_at' => '2016-04-18 15:24:51',
			),
			47 => 
			array (
				'id' => 52,
				'nome' => 'CRI | Mercado Livre - Layout',
				'hora_esforco' => 2,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 15:25:10',
				'updated_at' => '2016-04-18 15:25:10',
			),
			48 => 
			array (
				'id' => 53,
				'nome' => 'CRI | Mercado Livre - Programação',
				'hora_esforco' => 2,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 15:25:28',
				'updated_at' => '2016-04-18 15:25:28',
			),
			49 => 
			array (
				'id' => 54,
				'nome' => 'CRI | Produção Gráfica - Orçamento',
				'hora_esforco' => 0,
				'minuto_esforco' => 30,
				'created_at' => '2016-04-18 15:25:49',
				'updated_at' => '2016-04-18 15:25:54',
			),
			50 => 
			array (
				'id' => 55,
				'nome' => 'CRI | Reunião',
				'hora_esforco' => 1,
				'minuto_esforco' => 30,
				'created_at' => '2016-04-18 15:26:12',
				'updated_at' => '2016-04-18 15:26:12',
			),
			51 => 
			array (
				'id' => 56,
				'nome' => 'CRI | Treinamento',
				'hora_esforco' => 1,
				'minuto_esforco' => 30,
				'created_at' => '2016-04-18 15:26:27',
				'updated_at' => '2016-04-18 15:26:27',
			),
			52 => 
			array (
				'id' => 57,
				'nome' => 'CRI | Site - Controle de qualidade',
				'hora_esforco' => 1,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 15:27:08',
				'updated_at' => '2016-04-18 15:27:08',
			),
			53 => 
			array (
				'id' => 58,
				'nome' => 'CRI | Site - Criação de layout',
				'hora_esforco' => 4,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 15:27:29',
				'updated_at' => '2016-04-18 15:27:37',
			),
			54 => 
			array (
				'id' => 59,
				'nome' => 'CRI | Site - Implementação',
				'hora_esforco' => 2,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 15:28:06',
				'updated_at' => '2016-04-18 15:28:06',
			),
			55 => 
			array (
				'id' => 60,
				'nome' => 'CRI | Site - Programação',
				'hora_esforco' => 1,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 15:28:29',
				'updated_at' => '2016-04-18 15:28:29',
			),
			56 => 
			array (
				'id' => 61,
				'nome' => 'CRI |  Links - Post Ads',
				'hora_esforco' => 1,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 15:29:22',
				'updated_at' => '2016-04-18 15:29:22',
			),
			57 => 
			array (
				'id' => 62,
				'nome' => 'CRI | Social Media - Header',
				'hora_esforco' => 1,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 15:29:50',
				'updated_at' => '2016-04-18 15:29:50',
			),
			58 => 
			array (
				'id' => 63,
				'nome' => 'CRI | Social Media -  Ícones',
				'hora_esforco' => 1,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 15:30:16',
				'updated_at' => '2016-04-18 15:30:16',
			),
			59 => 
			array (
				'id' => 64,
				'nome' => 'CRI | Social Media - Novo Layout',
				'hora_esforco' => 1,
				'minuto_esforco' => 30,
				'created_at' => '2016-04-18 15:30:45',
				'updated_at' => '2016-04-18 15:30:45',
			),
			60 => 
			array (
				'id' => 65,
				'nome' => 'CRI | Social Media - Post',
				'hora_esforco' => 0,
				'minuto_esforco' => 30,
				'created_at' => '2016-04-18 15:31:12',
				'updated_at' => '2016-04-18 15:31:12',
			),
			61 => 
			array (
				'id' => 66,
				'nome' => 'CRI | Social Media - Post Ads',
				'hora_esforco' => 1,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 15:31:30',
				'updated_at' => '2016-04-18 15:31:30',
			),
			62 => 
			array (
				'id' => 67,
				'nome' => 'CRI | Inserção de Tags e Eventos',
				'hora_esforco' => 1,
				'minuto_esforco' => 30,
				'created_at' => '2016-04-18 15:31:53',
				'updated_at' => '2016-04-18 15:31:53',
			),
			63 => 
			array (
				'id' => 68,
				'nome' => 'CRI | Wireframe - Proposta de arquitetura',
				'hora_esforco' => 4,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 15:32:19',
				'updated_at' => '2016-04-18 15:32:19',
			),
			64 => 
			array (
				'id' => 69,
				'nome' => 'CRI | Wireframe - Redesenho',
				'hora_esforco' => 2,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 15:32:42',
				'updated_at' => '2016-04-18 15:32:49',
			),
			65 => 
			array (
				'id' => 70,
				'nome' => 'CRI | Back-end - Integração',
				'hora_esforco' => 7,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-18 20:44:48',
				'updated_at' => '2016-04-18 20:44:48',
			),
			66 => 
			array (
				'id' => 71,
				'nome' => 'CRI |  Orçamento',
				'hora_esforco' => 1,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-26 20:04:26',
				'updated_at' => '2016-04-26 20:04:26',
			),
			67 => 
			array (
				'id' => 72,
				'nome' => 'GTE | Tarefas de Análise',
				'hora_esforco' => 1,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-27 14:45:25',
				'updated_at' => '2016-04-27 14:45:34',
			),
			68 => 
			array (
				'id' => 73,
				'nome' => 'GTE | Tarefas de Atendimento',
				'hora_esforco' => 1,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-27 14:45:54',
				'updated_at' => '2016-04-27 14:45:54',
			),
			69 => 
			array (
				'id' => 74,
				'nome' => 'GTE | Tarefas de Operação',
				'hora_esforco' => 1,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-27 14:46:22',
				'updated_at' => '2016-04-27 14:46:22',
			),
			70 => 
			array (
				'id' => 75,
				'nome' => 'EMK | Agendamento de disparo',
				'hora_esforco' => 0,
				'minuto_esforco' => 15,
				'created_at' => '2016-04-27 17:05:29',
				'updated_at' => '2016-04-27 17:05:29',
			),
			71 => 
			array (
				'id' => 76,
				'nome' => 'EMK | Atendimento',
				'hora_esforco' => 2,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-27 17:05:53',
				'updated_at' => '2016-04-27 17:05:53',
			),
			72 => 
			array (
				'id' => 77,
				'nome' => 'EMK | Dashboard',
				'hora_esforco' => 1,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-27 17:06:13',
				'updated_at' => '2016-04-27 17:06:13',
			),
			73 => 
			array (
				'id' => 78,
				'nome' => 'EMK | Atualização de base',
				'hora_esforco' => 1,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-27 17:06:35',
				'updated_at' => '2016-04-27 17:06:35',
			),
			74 => 
			array (
				'id' => 79,
				'nome' => 'EMK | Planejamento de estratégias avançadas',
				'hora_esforco' => 2,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-27 17:07:10',
				'updated_at' => '2016-04-27 17:07:10',
			),
			75 => 
			array (
				'id' => 80,
				'nome' => 'EMK | Análise de campanhas',
				'hora_esforco' => 1,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-27 17:07:36',
				'updated_at' => '2016-04-27 17:07:36',
			),
			76 => 
			array (
				'id' => 81,
				'nome' => 'SUP | Filtro de Tickets',
				'hora_esforco' => 0,
				'minuto_esforco' => 30,
				'created_at' => '2016-04-27 19:33:13',
				'updated_at' => '2016-04-27 19:33:13',
			),
			77 => 
			array (
				'id' => 82,
				'nome' => 'SUP | Atendimento',
				'hora_esforco' => 1,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-27 19:33:34',
				'updated_at' => '2016-04-27 19:33:34',
			),
			78 => 
			array (
				'id' => 83,
				'nome' => 'SUP | Gravação de Vídeo',
				'hora_esforco' => 1,
				'minuto_esforco' => 30,
				'created_at' => '2016-04-27 19:33:57',
				'updated_at' => '2016-04-27 19:33:57',
			),
			79 => 
			array (
				'id' => 84,
				'nome' => 'SUP | Estudo VTEX',
				'hora_esforco' => 1,
				'minuto_esforco' => 30,
				'created_at' => '2016-04-27 19:34:24',
				'updated_at' => '2016-04-27 19:34:24',
			),
			80 => 
			array (
				'id' => 85,
				'nome' => 'SUP | Processos',
				'hora_esforco' => 1,
				'minuto_esforco' => 30,
				'created_at' => '2016-04-27 19:35:03',
				'updated_at' => '2016-04-27 19:35:03',
			),
			81 => 
			array (
				'id' => 86,
				'nome' => 'PRO | Revisão do Cronograma de Projetos',
				'hora_esforco' => 1,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-27 19:42:01',
				'updated_at' => '2016-04-27 19:42:01',
			),
			82 => 
			array (
				'id' => 87,
				'nome' => 'PRO | Processos',
				'hora_esforco' => 1,
				'minuto_esforco' => 30,
				'created_at' => '2016-04-27 19:42:35',
				'updated_at' => '2016-04-27 19:42:35',
			),
			83 => 
			array (
				'id' => 88,
				'nome' => 'CT | INB - Conteúdo E-book',
				'hora_esforco' => 4,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-29 12:33:42',
				'updated_at' => '2016-04-29 12:34:18',
			),
			84 => 
			array (
				'id' => 89,
				'nome' => 'CT | SEO - Conteúdo Blog',
				'hora_esforco' => 1,
				'minuto_esforco' => 30,
				'created_at' => '2016-04-29 12:35:23',
				'updated_at' => '2016-04-29 12:35:23',
			),
			85 => 
			array (
				'id' => 90,
				'nome' => 'CT | Full - Conteúdo Blog',
				'hora_esforco' => 1,
				'minuto_esforco' => 30,
				'created_at' => '2016-04-29 12:35:46',
				'updated_at' => '2016-04-29 12:35:46',
			),
			86 => 
			array (
				'id' => 91,
				'nome' => 'CT | INB - Conteúdo Inbound',
				'hora_esforco' => 2,
				'minuto_esforco' => 30,
				'created_at' => '2016-04-29 12:36:09',
				'updated_at' => '2016-04-29 12:36:09',
			),
			87 => 
			array (
				'id' => 92,
				'nome' => 'CT | SEO - Descrição de Categoria',
				'hora_esforco' => 0,
				'minuto_esforco' => 45,
				'created_at' => '2016-04-29 12:36:36',
				'updated_at' => '2016-04-29 12:55:27',
			),
			88 => 
			array (
				'id' => 93,
				'nome' => 'CT | INB - Publicando',
				'hora_esforco' => 0,
				'minuto_esforco' => 45,
				'created_at' => '2016-04-29 12:37:31',
				'updated_at' => '2016-04-29 12:37:31',
			),
			89 => 
			array (
				'id' => 94,
				'nome' => 'CT | Descrição',
				'hora_esforco' => 0,
				'minuto_esforco' => 45,
				'created_at' => '2016-04-29 12:37:52',
				'updated_at' => '2016-04-29 12:38:55',
			),
			90 => 
			array (
				'id' => 95,
				'nome' => 'CT | Reunião ',
				'hora_esforco' => 0,
				'minuto_esforco' => 30,
				'created_at' => '2016-04-29 12:39:13',
				'updated_at' => '2016-04-29 12:39:13',
			),
			91 => 
			array (
				'id' => 96,
				'nome' => 'SMM | Relatório Mensal',
				'hora_esforco' => 0,
				'minuto_esforco' => 45,
				'created_at' => '2016-04-29 12:39:41',
				'updated_at' => '2016-04-29 17:06:31',
			),
			92 => 
			array (
				'id' => 97,
				'nome' => 'SMM | Ações',
				'hora_esforco' => 1,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-29 12:44:26',
				'updated_at' => '2016-04-29 16:53:48',
			),
			93 => 
			array (
				'id' => 98,
				'nome' => 'SMM | Atendimento',
				'hora_esforco' => 1,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-29 12:44:43',
				'updated_at' => '2016-04-29 16:55:45',
			),
			94 => 
			array (
				'id' => 99,
				'nome' => 'SMM | Brainstorming',
				'hora_esforco' => 0,
				'minuto_esforco' => 45,
				'created_at' => '2016-04-29 12:44:55',
				'updated_at' => '2016-04-29 16:57:11',
			),
			95 => 
			array (
				'id' => 100,
				'nome' => 'SMM | Criação de Planilha Semanal',
				'hora_esforco' => 1,
				'minuto_esforco' => 15,
				'created_at' => '2016-04-29 12:45:08',
				'updated_at' => '2016-04-29 16:59:02',
			),
			96 => 
			array (
				'id' => 101,
				'nome' => 'SMM | Interações',
				'hora_esforco' => 0,
				'minuto_esforco' => 30,
				'created_at' => '2016-04-29 12:45:20',
				'updated_at' => '2016-04-29 16:57:46',
			),
			97 => 
			array (
				'id' => 102,
				'nome' => 'SMM | Reunião',
				'hora_esforco' => 1,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-29 12:45:44',
				'updated_at' => '2016-04-29 17:06:46',
			),
			98 => 
			array (
				'id' => 103,
				'nome' => 'CT | SM - Criação de Planilha Semanal',
				'hora_esforco' => 1,
				'minuto_esforco' => 15,
				'created_at' => '2016-04-29 12:48:07',
				'updated_at' => '2016-04-29 12:48:07',
			),
			99 => 
			array (
				'id' => 104,
				'nome' => 'SMM | Briefing',
				'hora_esforco' => 0,
				'minuto_esforco' => 30,
				'created_at' => '2016-04-29 12:48:35',
				'updated_at' => '2016-04-29 16:54:54',
			),
			100 => 
			array (
				'id' => 105,
				'nome' => 'SMM | Planejamento',
				'hora_esforco' => 3,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-29 12:48:55',
				'updated_at' => '2016-04-29 16:58:44',
			),
			101 => 
			array (
				'id' => 106,
				'nome' => 'SMM | Proposta Comercial',
				'hora_esforco' => 1,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-29 12:49:12',
				'updated_at' => '2016-04-29 17:05:15',
			),
			102 => 
			array (
				'id' => 107,
				'nome' => 'SMM | Revisão de Planilhas',
				'hora_esforco' => 0,
				'minuto_esforco' => 15,
				'created_at' => '2016-04-29 12:50:16',
				'updated_at' => '2016-04-29 17:10:29',
			),
			103 => 
			array (
				'id' => 108,
				'nome' => 'CT | Full - Publicando',
				'hora_esforco' => 0,
				'minuto_esforco' => 15,
				'created_at' => '2016-04-29 12:52:01',
				'updated_at' => '2016-04-29 12:52:01',
			),
			104 => 
			array (
				'id' => 109,
				'nome' => 'CT | Treinamento',
				'hora_esforco' => 1,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-29 12:52:21',
				'updated_at' => '2016-04-29 12:52:21',
			),
			105 => 
			array (
				'id' => 110,
				'nome' => 'CT | SEO - Publicando',
				'hora_esforco' => 0,
				'minuto_esforco' => 15,
				'created_at' => '2016-04-29 12:53:00',
				'updated_at' => '2016-04-29 12:53:00',
			),
			106 => 
			array (
				'id' => 111,
				'nome' => 'CT | Revisão de Conteúdo',
				'hora_esforco' => 0,
				'minuto_esforco' => 15,
				'created_at' => '2016-04-29 12:53:40',
				'updated_at' => '2016-04-29 12:53:40',
			),
			107 => 
			array (
				'id' => 112,
				'nome' => 'CT | INB - Revisão de Conteúdo',
				'hora_esforco' => 0,
				'minuto_esforco' => 15,
				'created_at' => '2016-04-29 12:54:23',
				'updated_at' => '2016-04-29 12:54:23',
			),
			108 => 
			array (
				'id' => 113,
				'nome' => 'CT | SEO - Revisão de Conteúdo',
				'hora_esforco' => 0,
				'minuto_esforco' => 15,
				'created_at' => '2016-04-29 12:54:48',
				'updated_at' => '2016-04-29 12:54:48',
			),
			109 => 
			array (
				'id' => 114,
				'nome' => 'CT | SEO - Descrição de Produto',
				'hora_esforco' => 0,
				'minuto_esforco' => 30,
				'created_at' => '2016-04-29 12:55:53',
				'updated_at' => '2016-04-29 12:55:53',
			),
			110 => 
			array (
				'id' => 115,
				'nome' => 'CT | Full - Revisão de Conteúdo',
				'hora_esforco' => 0,
				'minuto_esforco' => 15,
				'created_at' => '2016-04-29 12:57:24',
				'updated_at' => '2016-04-29 12:57:24',
			),
			111 => 
			array (
				'id' => 116,
				'nome' => 'SMM | Reunião de Briefing',
				'hora_esforco' => 1,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-29 16:55:12',
				'updated_at' => '2016-04-29 16:55:12',
			),
			112 => 
			array (
				'id' => 117,
				'nome' => 'SMM | Projeção ADS',
				'hora_esforco' => 0,
				'minuto_esforco' => 15,
				'created_at' => '2016-04-29 16:57:16',
				'updated_at' => '2016-04-29 16:57:16',
			),
			113 => 
			array (
				'id' => 118,
				'nome' => 'SMM | Revisão de Artes',
				'hora_esforco' => 0,
				'minuto_esforco' => 15,
				'created_at' => '2016-04-29 17:14:28',
				'updated_at' => '2016-04-29 17:15:37',
			),
			114 => 
			array (
				'id' => 119,
				'nome' => 'PPC | Atividades',
				'hora_esforco' => 25,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-29 20:07:51',
				'updated_at' => '2016-04-29 20:07:51',
			),
			115 => 
			array (
				'id' => 120,
				'nome' => 'PPC | Emails',
				'hora_esforco' => 6,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-29 20:12:02',
				'updated_at' => '2016-04-29 20:12:02',
			),
			116 => 
			array (
				'id' => 121,
				'nome' => 'PPC | Estudos',
				'hora_esforco' => 4,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-29 20:12:34',
				'updated_at' => '2016-04-29 20:12:34',
			),
			117 => 
			array (
				'id' => 122,
				'nome' => 'PPC | Faceads',
				'hora_esforco' => 4,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-29 20:12:55',
				'updated_at' => '2016-04-29 20:12:55',
			),
			118 => 
			array (
				'id' => 123,
				'nome' => 'PPC | Gestão',
				'hora_esforco' => 15,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-29 20:13:16',
				'updated_at' => '2016-04-29 20:13:16',
			),
			119 => 
			array (
				'id' => 124,
				'nome' => 'PPC | Interno',
				'hora_esforco' => 2,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-29 20:13:43',
				'updated_at' => '2016-04-29 20:13:43',
			),
			120 => 
			array (
				'id' => 125,
				'nome' => 'PPC | Relatórios',
				'hora_esforco' => 25,
				'minuto_esforco' => 0,
				'created_at' => '2016-04-29 20:14:06',
				'updated_at' => '2016-04-29 20:14:06',
			),
		));
	}

}
