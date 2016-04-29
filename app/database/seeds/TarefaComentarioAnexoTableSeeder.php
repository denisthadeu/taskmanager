<?php

class TarefaComentarioAnexoTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('tarefa_comentario_anexo')->delete();
        
		\DB::table('tarefa_comentario_anexo')->insert(array (
			0 => 
			array (
				'id' => 1,
				'tarefa_comentario_id' => 7,
				'caminho' => 'uploads/tarefa/13/comentario/',
				'nome' => 'imagem.jpg',
				'caminho_completo' => 'uploads/tarefa/13/comentario/imagem.jpg',
				'created_at' => '2016-03-29 16:58:18',
				'updated_at' => '2016-03-29 16:58:18',
			),
			1 => 
			array (
				'id' => 2,
				'tarefa_comentario_id' => 24,
				'caminho' => 'uploads/tarefa/27/comentario/',
				'nome' => 'MANUAL WEBSERVICE - SHOP COMETA.pdf',
				'caminho_completo' => 'uploads/tarefa/27/comentario/MANUAL WEBSERVICE - SHOP COMETA.pdf',
				'created_at' => '2016-04-19 14:38:45',
				'updated_at' => '2016-04-19 14:38:45',
			),
			2 => 
			array (
				'id' => 3,
				'tarefa_comentario_id' => 29,
				'caminho' => 'uploads/tarefa/27/comentario/',
				'nome' => '1_MANUAL WEBSERVICE - SHOP COMETA.pdf',
				'caminho_completo' => 'uploads/tarefa/27/comentario/1_MANUAL WEBSERVICE - SHOP COMETA.pdf',
				'created_at' => '2016-04-19 16:37:32',
				'updated_at' => '2016-04-19 16:37:32',
			),
		));
	}

}
