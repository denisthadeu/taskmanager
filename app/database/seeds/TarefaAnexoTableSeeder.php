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
				'created_at' => '2016-03-28 20:55:14',
				'updated_at' => '2016-03-28 20:55:14',
			),
			1 => 
			array (
				'id' => 2,
				'tarefa_id' => 13,
				'caminho' => 'uploads/tarefa/13/',
				'nome' => 'Globo_logotipo_2008.png',
				'caminho_completo' => 'uploads/tarefa/13/Globo_logotipo_2008.png',
				'created_at' => '2016-03-28 20:55:14',
				'updated_at' => '2016-03-28 20:55:14',
			),
			2 => 
			array (
				'id' => 3,
				'tarefa_id' => 14,
				'caminho' => 'uploads/tarefa/14/',
				'nome' => 'images.jpg',
				'caminho_completo' => 'uploads/tarefa/14/images.jpg',
				'created_at' => '2016-03-28 20:56:50',
				'updated_at' => '2016-03-28 20:56:50',
			),
			3 => 
			array (
				'id' => 4,
				'tarefa_id' => 14,
				'caminho' => 'uploads/tarefa/14/',
				'nome' => 'Globo_logotipo_2008.png',
				'caminho_completo' => 'uploads/tarefa/14/Globo_logotipo_2008.png',
				'created_at' => '2016-03-28 20:56:50',
				'updated_at' => '2016-03-28 20:56:50',
			),
			4 => 
			array (
				'id' => 5,
				'tarefa_id' => 15,
				'caminho' => 'uploads/tarefa/14/',
				'nome' => 'images.jpg',
				'caminho_completo' => 'uploads/tarefa/14/images.jpg',
				'created_at' => '2016-03-28 20:56:50',
				'updated_at' => '2016-03-28 20:56:50',
			),
			5 => 
			array (
				'id' => 6,
				'tarefa_id' => 15,
				'caminho' => 'uploads/tarefa/14/',
				'nome' => 'Globo_logotipo_2008.png',
				'caminho_completo' => 'uploads/tarefa/14/Globo_logotipo_2008.png',
				'created_at' => '2016-03-28 20:56:50',
				'updated_at' => '2016-03-28 20:56:50',
			),
			6 => 
			array (
				'id' => 7,
				'tarefa_id' => 14,
				'caminho' => 'uploads/tarefa/14/',
				'nome' => 'stack_overflow_book.jpg',
				'caminho_completo' => 'uploads/tarefa/14/stack_overflow_book.jpg',
				'created_at' => '2016-03-29 12:49:50',
				'updated_at' => '2016-03-29 12:49:50',
			),
		));
	}

}
