<?php

class TarefaAnexoTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('tarefa_anexo')->delete();
        
		\DB::table('tarefa_anexo')->insert(array (
			0 => 
			array (
				'id' => 1,
				'tarefa_id' => 13,
				'caminho' => 'uploads/tarefa/13/',
				'nome' => 'images.jpg',
				'caminho_completo' => 'uploads/tarefa/13/images.jpg',
				'created_at' => '2016-03-28 23:55:14',
				'updated_at' => '2016-03-28 23:55:14',
			),
			1 => 
			array (
				'id' => 2,
				'tarefa_id' => 13,
				'caminho' => 'uploads/tarefa/13/',
				'nome' => 'Globo_logotipo_2008.png',
				'caminho_completo' => 'uploads/tarefa/13/Globo_logotipo_2008.png',
				'created_at' => '2016-03-28 23:55:14',
				'updated_at' => '2016-03-28 23:55:14',
			),
			2 => 
			array (
				'id' => 3,
				'tarefa_id' => 14,
				'caminho' => 'uploads/tarefa/14/',
				'nome' => 'images.jpg',
				'caminho_completo' => 'uploads/tarefa/14/images.jpg',
				'created_at' => '2016-03-28 23:56:50',
				'updated_at' => '2016-03-28 23:56:50',
			),
			3 => 
			array (
				'id' => 4,
				'tarefa_id' => 14,
				'caminho' => 'uploads/tarefa/14/',
				'nome' => 'Globo_logotipo_2008.png',
				'caminho_completo' => 'uploads/tarefa/14/Globo_logotipo_2008.png',
				'created_at' => '2016-03-28 23:56:50',
				'updated_at' => '2016-03-28 23:56:50',
			),
			4 => 
			array (
				'id' => 5,
				'tarefa_id' => 15,
				'caminho' => 'uploads/tarefa/14/',
				'nome' => 'images.jpg',
				'caminho_completo' => 'uploads/tarefa/14/images.jpg',
				'created_at' => '2016-03-28 23:56:50',
				'updated_at' => '2016-03-28 23:56:50',
			),
			5 => 
			array (
				'id' => 6,
				'tarefa_id' => 15,
				'caminho' => 'uploads/tarefa/14/',
				'nome' => 'Globo_logotipo_2008.png',
				'caminho_completo' => 'uploads/tarefa/14/Globo_logotipo_2008.png',
				'created_at' => '2016-03-28 23:56:50',
				'updated_at' => '2016-03-28 23:56:50',
			),
			6 => 
			array (
				'id' => 7,
				'tarefa_id' => 14,
				'caminho' => 'uploads/tarefa/14/',
				'nome' => 'stack_overflow_book.jpg',
				'caminho_completo' => 'uploads/tarefa/14/stack_overflow_book.jpg',
				'created_at' => '2016-03-29 15:49:50',
				'updated_at' => '2016-03-29 15:49:50',
			),
			7 => 
			array (
				'id' => 8,
				'tarefa_id' => 25,
				'caminho' => 'uploads/tarefa/25/',
				'nome' => 'imagem.jpg',
				'caminho_completo' => 'uploads/tarefa/25/imagem.jpg',
				'created_at' => '2016-04-14 14:12:49',
				'updated_at' => '2016-04-14 14:12:49',
			),
			8 => 
			array (
				'id' => 9,
				'tarefa_id' => 26,
				'caminho' => 'uploads/tarefa/26/',
			'nome' => 'Pedidos 100000001 a 100005996 (1).xlsx',
			'caminho_completo' => 'uploads/tarefa/26/Pedidos 100000001 a 100005996 (1).xlsx',
				'created_at' => '2016-04-18 20:42:23',
				'updated_at' => '2016-04-18 20:42:23',
			),
			9 => 
			array (
				'id' => 10,
				'tarefa_id' => 27,
				'caminho' => 'uploads/tarefa/27/',
				'nome' => 'MANUAL WEBSERVICE - SHOP COMETA.pdf',
				'caminho_completo' => 'uploads/tarefa/27/MANUAL WEBSERVICE - SHOP COMETA.pdf',
				'created_at' => '2016-04-19 13:42:18',
				'updated_at' => '2016-04-19 13:42:18',
			),
			10 => 
			array (
				'id' => 11,
				'tarefa_id' => 32,
				'caminho' => 'uploads/tarefa/32/',
				'nome' => 'MANUAL WEBSERVICE - SHOP COMETA.pdf',
				'caminho_completo' => 'uploads/tarefa/32/MANUAL WEBSERVICE - SHOP COMETA.pdf',
				'created_at' => '2016-04-27 13:38:04',
				'updated_at' => '2016-04-27 13:38:04',
			),
			11 => 
			array (
				'id' => 12,
				'tarefa_id' => 38,
				'caminho' => 'uploads/tarefa/38/',
				'nome' => 'EM_FUT_Briefing_20160429.docx',
				'caminho_completo' => 'uploads/tarefa/38/EM_FUT_Briefing_20160429.docx',
				'created_at' => '2016-04-27 17:21:44',
				'updated_at' => '2016-04-27 17:21:44',
			),
			12 => 
			array (
				'id' => 13,
				'tarefa_id' => 39,
				'caminho' => 'uploads/tarefa/39/',
				'nome' => 'EM_LVF_Briefing Florence_20160429.docx',
				'caminho_completo' => 'uploads/tarefa/39/EM_LVF_Briefing Florence_20160429.docx',
				'created_at' => '2016-04-27 17:24:08',
				'updated_at' => '2016-04-27 17:24:08',
			),
			13 => 
			array (
				'id' => 14,
				'tarefa_id' => 40,
				'caminho' => 'uploads/tarefa/40/',
				'nome' => 'EM_LVF_Briefing Florence_20160502.docx',
				'caminho_completo' => 'uploads/tarefa/40/EM_LVF_Briefing Florence_20160502.docx',
				'created_at' => '2016-04-27 17:25:35',
				'updated_at' => '2016-04-27 17:25:35',
			),
			14 => 
			array (
				'id' => 15,
				'tarefa_id' => 41,
				'caminho' => 'uploads/tarefa/41/',
				'nome' => 'EM_LVF_Briefing Florence_20160504.docx',
				'caminho_completo' => 'uploads/tarefa/41/EM_LVF_Briefing Florence_20160504.docx',
				'created_at' => '2016-04-27 17:28:27',
				'updated_at' => '2016-04-27 17:28:27',
			),
			15 => 
			array (
				'id' => 16,
				'tarefa_id' => 42,
				'caminho' => 'uploads/tarefa/42/',
				'nome' => 'EM_PLB_Briefing_20160429.docx',
				'caminho_completo' => 'uploads/tarefa/42/EM_PLB_Briefing_20160429.docx',
				'created_at' => '2016-04-27 17:32:35',
				'updated_at' => '2016-04-27 17:32:35',
			),
			16 => 
			array (
				'id' => 17,
				'tarefa_id' => 44,
				'caminho' => 'uploads/tarefa/44/',
			'nome' => 'Carretilha Shimano Curado 201I HG (2).jpg',
			'caminho_completo' => 'uploads/tarefa/44/Carretilha Shimano Curado 201I HG (2).jpg',
				'created_at' => '2016-04-28 14:39:53',
				'updated_at' => '2016-04-28 14:39:53',
			),
			17 => 
			array (
				'id' => 18,
				'tarefa_id' => 44,
				'caminho' => 'uploads/tarefa/44/',
				'nome' => 'Isca Artificial Normandy Hydronic 70F - Cor 62068.jpg',
				'caminho_completo' => 'uploads/tarefa/44/Isca Artificial Normandy Hydronic 70F - Cor 62068.jpg',
				'created_at' => '2016-04-28 14:39:53',
				'updated_at' => '2016-04-28 14:39:53',
			),
			18 => 
			array (
				'id' => 19,
				'tarefa_id' => 44,
				'caminho' => 'uploads/tarefa/44/',
				'nome' => 'Linha Monofilamento Super Raiglon Tournament 100M - Cor Transparente.jpg',
				'caminho_completo' => 'uploads/tarefa/44/Linha Monofilamento Super Raiglon Tournament 100M - Cor Transparente.jpg',
				'created_at' => '2016-04-28 14:39:53',
				'updated_at' => '2016-04-28 14:39:53',
			),
			19 => 
			array (
				'id' => 20,
				'tarefa_id' => 44,
				'caminho' => 'uploads/tarefa/44/',
				'nome' => 'Luva Owner 9654.jpg',
				'caminho_completo' => 'uploads/tarefa/44/Luva Owner 9654.jpg',
				'created_at' => '2016-04-28 14:39:53',
				'updated_at' => '2016-04-28 14:39:53',
			),
			20 => 
			array (
				'id' => 21,
				'tarefa_id' => 44,
				'caminho' => 'uploads/tarefa/44/',
				'nome' => 'Owner II.jpg',
				'caminho_completo' => 'uploads/tarefa/44/Owner II.jpg',
				'created_at' => '2016-04-28 14:39:53',
				'updated_at' => '2016-04-28 14:39:53',
			),
			21 => 
			array (
				'id' => 22,
				'tarefa_id' => 44,
				'caminho' => 'uploads/tarefa/44/',
				'nome' => 'Shimano II.jpg',
				'caminho_completo' => 'uploads/tarefa/44/Shimano II.jpg',
				'created_at' => '2016-04-28 14:39:53',
				'updated_at' => '2016-04-28 14:39:53',
			),
			22 => 
			array (
				'id' => 23,
				'tarefa_id' => 44,
				'caminho' => 'uploads/tarefa/44/',
				'nome' => 'LOGO NORMANDY.jpg',
				'caminho_completo' => 'uploads/tarefa/44/LOGO NORMANDY.jpg',
				'created_at' => '2016-04-28 14:39:53',
				'updated_at' => '2016-04-28 14:39:53',
			),
			23 => 
			array (
				'id' => 24,
				'tarefa_id' => 44,
				'caminho' => 'uploads/tarefa/44/',
				'nome' => 'Isca Artificial Normandy Pitty 65SP - Cor 62030.jpg',
				'caminho_completo' => 'uploads/tarefa/44/Isca Artificial Normandy Pitty 65SP - Cor 62030.jpg',
				'created_at' => '2016-04-28 14:39:53',
				'updated_at' => '2016-04-28 14:39:53',
			),
			24 => 
			array (
				'id' => 25,
				'tarefa_id' => 44,
				'caminho' => 'uploads/tarefa/44/',
				'nome' => 'Isca Artificial Normandy Stream 120F - Cor 62045.jpg',
				'caminho_completo' => 'uploads/tarefa/44/Isca Artificial Normandy Stream 120F - Cor 62045.jpg',
				'created_at' => '2016-04-28 14:39:53',
				'updated_at' => '2016-04-28 14:39:53',
			),
			25 => 
			array (
				'id' => 26,
				'tarefa_id' => 45,
				'caminho' => 'uploads/tarefa/45/',
				'nome' => 'Documentação myTapp API- 2.pdf',
				'caminho_completo' => 'uploads/tarefa/45/Documentação myTapp API- 2.pdf',
				'created_at' => '2016-04-28 19:10:32',
				'updated_at' => '2016-04-28 19:10:32',
			),
			26 => 
			array (
				'id' => 27,
				'tarefa_id' => 46,
				'caminho' => 'uploads/tarefa/46/',
				'nome' => 'GE_ICO_iCosméticos_20160428_Dia das Mães.docx',
				'caminho_completo' => 'uploads/tarefa/46/GE_ICO_iCosméticos_20160428_Dia das Mães.docx',
				'created_at' => '2016-04-28 19:30:54',
				'updated_at' => '2016-04-28 19:30:54',
			),
			27 => 
			array (
				'id' => 28,
				'tarefa_id' => 53,
				'caminho' => 'uploads/tarefa/53/',
				'nome' => 'SIMULAÇÃO.psd',
				'caminho_completo' => 'uploads/tarefa/53/SIMULAÇÃO.psd',
				'created_at' => '2016-04-29 12:21:35',
				'updated_at' => '2016-04-29 12:21:35',
			),
			28 => 
			array (
				'id' => 29,
				'tarefa_id' => 53,
				'caminho' => 'uploads/tarefa/53/',
				'nome' => 'SIMULAÇÃO.jpg',
				'caminho_completo' => 'uploads/tarefa/53/SIMULAÇÃO.jpg',
				'created_at' => '2016-04-29 12:21:35',
				'updated_at' => '2016-04-29 12:21:35',
			),
			29 => 
			array (
				'id' => 30,
				'tarefa_id' => 54,
				'caminho' => 'uploads/tarefa/54/',
				'nome' => 'Briefing_Post_01_VIR.docx',
				'caminho_completo' => 'uploads/tarefa/54/Briefing_Post_01_VIR.docx',
				'created_at' => '2016-04-29 12:29:49',
				'updated_at' => '2016-04-29 12:29:49',
			),
			30 => 
			array (
				'id' => 31,
				'tarefa_id' => 55,
				'caminho' => 'uploads/tarefa/54/',
				'nome' => 'Briefing_Post_01_VIR.docx',
				'caminho_completo' => 'uploads/tarefa/54/Briefing_Post_01_VIR.docx',
				'created_at' => '2016-04-29 12:30:53',
				'updated_at' => '2016-04-29 12:30:53',
			),
			31 => 
			array (
				'id' => 32,
				'tarefa_id' => 56,
				'caminho' => 'uploads/tarefa/54/',
				'nome' => 'Briefing_Post_01_VIR.docx',
				'caminho_completo' => 'uploads/tarefa/54/Briefing_Post_01_VIR.docx',
				'created_at' => '2016-04-29 12:30:53',
				'updated_at' => '2016-04-29 12:30:53',
			),
			32 => 
			array (
				'id' => 33,
				'tarefa_id' => 57,
				'caminho' => 'uploads/tarefa/54/',
				'nome' => 'Briefing_Post_01_VIR.docx',
				'caminho_completo' => 'uploads/tarefa/54/Briefing_Post_01_VIR.docx',
				'created_at' => '2016-04-29 12:31:20',
				'updated_at' => '2016-04-29 12:31:20',
			),
			33 => 
			array (
				'id' => 34,
				'tarefa_id' => 58,
				'caminho' => 'uploads/tarefa/58/',
				'nome' => 'Briefing_Post_02_VIR.docx',
				'caminho_completo' => 'uploads/tarefa/58/Briefing_Post_02_VIR.docx',
				'created_at' => '2016-04-29 12:34:09',
				'updated_at' => '2016-04-29 12:34:09',
			),
			34 => 
			array (
				'id' => 35,
				'tarefa_id' => 59,
				'caminho' => 'uploads/tarefa/59/',
				'nome' => 'Briefing_Post_03_VIR.docx',
				'caminho_completo' => 'uploads/tarefa/59/Briefing_Post_03_VIR.docx',
				'created_at' => '2016-04-29 12:34:48',
				'updated_at' => '2016-04-29 12:34:48',
			),
			35 => 
			array (
				'id' => 36,
				'tarefa_id' => 60,
				'caminho' => 'uploads/tarefa/60/',
				'nome' => 'Briefing_Post_04_VIR.docx',
				'caminho_completo' => 'uploads/tarefa/60/Briefing_Post_04_VIR.docx',
				'created_at' => '2016-04-29 12:35:26',
				'updated_at' => '2016-04-29 12:35:26',
			),
			36 => 
			array (
				'id' => 37,
				'tarefa_id' => 62,
				'caminho' => 'uploads/tarefa/62/',
				'nome' => 'GE_FUT_20160429_Banner Home Dia das Mães Lipocell.docx',
				'caminho_completo' => 'uploads/tarefa/62/GE_FUT_20160429_Banner Home Dia das Mães Lipocell.docx',
				'created_at' => '2016-04-29 12:50:36',
				'updated_at' => '2016-04-29 12:50:36',
			),
			37 => 
			array (
				'id' => 38,
				'tarefa_id' => 63,
				'caminho' => 'uploads/tarefa/62/',
				'nome' => 'GE_FUT_20160429_Banner Home Dia das Mães Lipocell.docx',
				'caminho_completo' => 'uploads/tarefa/62/GE_FUT_20160429_Banner Home Dia das Mães Lipocell.docx',
				'created_at' => '2016-04-29 12:50:41',
				'updated_at' => '2016-04-29 12:50:41',
			),
			38 => 
			array (
				'id' => 39,
				'tarefa_id' => 63,
				'caminho' => 'uploads/tarefa/63/',
				'nome' => 'GE_FUT_20160429_Banner Home Dia das Mães Belvitta Lançamento.docx',
				'caminho_completo' => 'uploads/tarefa/63/GE_FUT_20160429_Banner Home Dia das Mães Belvitta Lançamento.docx',
				'created_at' => '2016-04-29 12:54:55',
				'updated_at' => '2016-04-29 12:54:55',
			),
			39 => 
			array (
				'id' => 40,
				'tarefa_id' => 66,
				'caminho' => 'uploads/tarefa/66/',
				'nome' => 'GE_MIF_20160418_Arraia Junino.docx',
				'caminho_completo' => 'uploads/tarefa/66/GE_MIF_20160418_Arraia Junino.docx',
				'created_at' => '2016-04-29 13:03:34',
				'updated_at' => '2016-04-29 13:03:34',
			),
			40 => 
			array (
				'id' => 41,
				'tarefa_id' => 67,
				'caminho' => 'uploads/tarefa/66/',
				'nome' => 'GE_MIF_20160418_Arraia Junino.docx',
				'caminho_completo' => 'uploads/tarefa/66/GE_MIF_20160418_Arraia Junino.docx',
				'created_at' => '2016-04-29 13:03:38',
				'updated_at' => '2016-04-29 13:03:38',
			),
			41 => 
			array (
				'id' => 42,
				'tarefa_id' => 67,
				'caminho' => 'uploads/tarefa/67/',
				'nome' => 'GE_MIF_20160418_Fantasia Junina.docx',
				'caminho_completo' => 'uploads/tarefa/67/GE_MIF_20160418_Fantasia Junina.docx',
				'created_at' => '2016-04-29 13:03:51',
				'updated_at' => '2016-04-29 13:03:51',
			),
			42 => 
			array (
				'id' => 43,
				'tarefa_id' => 75,
				'caminho' => 'uploads/tarefa/75/',
				'nome' => 'Briefing_Posts_01_VIR.docx',
				'caminho_completo' => 'uploads/tarefa/75/Briefing_Posts_01_VIR.docx',
				'created_at' => '2016-04-29 14:11:03',
				'updated_at' => '2016-04-29 14:11:03',
			),
			43 => 
			array (
				'id' => 44,
				'tarefa_id' => 58,
				'caminho' => 'uploads/tarefa/58/',
				'nome' => 'adidas-fofinho.jpg',
				'caminho_completo' => 'uploads/tarefa/58/adidas-fofinho.jpg',
				'created_at' => '2016-04-29 14:14:45',
				'updated_at' => '2016-04-29 14:14:45',
			),
			44 => 
			array (
				'id' => 45,
				'tarefa_id' => 59,
				'caminho' => 'uploads/tarefa/59/',
				'nome' => 'VANS-DOCINHO!!.jpg',
				'caminho_completo' => 'uploads/tarefa/59/VANS-DOCINHO!!.jpg',
				'created_at' => '2016-04-29 14:15:22',
				'updated_at' => '2016-04-29 14:15:22',
			),
			45 => 
			array (
				'id' => 46,
				'tarefa_id' => 78,
				'caminho' => 'uploads/tarefa/78/',
				'nome' => 'Briefing_Capa_de_Evento_FUT.docx',
				'caminho_completo' => 'uploads/tarefa/78/Briefing_Capa_de_Evento_FUT.docx',
				'created_at' => '2016-04-29 19:22:42',
				'updated_at' => '2016-04-29 19:22:42',
			),
			46 => 
			array (
				'id' => 47,
				'tarefa_id' => 79,
				'caminho' => 'uploads/tarefa/79/',
				'nome' => 'BRIEFING_Post_MIF_01docx.docx',
				'caminho_completo' => 'uploads/tarefa/79/BRIEFING_Post_MIF_01docx.docx',
				'created_at' => '2016-04-29 19:24:32',
				'updated_at' => '2016-04-29 19:24:32',
			),
			47 => 
			array (
				'id' => 48,
				'tarefa_id' => 80,
				'caminho' => 'uploads/tarefa/80/',
				'nome' => 'BRIEFING_Post_MIF_02.docx',
				'caminho_completo' => 'uploads/tarefa/80/BRIEFING_Post_MIF_02.docx',
				'created_at' => '2016-04-29 19:25:22',
				'updated_at' => '2016-04-29 19:25:22',
			),
			48 => 
			array (
				'id' => 49,
				'tarefa_id' => 81,
				'caminho' => 'uploads/tarefa/81/',
				'nome' => 'PPC_CLC_20160418_Briefing Adwords - Click Chique - Adaptação Bazar do amor.psd',
				'caminho_completo' => 'uploads/tarefa/81/PPC_CLC_20160418_Briefing Adwords - Click Chique - Adaptação Bazar do amor.psd',
				'created_at' => '2016-04-29 19:26:25',
				'updated_at' => '2016-04-29 19:26:25',
			),
			49 => 
			array (
				'id' => 50,
				'tarefa_id' => 81,
				'caminho' => 'uploads/tarefa/81/',
				'nome' => 'PPC_CLC_20160418_Briefing Adwords - Click Chique - Adaptação Bazar do amor.docx',
				'caminho_completo' => 'uploads/tarefa/81/PPC_CLC_20160418_Briefing Adwords - Click Chique - Adaptação Bazar do amor.docx',
				'created_at' => '2016-04-29 19:26:25',
				'updated_at' => '2016-04-29 19:26:25',
			),
			50 => 
			array (
				'id' => 51,
				'tarefa_id' => 82,
				'caminho' => 'uploads/tarefa/82/',
				'nome' => 'PPC_LIJ_20160428.docx',
				'caminho_completo' => 'uploads/tarefa/82/PPC_LIJ_20160428.docx',
				'created_at' => '2016-04-29 19:28:30',
				'updated_at' => '2016-04-29 19:28:30',
			),
			51 => 
			array (
				'id' => 52,
				'tarefa_id' => 83,
				'caminho' => 'uploads/tarefa/83/',
				'nome' => 'PPC_PER_Briefing_Links.docx',
				'caminho_completo' => 'uploads/tarefa/83/PPC_PER_Briefing_Links.docx',
				'created_at' => '2016-04-29 19:30:03',
				'updated_at' => '2016-04-29 19:30:03',
			),
			52 => 
			array (
				'id' => 53,
				'tarefa_id' => 84,
				'caminho' => 'uploads/tarefa/84/',
				'nome' => 'BRIEFING_Post_BLUE_01.docx',
				'caminho_completo' => 'uploads/tarefa/84/BRIEFING_Post_BLUE_01.docx',
				'created_at' => '2016-04-29 19:33:14',
				'updated_at' => '2016-04-29 19:33:14',
			),
			53 => 
			array (
				'id' => 54,
				'tarefa_id' => 85,
				'caminho' => 'uploads/tarefa/85/',
				'nome' => 'PPC_CLC_20160418_Briefing Face - Click Chique - Foco3.docx',
				'caminho_completo' => 'uploads/tarefa/85/PPC_CLC_20160418_Briefing Face - Click Chique - Foco3.docx',
				'created_at' => '2016-04-29 19:33:20',
				'updated_at' => '2016-04-29 19:33:20',
			),
			54 => 
			array (
				'id' => 55,
				'tarefa_id' => 86,
				'caminho' => 'uploads/tarefa/84/',
				'nome' => 'BRIEFING_Post_BLUE_01.docx',
				'caminho_completo' => 'uploads/tarefa/84/BRIEFING_Post_BLUE_01.docx',
				'created_at' => '2016-04-29 19:33:32',
				'updated_at' => '2016-04-29 19:33:32',
			),
			55 => 
			array (
				'id' => 56,
				'tarefa_id' => 87,
				'caminho' => 'uploads/tarefa/87/',
				'nome' => 'PPC_CLC_20160418_Briefing Adwords - Click Chique - Adaptação noivas.docx',
				'caminho_completo' => 'uploads/tarefa/87/PPC_CLC_20160418_Briefing Adwords - Click Chique - Adaptação noivas.docx',
				'created_at' => '2016-04-29 19:34:33',
				'updated_at' => '2016-04-29 19:34:33',
			),
			56 => 
			array (
				'id' => 57,
				'tarefa_id' => 87,
				'caminho' => 'uploads/tarefa/87/',
				'nome' => 'PPC_CLC_20160418_Briefing Adwords - Click Chique - Adaptação noivas.psd',
				'caminho_completo' => 'uploads/tarefa/87/PPC_CLC_20160418_Briefing Adwords - Click Chique - Adaptação noivas.psd',
				'created_at' => '2016-04-29 19:34:33',
				'updated_at' => '2016-04-29 19:34:33',
			),
			57 => 
			array (
				'id' => 58,
				'tarefa_id' => 88,
				'caminho' => 'uploads/tarefa/88/',
				'nome' => 'BRIEFING_Post_BLUE_02.docx',
				'caminho_completo' => 'uploads/tarefa/88/BRIEFING_Post_BLUE_02.docx',
				'created_at' => '2016-04-29 19:34:55',
				'updated_at' => '2016-04-29 19:34:55',
			),
			58 => 
			array (
				'id' => 59,
				'tarefa_id' => 89,
				'caminho' => 'uploads/tarefa/89/',
				'nome' => 'BRIEFING_Post_BLUE_03.docx',
				'caminho_completo' => 'uploads/tarefa/89/BRIEFING_Post_BLUE_03.docx',
				'created_at' => '2016-04-29 19:35:42',
				'updated_at' => '2016-04-29 19:35:42',
			),
			59 => 
			array (
				'id' => 60,
				'tarefa_id' => 90,
				'caminho' => 'uploads/tarefa/90/',
				'nome' => 'BRIEFING_Post_BLUE_04.docx',
				'caminho_completo' => 'uploads/tarefa/90/BRIEFING_Post_BLUE_04.docx',
				'created_at' => '2016-04-29 19:36:25',
				'updated_at' => '2016-04-29 19:36:25',
			),
		));
	}

}
