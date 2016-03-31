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
				'created_at' => '2016-03-29 13:58:18',
				'updated_at' => '2016-03-29 13:58:18',
			),
		));
	}

}
