<?php

class ClientesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('clientes')->delete();
        
		\DB::table('clientes')->insert(array (
			0 => 
			array (
				'id' => 17,
				'nome' => 'Bodebrown',
				'created_at' => '2016-04-18 20:40:27',
				'updated_at' => '2016-04-18 20:40:27',
			),
			1 => 
			array (
				'id' => 18,
				'nome' => 'Via Cometa',
				'created_at' => '2016-04-19 13:37:42',
				'updated_at' => '2016-04-19 13:37:42',
			),
			2 => 
			array (
				'id' => 19,
				'nome' => 'BlueFoot | Agência',
				'created_at' => '2016-04-19 13:49:11',
				'updated_at' => '2016-04-19 13:49:11',
			),
			3 => 
			array (
				'id' => 20,
				'nome' => 'BlueFoot | E-mail Marketing',
				'created_at' => '2016-04-19 13:50:59',
				'updated_at' => '2016-04-19 13:50:59',
			),
			4 => 
			array (
				'id' => 21,
				'nome' => 'BlueFoot | Imboud',
				'created_at' => '2016-04-19 13:51:26',
				'updated_at' => '2016-04-19 13:51:26',
			),
			5 => 
			array (
				'id' => 23,
				'nome' => 'BlueFoot | Links Patrocinados',
				'created_at' => '2016-04-19 13:52:13',
				'updated_at' => '2016-04-19 13:52:13',
			),
			6 => 
			array (
				'id' => 24,
				'nome' => 'BlueFoot | Social Media',
				'created_at' => '2016-04-19 13:52:31',
				'updated_at' => '2016-04-19 13:52:31',
			),
			7 => 
			array (
				'id' => 25,
				'nome' => 'BlueFoot | SEO',
				'created_at' => '2016-04-19 13:52:48',
				'updated_at' => '2016-04-19 13:52:48',
			),
			8 => 
			array (
				'id' => 26,
				'nome' => 'BlueFoot | Plataforma',
				'created_at' => '2016-04-19 13:53:12',
				'updated_at' => '2016-04-19 13:53:12',
			),
			9 => 
			array (
				'id' => 27,
				'nome' => 'BlueFoot | Criação',
				'created_at' => '2016-04-19 13:53:30',
				'updated_at' => '2016-04-19 13:53:30',
			),
			10 => 
			array (
				'id' => 28,
				'nome' => 'A Casa da Mãe Joana',
				'created_at' => '2016-04-19 14:39:51',
				'updated_at' => '2016-04-19 14:39:51',
			),
			11 => 
			array (
				'id' => 30,
				'nome' => 'Academia Corpus',
				'created_at' => '2016-04-19 14:40:28',
				'updated_at' => '2016-04-19 14:40:28',
			),
			12 => 
			array (
				'id' => 31,
				'nome' => 'Acessório Motos',
				'created_at' => '2016-04-19 14:40:52',
				'updated_at' => '2016-04-19 14:40:52',
			),
			13 => 
			array (
				'id' => 32,
				'nome' => 'ACOM',
				'created_at' => '2016-04-19 14:41:03',
				'updated_at' => '2016-04-19 14:41:03',
			),
			14 => 
			array (
				'id' => 34,
				'nome' => 'Adega Mufs',
				'created_at' => '2016-04-19 14:41:15',
				'updated_at' => '2016-04-19 14:41:15',
			),
			15 => 
			array (
				'id' => 35,
				'nome' => 'Agro Souza',
				'created_at' => '2016-04-19 14:41:28',
				'updated_at' => '2016-04-19 14:41:28',
			),
			16 => 
			array (
				'id' => 36,
				'nome' => 'Águia Sistemas',
				'created_at' => '2016-04-19 14:41:49',
				'updated_at' => '2016-04-19 14:42:00',
			),
			17 => 
			array (
				'id' => 37,
				'nome' => 'Aliança Empreendedora',
				'created_at' => '2016-04-19 14:42:56',
				'updated_at' => '2016-04-19 14:42:56',
			),
			18 => 
			array (
				'id' => 38,
				'nome' => 'AM Ambientes',
				'created_at' => '2016-04-19 14:43:11',
				'updated_at' => '2016-04-19 14:43:11',
			),
			19 => 
			array (
				'id' => 40,
				'nome' => 'Amantes da Trilha',
				'created_at' => '2016-04-19 14:43:25',
				'updated_at' => '2016-04-19 14:43:25',
			),
			20 => 
			array (
				'id' => 41,
				'nome' => 'America Maquinas',
				'created_at' => '2016-04-19 14:43:36',
				'updated_at' => '2016-04-19 14:43:36',
			),
			21 => 
			array (
				'id' => 42,
				'nome' => 'Amplo Logística',
				'created_at' => '2016-04-19 14:43:49',
				'updated_at' => '2016-04-19 14:43:49',
			),
			22 => 
			array (
				'id' => 43,
				'nome' => 'Anima Festas',
				'created_at' => '2016-04-19 14:44:00',
				'updated_at' => '2016-04-19 14:44:00',
			),
			23 => 
			array (
				'id' => 44,
				'nome' => 'Anne Felber',
				'created_at' => '2016-04-19 14:44:11',
				'updated_at' => '2016-04-19 14:44:11',
			),
			24 => 
			array (
				'id' => 45,
				'nome' => 'Apolar',
				'created_at' => '2016-04-19 14:44:26',
				'updated_at' => '2016-04-19 14:44:26',
			),
			25 => 
			array (
				'id' => 46,
				'nome' => 'Arte do Reino',
				'created_at' => '2016-04-19 14:44:43',
				'updated_at' => '2016-04-19 14:44:43',
			),
			26 => 
			array (
				'id' => 47,
				'nome' => 'Atletiba Store',
				'created_at' => '2016-04-19 14:44:58',
				'updated_at' => '2016-04-19 14:44:58',
			),
			27 => 
			array (
				'id' => 48,
				'nome' => 'Automessa',
				'created_at' => '2016-04-19 14:45:13',
				'updated_at' => '2016-04-19 14:45:13',
			),
			28 => 
			array (
				'id' => 49,
				'nome' => 'BackWash',
				'created_at' => '2016-04-19 14:45:29',
				'updated_at' => '2016-04-19 14:45:29',
			),
			29 => 
			array (
				'id' => 50,
				'nome' => 'BC Med',
				'created_at' => '2016-04-19 14:45:41',
				'updated_at' => '2016-04-19 14:45:41',
			),
			30 => 
			array (
				'id' => 51,
				'nome' => 'Be Little',
				'created_at' => '2016-04-19 14:45:56',
				'updated_at' => '2016-04-19 14:45:56',
			),
			31 => 
			array (
				'id' => 52,
				'nome' => 'Best Defense',
				'created_at' => '2016-04-19 14:46:11',
				'updated_at' => '2016-04-19 14:46:11',
			),
			32 => 
			array (
				'id' => 53,
				'nome' => 'Bistrô da Beleza',
				'created_at' => '2016-04-19 14:46:26',
				'updated_at' => '2016-04-19 14:46:26',
			),
			33 => 
			array (
				'id' => 54,
				'nome' => 'Black Ball',
				'created_at' => '2016-04-19 14:46:39',
				'updated_at' => '2016-04-19 14:46:39',
			),
			34 => 
			array (
				'id' => 55,
				'nome' => 'BlueFoot | Comercial',
				'created_at' => '2016-04-19 14:46:58',
				'updated_at' => '2016-04-19 14:46:58',
			),
			35 => 
			array (
				'id' => 56,
			'nome' => 'BNE (Banco Nacional de Empregos)',
				'created_at' => '2016-04-19 14:47:20',
				'updated_at' => '2016-04-19 14:47:20',
			),
			36 => 
			array (
				'id' => 57,
			'nome' => 'BNE (Banco Nacional de Empregos)',
				'created_at' => '2016-04-19 14:47:20',
				'updated_at' => '2016-04-19 14:47:20',
			),
			37 => 
			array (
				'id' => 58,
				'nome' => 'Brasil Brokers',
				'created_at' => '2016-04-19 14:47:36',
				'updated_at' => '2016-04-19 14:47:36',
			),
			38 => 
			array (
				'id' => 59,
				'nome' => 'Brazilian Experience',
				'created_at' => '2016-04-19 14:47:51',
				'updated_at' => '2016-04-19 14:47:51',
			),
			39 => 
			array (
				'id' => 60,
				'nome' => 'Brookfield',
				'created_at' => '2016-04-19 14:48:04',
				'updated_at' => '2016-04-19 14:48:04',
			),
			40 => 
			array (
				'id' => 61,
				'nome' => 'Bula Verdde',
				'created_at' => '2016-04-19 14:50:12',
				'updated_at' => '2016-04-19 14:50:12',
			),
			41 => 
			array (
				'id' => 62,
				'nome' => 'Business Village',
				'created_at' => '2016-04-19 14:50:34',
				'updated_at' => '2016-04-19 14:50:34',
			),
			42 => 
			array (
				'id' => 63,
				'nome' => 'BWT Operadora',
				'created_at' => '2016-04-19 14:50:45',
				'updated_at' => '2016-04-19 14:50:45',
			),
			43 => 
			array (
				'id' => 64,
				'nome' => 'Cabelos Online',
				'created_at' => '2016-04-19 14:50:56',
				'updated_at' => '2016-04-19 14:50:56',
			),
			44 => 
			array (
				'id' => 65,
				'nome' => 'Cabral Motor',
				'created_at' => '2016-04-19 14:51:08',
				'updated_at' => '2016-04-19 14:51:08',
			),
			45 => 
			array (
				'id' => 66,
				'nome' => 'Cardiomed',
				'created_at' => '2016-04-19 14:51:22',
				'updated_at' => '2016-04-19 14:51:22',
			),
			46 => 
			array (
				'id' => 67,
				'nome' => 'Casa Ideal',
				'created_at' => '2016-04-19 14:51:35',
				'updated_at' => '2016-04-19 14:51:35',
			),
			47 => 
			array (
				'id' => 68,
				'nome' => 'Casas e Deck',
				'created_at' => '2016-04-19 14:51:48',
				'updated_at' => '2016-04-19 14:51:48',
			),
			48 => 
			array (
				'id' => 69,
				'nome' => 'Chaves na Mão',
				'created_at' => '2016-04-19 14:51:59',
				'updated_at' => '2016-04-19 14:51:59',
			),
			49 => 
			array (
				'id' => 70,
				'nome' => 'Cirandinha Calçados',
				'created_at' => '2016-04-19 14:52:13',
				'updated_at' => '2016-04-19 14:52:13',
			),
			50 => 
			array (
				'id' => 71,
				'nome' => 'Click Chique',
				'created_at' => '2016-04-19 14:52:25',
				'updated_at' => '2016-04-19 14:52:25',
			),
			51 => 
			array (
				'id' => 72,
				'nome' => 'Click Secreto',
				'created_at' => '2016-04-19 14:52:38',
				'updated_at' => '2016-04-19 14:52:38',
			),
			52 => 
			array (
				'id' => 73,
				'nome' => 'Click Secreto',
				'created_at' => '2016-04-19 14:52:38',
				'updated_at' => '2016-04-19 14:52:38',
			),
			53 => 
			array (
				'id' => 74,
				'nome' => 'Clínica Leônidas Araújo',
				'created_at' => '2016-04-19 14:52:51',
				'updated_at' => '2016-04-19 14:52:51',
			),
			54 => 
			array (
				'id' => 75,
				'nome' => 'Clinipam',
				'created_at' => '2016-04-19 14:53:03',
				'updated_at' => '2016-04-19 14:53:03',
			),
			55 => 
			array (
				'id' => 76,
				'nome' => 'Clinipam',
				'created_at' => '2016-04-19 14:53:03',
				'updated_at' => '2016-04-19 14:53:03',
			),
			56 => 
			array (
				'id' => 77,
				'nome' => 'Clube do Malte',
				'created_at' => '2016-04-19 14:53:18',
				'updated_at' => '2016-04-19 14:53:18',
			),
			57 => 
			array (
				'id' => 78,
				'nome' => 'Clube do Malte',
				'created_at' => '2016-04-19 14:53:18',
				'updated_at' => '2016-04-19 14:53:18',
			),
			58 => 
			array (
				'id' => 79,
				'nome' => 'Construtora Baggio',
				'created_at' => '2016-04-19 14:53:37',
				'updated_at' => '2016-04-19 14:53:37',
			),
			59 => 
			array (
				'id' => 80,
				'nome' => 'Copy City',
				'created_at' => '2016-04-19 14:53:51',
				'updated_at' => '2016-04-19 14:53:51',
			),
			60 => 
			array (
				'id' => 81,
				'nome' => 'Coza',
				'created_at' => '2016-04-19 14:54:04',
				'updated_at' => '2016-04-19 14:54:04',
			),
			61 => 
			array (
				'id' => 82,
				'nome' => 'CR Segurança',
				'created_at' => '2016-04-19 14:54:20',
				'updated_at' => '2016-04-19 14:54:20',
			),
			62 => 
			array (
				'id' => 83,
				'nome' => 'Dasti Soluções',
				'created_at' => '2016-04-19 14:54:36',
				'updated_at' => '2016-04-19 14:54:36',
			),
			63 => 
			array (
				'id' => 84,
				'nome' => 'De Veer Coaching',
				'created_at' => '2016-04-19 18:16:50',
				'updated_at' => '2016-04-19 18:16:50',
			),
			64 => 
			array (
				'id' => 85,
				'nome' => 'DeCarpetts',
				'created_at' => '2016-04-19 18:17:02',
				'updated_at' => '2016-04-19 18:17:02',
			),
			65 => 
			array (
				'id' => 86,
				'nome' => 'Decore Comigo',
				'created_at' => '2016-04-19 18:17:14',
				'updated_at' => '2016-04-19 18:17:14',
			),
			66 => 
			array (
				'id' => 87,
				'nome' => 'Dinamac',
				'created_at' => '2016-04-19 18:17:30',
				'updated_at' => '2016-04-19 18:17:30',
			),
			67 => 
			array (
				'id' => 88,
				'nome' => 'Do Vale Turismo',
				'created_at' => '2016-04-19 18:17:45',
				'updated_at' => '2016-04-19 18:17:45',
			),
			68 => 
			array (
				'id' => 89,
				'nome' => 'Dromm',
				'created_at' => '2016-04-19 18:18:05',
				'updated_at' => '2016-04-19 18:18:05',
			),
			69 => 
			array (
				'id' => 90,
				'nome' => 'Dtcom',
				'created_at' => '2016-04-19 18:18:16',
				'updated_at' => '2016-04-19 18:18:16',
			),
			70 => 
			array (
				'id' => 91,
				'nome' => 'É Bom de Comprar',
				'created_at' => '2016-04-19 18:18:27',
				'updated_at' => '2016-04-19 18:18:27',
			),
			71 => 
			array (
				'id' => 92,
				'nome' => 'EC-Coaching',
				'created_at' => '2016-04-19 18:18:40',
				'updated_at' => '2016-04-19 18:18:40',
			),
			72 => 
			array (
				'id' => 93,
				'nome' => 'Eduardo Reiner',
				'created_at' => '2016-04-19 18:18:53',
				'updated_at' => '2016-04-19 18:18:53',
			),
			73 => 
			array (
				'id' => 94,
				'nome' => 'Escriba',
				'created_at' => '2016-04-19 18:19:05',
				'updated_at' => '2016-04-19 18:19:05',
			),
			74 => 
			array (
				'id' => 95,
				'nome' => 'Espaço Hair',
				'created_at' => '2016-04-19 18:19:18',
				'updated_at' => '2016-04-19 18:19:18',
			),
			75 => 
			array (
				'id' => 96,
				'nome' => 'Exal Alimentação',
				'created_at' => '2016-04-19 18:19:34',
				'updated_at' => '2016-04-19 18:19:34',
			),
			76 => 
			array (
				'id' => 97,
				'nome' => 'Fairmont',
				'created_at' => '2016-04-19 18:19:45',
				'updated_at' => '2016-04-19 18:19:45',
			),
			77 => 
			array (
				'id' => 98,
				'nome' => 'Ferramentas Direto',
				'created_at' => '2016-04-19 18:20:03',
				'updated_at' => '2016-04-19 18:20:03',
			),
			78 => 
			array (
				'id' => 99,
				'nome' => 'Festa Shop',
				'created_at' => '2016-04-19 18:20:15',
				'updated_at' => '2016-04-19 18:20:15',
			),
			79 => 
			array (
				'id' => 100,
				'nome' => 'FN Capital',
				'created_at' => '2016-04-19 18:20:28',
				'updated_at' => '2016-04-19 18:20:28',
			),
			80 => 
			array (
				'id' => 101,
				'nome' => 'Frias Neto',
				'created_at' => '2016-04-19 18:20:40',
				'updated_at' => '2016-04-19 18:20:40',
			),
			81 => 
			array (
				'id' => 102,
				'nome' => 'Fujioka',
				'created_at' => '2016-04-19 18:20:57',
				'updated_at' => '2016-04-19 18:20:57',
			),
			82 => 
			array (
				'id' => 103,
				'nome' => 'Futura Saúde',
				'created_at' => '2016-04-19 18:21:11',
				'updated_at' => '2016-04-19 18:21:11',
			),
			83 => 
			array (
				'id' => 105,
				'nome' => 'Gold Body',
				'created_at' => '2016-04-19 18:21:35',
				'updated_at' => '2016-04-19 18:21:35',
			),
			84 => 
			array (
				'id' => 106,
				'nome' => 'Grupo Barigui',
				'created_at' => '2016-04-19 18:22:01',
				'updated_at' => '2016-04-19 18:22:01',
			),
			85 => 
			array (
				'id' => 107,
				'nome' => 'Grupo Barigui',
				'created_at' => '2016-04-19 18:22:12',
				'updated_at' => '2016-04-19 18:22:12',
			),
			86 => 
			array (
				'id' => 108,
			'nome' => 'Grupo Fitta (Curitiba)',
				'created_at' => '2016-04-19 18:35:48',
				'updated_at' => '2016-04-19 18:35:48',
			),
			87 => 
			array (
				'id' => 109,
			'nome' => 'Grupo Fitta (Maringá)',
				'created_at' => '2016-04-19 18:35:57',
				'updated_at' => '2016-04-19 18:35:57',
			),
			88 => 
			array (
				'id' => 110,
				'nome' => 'GT7 Parts',
				'created_at' => '2016-04-19 18:36:08',
				'updated_at' => '2016-04-19 18:36:08',
			),
			89 => 
			array (
				'id' => 111,
				'nome' => 'HD Store',
				'created_at' => '2016-04-19 18:36:22',
				'updated_at' => '2016-04-19 18:36:22',
			),
			90 => 
			array (
				'id' => 112,
				'nome' => 'Hobby Pesca',
				'created_at' => '2016-04-19 18:36:31',
				'updated_at' => '2016-04-19 18:36:31',
			),
			91 => 
			array (
				'id' => 113,
				'nome' => 'Hospinet',
				'created_at' => '2016-04-19 18:36:40',
				'updated_at' => '2016-04-19 18:36:40',
			),
			92 => 
			array (
				'id' => 114,
				'nome' => 'HS Floresta e Jardim',
				'created_at' => '2016-04-19 18:36:49',
				'updated_at' => '2016-04-19 18:36:49',
			),
			93 => 
			array (
				'id' => 115,
				'nome' => 'I-Cosméticos',
				'created_at' => '2016-04-19 18:36:58',
				'updated_at' => '2016-04-19 18:36:58',
			),
			94 => 
			array (
				'id' => 116,
				'nome' => 'Indicpilar',
				'created_at' => '2016-04-19 18:37:09',
				'updated_at' => '2016-04-19 18:37:09',
			),
			95 => 
			array (
				'id' => 117,
				'nome' => 'Innovine',
				'created_at' => '2016-04-19 18:37:16',
				'updated_at' => '2016-04-19 18:37:16',
			),
			96 => 
			array (
				'id' => 118,
				'nome' => 'Inventi',
				'created_at' => '2016-04-19 18:37:24',
				'updated_at' => '2016-04-19 18:37:24',
			),
			97 => 
			array (
				'id' => 119,
				'nome' => 'Iukesu Persianas',
				'created_at' => '2016-04-19 18:37:31',
				'updated_at' => '2016-04-19 18:37:31',
			),
			98 => 
			array (
				'id' => 120,
				'nome' => 'JACP',
				'created_at' => '2016-04-19 18:37:42',
				'updated_at' => '2016-04-19 18:37:42',
			),
			99 => 
			array (
				'id' => 121,
				'nome' => 'Jarva Racing',
				'created_at' => '2016-04-19 18:37:49',
				'updated_at' => '2016-04-19 18:37:49',
			),
			100 => 
			array (
				'id' => 122,
				'nome' => 'JB Esportes',
				'created_at' => '2016-04-19 18:38:01',
				'updated_at' => '2016-04-19 18:38:01',
			),
			101 => 
			array (
				'id' => 123,
				'nome' => 'JMalucelli',
				'created_at' => '2016-04-19 18:38:16',
				'updated_at' => '2016-04-19 18:38:16',
			),
			102 => 
			array (
				'id' => 124,
				'nome' => 'Jo Musical',
				'created_at' => '2016-04-19 18:38:24',
				'updated_at' => '2016-04-19 18:38:24',
			),
			103 => 
			array (
				'id' => 125,
				'nome' => 'Joalheria Ouro Prata',
				'created_at' => '2016-04-19 18:38:31',
				'updated_at' => '2016-04-19 18:38:31',
			),
			104 => 
			array (
				'id' => 126,
				'nome' => 'Jujubeira',
				'created_at' => '2016-04-19 18:38:38',
				'updated_at' => '2016-04-19 18:38:38',
			),
			105 => 
			array (
				'id' => 127,
				'nome' => 'Kareka\'s',
				'created_at' => '2016-04-19 18:38:44',
				'updated_at' => '2016-04-19 18:38:44',
			),
			106 => 
			array (
				'id' => 128,
				'nome' => 'Kasvi',
				'created_at' => '2016-04-19 18:38:52',
				'updated_at' => '2016-04-19 18:38:52',
			),
			107 => 
			array (
				'id' => 129,
				'nome' => 'Kitanda',
				'created_at' => '2016-04-19 18:38:58',
				'updated_at' => '2016-04-19 18:38:58',
			),
			108 => 
			array (
				'id' => 130,
				'nome' => 'Kone Textil',
				'created_at' => '2016-04-19 18:39:05',
				'updated_at' => '2016-04-19 18:39:05',
			),
			109 => 
			array (
				'id' => 131,
				'nome' => 'Kradak',
				'created_at' => '2016-04-19 18:39:12',
				'updated_at' => '2016-04-19 18:39:12',
			),
			110 => 
			array (
				'id' => 132,
				'nome' => 'Lefine',
				'created_at' => '2016-04-19 18:39:18',
				'updated_at' => '2016-04-19 18:39:18',
			),
			111 => 
			array (
				'id' => 133,
				'nome' => 'Liber Mundo',
				'created_at' => '2016-04-19 18:39:26',
				'updated_at' => '2016-04-19 18:39:26',
			),
			112 => 
			array (
				'id' => 134,
				'nome' => 'Lima Hobbies',
				'created_at' => '2016-04-19 18:39:32',
				'updated_at' => '2016-04-19 18:39:41',
			),
			113 => 
			array (
				'id' => 135,
				'nome' => 'Lincoln Jóias',
				'created_at' => '2016-04-19 18:39:51',
				'updated_at' => '2016-04-19 18:39:51',
			),
			114 => 
			array (
				'id' => 136,
				'nome' => 'Livraria Florence',
				'created_at' => '2016-04-19 18:39:59',
				'updated_at' => '2016-04-19 18:39:59',
			),
			115 => 
			array (
				'id' => 137,
				'nome' => 'Livraria Vanguarda',
				'created_at' => '2016-04-19 18:40:09',
				'updated_at' => '2016-04-19 18:40:09',
			),
			116 => 
			array (
				'id' => 138,
				'nome' => 'Livre e Leve',
				'created_at' => '2016-04-19 18:40:17',
				'updated_at' => '2016-04-19 18:40:17',
			),
			117 => 
			array (
				'id' => 139,
				'nome' => 'Loja CWB',
				'created_at' => '2016-04-19 18:40:25',
				'updated_at' => '2016-04-19 18:40:25',
			),
			118 => 
			array (
				'id' => 140,
				'nome' => 'Loja Fácil',
				'created_at' => '2016-04-19 18:40:34',
				'updated_at' => '2016-04-19 18:40:34',
			),
			119 => 
			array (
				'id' => 141,
				'nome' => 'Loja Virus',
				'created_at' => '2016-04-19 18:40:40',
				'updated_at' => '2016-04-19 18:40:40',
			),
			120 => 
			array (
				'id' => 142,
				'nome' => 'Lojas Mega 10',
				'created_at' => '2016-04-19 18:40:50',
				'updated_at' => '2016-04-19 18:40:50',
			),
			121 => 
			array (
				'id' => 143,
				'nome' => 'Lojas Paralelas',
				'created_at' => '2016-04-19 18:40:58',
				'updated_at' => '2016-04-19 18:40:58',
			),
			122 => 
			array (
				'id' => 144,
				'nome' => 'Lojas Paullista',
				'created_at' => '2016-04-19 18:41:05',
				'updated_at' => '2016-04-19 18:41:05',
			),
			123 => 
			array (
				'id' => 145,
				'nome' => 'Lojas Roth',
				'created_at' => '2016-04-19 18:41:13',
				'updated_at' => '2016-04-19 18:41:13',
			),
			124 => 
			array (
				'id' => 146,
				'nome' => 'Lonas Kone',
				'created_at' => '2016-04-19 18:41:20',
				'updated_at' => '2016-04-19 18:41:20',
			),
			125 => 
			array (
				'id' => 147,
				'nome' => 'Look Móveis',
				'created_at' => '2016-04-19 18:41:27',
				'updated_at' => '2016-04-19 18:41:27',
			),
			126 => 
			array (
				'id' => 148,
				'nome' => 'Lua Cris',
				'created_at' => '2016-04-19 18:41:34',
				'updated_at' => '2016-04-19 18:41:34',
			),
			127 => 
			array (
				'id' => 150,
				'nome' => 'Lulean Jóias',
				'created_at' => '2016-04-19 18:41:52',
				'updated_at' => '2016-04-19 18:41:52',
			),
			128 => 
			array (
				'id' => 151,
				'nome' => 'Luxe4Home',
				'created_at' => '2016-04-19 18:42:02',
				'updated_at' => '2016-04-19 18:42:02',
			),
			129 => 
			array (
				'id' => 152,
				'nome' => 'M. Vest',
				'created_at' => '2016-04-26 13:59:41',
				'updated_at' => '2016-04-26 13:59:41',
			),
			130 => 
			array (
				'id' => 153,
				'nome' => 'Makro Equipamentos',
				'created_at' => '2016-04-26 14:00:17',
				'updated_at' => '2016-04-26 14:00:17',
			),
			131 => 
			array (
				'id' => 154,
				'nome' => 'Malharia Oceânica',
				'created_at' => '2016-04-26 14:01:14',
				'updated_at' => '2016-04-26 14:01:14',
			),
			132 => 
			array (
				'id' => 155,
				'nome' => 'Marcela',
				'created_at' => '2016-04-26 14:01:29',
				'updated_at' => '2016-04-26 14:01:29',
			),
			133 => 
			array (
				'id' => 156,
				'nome' => 'Marcol',
				'created_at' => '2016-04-26 14:01:58',
				'updated_at' => '2016-04-26 14:01:58',
			),
			134 => 
			array (
				'id' => 157,
				'nome' => 'Marmoraria Vardânega',
				'created_at' => '2016-04-26 14:02:09',
				'updated_at' => '2016-04-26 14:02:09',
			),
			135 => 
			array (
				'id' => 158,
				'nome' => 'MAX Parts',
				'created_at' => '2016-04-26 14:12:38',
				'updated_at' => '2016-04-26 14:12:38',
			),
			136 => 
			array (
				'id' => 159,
				'nome' => 'MazzaShop',
				'created_at' => '2016-04-26 14:12:51',
				'updated_at' => '2016-04-26 14:12:51',
			),
			137 => 
			array (
				'id' => 160,
				'nome' => 'Medic Store',
				'created_at' => '2016-04-26 14:13:05',
				'updated_at' => '2016-04-26 14:13:05',
			),
			138 => 
			array (
				'id' => 161,
				'nome' => 'Mega Empório',
				'created_at' => '2016-04-26 14:13:16',
				'updated_at' => '2016-04-26 14:13:16',
			),
			139 => 
			array (
				'id' => 162,
				'nome' => 'Mister Festas',
				'created_at' => '2016-04-26 14:13:52',
				'updated_at' => '2016-04-26 14:13:52',
			),
			140 => 
			array (
				'id' => 163,
				'nome' => 'Morô?',
				'created_at' => '2016-04-26 14:14:28',
				'updated_at' => '2016-04-26 14:14:28',
			),
			141 => 
			array (
				'id' => 164,
				'nome' => 'Morô?',
				'created_at' => '2016-04-26 14:15:48',
				'updated_at' => '2016-04-26 14:15:48',
			),
			142 => 
			array (
				'id' => 165,
				'nome' => 'Móveis G DeDu',
				'created_at' => '2016-04-26 14:16:00',
				'updated_at' => '2016-04-26 14:16:00',
			),
			143 => 
			array (
				'id' => 166,
				'nome' => 'Móvel da Fábrica',
				'created_at' => '2016-04-26 14:16:15',
				'updated_at' => '2016-04-26 14:16:15',
			),
			144 => 
			array (
				'id' => 167,
				'nome' => 'Mundiali',
				'created_at' => '2016-04-26 14:16:26',
				'updated_at' => '2016-04-26 14:16:26',
			),
			145 => 
			array (
				'id' => 168,
				'nome' => 'Mundo Aroma',
				'created_at' => '2016-04-26 14:16:40',
				'updated_at' => '2016-04-26 14:16:40',
			),
			146 => 
			array (
				'id' => 169,
				'nome' => 'MX Bikes',
				'created_at' => '2016-04-26 14:16:49',
				'updated_at' => '2016-04-26 14:16:49',
			),
			147 => 
			array (
				'id' => 171,
				'nome' => 'Myrp',
				'created_at' => '2016-04-26 14:17:14',
				'updated_at' => '2016-04-26 14:17:14',
			),
			148 => 
			array (
				'id' => 172,
				'nome' => 'New Nutrition',
				'created_at' => '2016-04-26 14:17:27',
				'updated_at' => '2016-04-26 14:17:27',
			),
			149 => 
			array (
				'id' => 173,
				'nome' => 'Nobiltá',
				'created_at' => '2016-04-26 14:17:40',
				'updated_at' => '2016-04-26 14:17:40',
			),
			150 => 
			array (
				'id' => 174,
				'nome' => 'Núcleo Receptivo',
				'created_at' => '2016-04-26 14:17:52',
				'updated_at' => '2016-04-26 14:17:52',
			),
			151 => 
			array (
				'id' => 175,
				'nome' => 'Nutribrands',
				'created_at' => '2016-04-26 14:18:03',
				'updated_at' => '2016-04-26 14:18:03',
			),
			152 => 
			array (
				'id' => 176,
				'nome' => 'NYX Cosméticos',
				'created_at' => '2016-04-26 14:18:14',
				'updated_at' => '2016-04-26 14:18:14',
			),
			153 => 
			array (
				'id' => 177,
				'nome' => 'O Lenhador',
				'created_at' => '2016-04-26 14:18:25',
				'updated_at' => '2016-04-26 14:18:25',
			),
			154 => 
			array (
				'id' => 178,
				'nome' => 'O sapo e a princesa',
				'created_at' => '2016-04-26 14:18:39',
				'updated_at' => '2016-04-26 14:18:39',
			),
			155 => 
			array (
				'id' => 179,
				'nome' => 'Okanê Decoração',
				'created_at' => '2016-04-26 14:18:48',
				'updated_at' => '2016-04-26 14:18:48',
			),
			156 => 
			array (
				'id' => 180,
				'nome' => 'Oxigem',
				'created_at' => '2016-04-26 14:18:56',
				'updated_at' => '2016-04-26 14:18:56',
			),
			157 => 
			array (
				'id' => 182,
				'nome' => 'Paulinho Motos',
				'created_at' => '2016-04-26 14:19:30',
				'updated_at' => '2016-04-26 14:19:30',
			),
			158 => 
			array (
				'id' => 183,
				'nome' => 'Permution',
				'created_at' => '2016-04-26 14:19:47',
				'updated_at' => '2016-04-26 14:19:47',
			),
			159 => 
			array (
				'id' => 184,
				'nome' => 'Phoenix Studio',
				'created_at' => '2016-04-26 14:19:54',
				'updated_at' => '2016-04-26 14:19:54',
			),
			160 => 
			array (
				'id' => 185,
				'nome' => 'Playboy',
				'created_at' => '2016-04-26 14:20:18',
				'updated_at' => '2016-04-26 14:20:18',
			),
			161 => 
			array (
				'id' => 186,
				'nome' => 'Plug &Play',
				'created_at' => '2016-04-26 14:20:28',
				'updated_at' => '2016-04-26 14:20:28',
			),
			162 => 
			array (
				'id' => 187,
				'nome' => 'Pneutek',
				'created_at' => '2016-04-26 14:20:57',
				'updated_at' => '2016-04-26 14:20:57',
			),
			163 => 
			array (
				'id' => 188,
				'nome' => 'Polário',
				'created_at' => '2016-04-26 14:25:34',
				'updated_at' => '2016-04-26 14:25:34',
			),
			164 => 
			array (
				'id' => 189,
				'nome' => 'Ponto da Porcelana',
				'created_at' => '2016-04-26 14:25:43',
				'updated_at' => '2016-04-26 14:25:43',
			),
			165 => 
			array (
				'id' => 190,
				'nome' => 'Porcelana Schmidt',
				'created_at' => '2016-04-26 14:25:55',
				'updated_at' => '2016-04-26 14:25:55',
			),
			166 => 
			array (
				'id' => 191,
				'nome' => 'Privilege Investimentos',
				'created_at' => '2016-04-26 14:26:02',
				'updated_at' => '2016-04-26 14:26:02',
			),
			167 => 
			array (
				'id' => 192,
				'nome' => 'Punkt',
				'created_at' => '2016-04-26 14:26:18',
				'updated_at' => '2016-04-26 14:26:18',
			),
			168 => 
			array (
				'id' => 193,
				'nome' => 'Raphael Mestres',
				'created_at' => '2016-04-26 14:26:29',
				'updated_at' => '2016-04-26 14:26:29',
			),
			169 => 
			array (
				'id' => 194,
				'nome' => 'RI São Carlos',
				'created_at' => '2016-04-26 14:26:39',
				'updated_at' => '2016-04-26 14:26:39',
			),
			170 => 
			array (
				'id' => 195,
				'nome' => 'Ricsen',
				'created_at' => '2016-04-26 14:26:49',
				'updated_at' => '2016-04-26 14:26:49',
			),
			171 => 
			array (
				'id' => 196,
				'nome' => 'RikWil',
				'created_at' => '2016-04-26 14:27:07',
				'updated_at' => '2016-04-26 14:27:07',
			),
			172 => 
			array (
				'id' => 197,
				'nome' => 'Rotoplast',
				'created_at' => '2016-04-26 14:27:17',
				'updated_at' => '2016-04-26 14:27:17',
			),
			173 => 
			array (
				'id' => 198,
				'nome' => 'Roupas Atacado',
				'created_at' => '2016-04-26 14:27:27',
				'updated_at' => '2016-04-26 14:27:27',
			),
			174 => 
			array (
				'id' => 199,
				'nome' => 'Sage',
				'created_at' => '2016-04-26 14:27:38',
				'updated_at' => '2016-04-26 14:27:38',
			),
			175 => 
			array (
				'id' => 200,
				'nome' => 'Schmidt Campo Largo',
				'created_at' => '2016-04-26 14:27:58',
				'updated_at' => '2016-04-26 14:27:58',
			),
			176 => 
			array (
				'id' => 201,
				'nome' => 'Schmidt Londrina',
				'created_at' => '2016-04-26 14:28:11',
				'updated_at' => '2016-04-26 14:28:11',
			),
			177 => 
			array (
				'id' => 202,
				'nome' => 'Selaria Dias',
				'created_at' => '2016-04-26 14:28:19',
				'updated_at' => '2016-04-26 14:28:19',
			),
			178 => 
			array (
				'id' => 203,
				'nome' => 'Serra Verde Express',
				'created_at' => '2016-04-26 14:28:27',
				'updated_at' => '2016-04-26 14:28:27',
			),
			179 => 
			array (
				'id' => 204,
				'nome' => 'Snook Shop',
				'created_at' => '2016-04-26 14:28:42',
				'updated_at' => '2016-04-26 14:28:42',
			),
			180 => 
			array (
				'id' => 205,
				'nome' => 'Só Couros',
				'created_at' => '2016-04-26 14:28:49',
				'updated_at' => '2016-04-26 14:28:49',
			),
			181 => 
			array (
				'id' => 206,
				'nome' => 'Sonails',
				'created_at' => '2016-04-26 14:29:00',
				'updated_at' => '2016-04-26 14:29:00',
			),
			182 => 
			array (
				'id' => 207,
				'nome' => 'Sonho de Cozinha',
				'created_at' => '2016-04-26 14:29:14',
				'updated_at' => '2016-04-26 14:29:14',
			),
			183 => 
			array (
				'id' => 208,
				'nome' => 'Space Adesivos',
				'created_at' => '2016-04-26 14:29:23',
				'updated_at' => '2016-04-26 14:29:23',
			),
			184 => 
			array (
				'id' => 209,
				'nome' => 'Stilla Acessórios',
				'created_at' => '2016-04-26 14:29:33',
				'updated_at' => '2016-04-26 14:29:33',
			),
			185 => 
			array (
				'id' => 210,
				'nome' => 'Studio Única',
				'created_at' => '2016-04-26 14:29:44',
				'updated_at' => '2016-04-26 14:29:44',
			),
			186 => 
			array (
				'id' => 211,
				'nome' => 'Sua Chocolateria',
				'created_at' => '2016-04-26 14:29:53',
				'updated_at' => '2016-04-26 14:29:53',
			),
			187 => 
			array (
				'id' => 212,
				'nome' => 'Sua Loja Oficial',
				'created_at' => '2016-04-26 14:30:09',
				'updated_at' => '2016-04-26 14:30:09',
			),
			188 => 
			array (
				'id' => 213,
				'nome' => 'Supimpa Calçados',
				'created_at' => '2016-04-26 14:30:16',
				'updated_at' => '2016-04-26 14:30:16',
			),
			189 => 
			array (
				'id' => 214,
				'nome' => 'Tempo de Beleza',
				'created_at' => '2016-04-26 14:30:26',
				'updated_at' => '2016-04-26 14:30:26',
			),
			190 => 
			array (
				'id' => 215,
				'nome' => 'Terra do Esporte',
				'created_at' => '2016-04-26 14:30:36',
				'updated_at' => '2016-04-26 14:30:36',
			),
			191 => 
			array (
				'id' => 216,
				'nome' => 'Tintas Verginia',
				'created_at' => '2016-04-26 14:30:47',
				'updated_at' => '2016-04-26 14:30:47',
			),
			192 => 
			array (
				'id' => 217,
				'nome' => 'Topolino',
				'created_at' => '2016-04-26 14:30:56',
				'updated_at' => '2016-04-26 14:30:56',
			),
			193 => 
			array (
				'id' => 218,
				'nome' => 'Travelmate',
				'created_at' => '2016-04-26 14:31:07',
				'updated_at' => '2016-04-26 14:31:07',
			),
			194 => 
			array (
				'id' => 219,
				'nome' => 'Tresur',
				'created_at' => '2016-04-26 14:31:23',
				'updated_at' => '2016-04-26 14:31:23',
			),
			195 => 
			array (
				'id' => 220,
				'nome' => 'Tribos e Trilhas',
				'created_at' => '2016-04-26 14:31:39',
				'updated_at' => '2016-04-26 14:31:39',
			),
			196 => 
			array (
				'id' => 221,
				'nome' => 'Ultra Dose',
				'created_at' => '2016-04-26 14:31:47',
				'updated_at' => '2016-04-26 14:31:47',
			),
			197 => 
			array (
				'id' => 222,
				'nome' => 'Uluwatu',
				'created_at' => '2016-04-26 14:31:56',
				'updated_at' => '2016-04-26 14:31:56',
			),
			198 => 
			array (
				'id' => 223,
				'nome' => 'Unigel',
				'created_at' => '2016-04-26 14:32:04',
				'updated_at' => '2016-04-26 14:32:04',
			),
			199 => 
			array (
				'id' => 225,
				'nome' => 'Vaidade Feminina',
				'created_at' => '2016-04-26 14:33:48',
				'updated_at' => '2016-04-26 14:33:48',
			),
			200 => 
			array (
				'id' => 226,
				'nome' => 'Van Rocket',
				'created_at' => '2016-04-26 14:34:02',
				'updated_at' => '2016-04-26 14:34:02',
			),
			201 => 
			array (
				'id' => 227,
				'nome' => 'Via Flex',
				'created_at' => '2016-04-26 14:34:15',
				'updated_at' => '2016-04-26 14:34:15',
			),
			202 => 
			array (
				'id' => 228,
				'nome' => 'Vino Mundi',
				'created_at' => '2016-04-26 14:37:47',
				'updated_at' => '2016-04-26 14:37:47',
			),
			203 => 
			array (
				'id' => 229,
				'nome' => 'Virtual Kar',
				'created_at' => '2016-04-26 14:37:57',
				'updated_at' => '2016-04-26 14:37:57',
			),
			204 => 
			array (
				'id' => 231,
				'nome' => 'Viva em Dieta',
				'created_at' => '2016-04-26 14:38:06',
				'updated_at' => '2016-04-26 14:38:06',
			),
			205 => 
			array (
				'id' => 232,
				'nome' => 'W2E',
				'created_at' => '2016-04-26 14:38:15',
				'updated_at' => '2016-04-26 14:38:15',
			),
			206 => 
			array (
				'id' => 233,
				'nome' => 'WDC Games',
				'created_at' => '2016-04-26 14:38:27',
				'updated_at' => '2016-04-26 14:38:27',
			),
			207 => 
			array (
				'id' => 234,
				'nome' => 'We Art',
				'created_at' => '2016-04-26 14:38:36',
				'updated_at' => '2016-04-26 14:38:36',
			),
			208 => 
			array (
				'id' => 235,
				'nome' => 'Yamato',
				'created_at' => '2016-04-26 14:38:45',
				'updated_at' => '2016-04-26 14:38:45',
			),
			209 => 
			array (
				'id' => 236,
				'nome' => 'ZNC Suplementos',
				'created_at' => '2016-04-26 14:38:57',
				'updated_at' => '2016-04-26 14:38:57',
			),
			210 => 
			array (
				'id' => 237,
				'nome' => 'Zurique Móveis',
				'created_at' => '2016-04-26 14:39:05',
				'updated_at' => '2016-04-26 14:39:05',
			),
		));
	}

}
