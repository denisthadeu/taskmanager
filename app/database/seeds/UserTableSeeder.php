<?php

class UserTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('user')->delete();
        
		\DB::table('user')->insert(array (
			0 => 
			array (
				'id' => 10,
				'email' => 'back@bluefoot.com.br',
				'password' => '$2y$10$Lw1fLAq/ElUzcJo.cvHZDOj8SjzEfw2jipopPNPyP/UbIgN1C.CSW',
				'remember_token' => '2LPE4dLgHv6aLgEQ3ZMVerDsbIMUemM0GWmdo6IqltVRhhbwvQVnXB8RTQey',
				'nome' => 'Dênis',
				'sobrenome' => 'Baptista',
				'cpf' => '042.931.911-86',
			'telefone' => '(56) 4646-4654',
			'celular' => '(41) 9142-1545',
				'cargo' => 'Analista de sistema',
				'hired_at' => '2016-03-21 11:54:25',
				'foto_nome' => 'uploads/usuarios/10/',
				'foto_caminho' => 'imagem.jpg',
				'foto_caminho_completo' => 'uploads/usuarios/10/imagem.jpg',
				'sexo' => 'Masculino',
				'estadocivil_id' => 2,
				'perfil' => 2,
				'data_nascimento' => '14/11/1991',
				'status' => 1,
				'created_at' => '2016-03-21 12:49:47',
				'updated_at' => '2016-03-30 16:37:10',
				'deleted_at' => NULL,
			),
			1 => 
			array (
				'id' => 11,
				'email' => 'jamir@bluefoot.com.br',
				'password' => '$2y$10$y2WSsNLREh3kWqlZ5qqbiuyloJK8FAoMhtKPq0XF8S1Md0kesSOHS',
				'remember_token' => 'kvxaHi26Wf5H993ATod69VxOUFlw3PAa9vhxqNPNfOvT01Uoq7qzL4iLGSqC',
				'nome' => 'Jamir',
				'sobrenome' => 'Machado',
				'cpf' => '041.450.809-20',
				'telefone' => '',
			'celular' => '(41) 8803-3131',
				'cargo' => 'Não sei',
				'hired_at' => '2016-03-23 09:36:05',
				'foto_nome' => 'uploads/usuarios/11/',
				'foto_caminho' => 'Penguins.jpg',
				'foto_caminho_completo' => 'uploads/usuarios/11/Penguins.jpg',
				'sexo' => 'Masculino',
				'estadocivil_id' => 1,
				'perfil' => 2,
				'data_nascimento' => '04/02/1972',
				'status' => 1,
				'created_at' => '2016-03-23 12:36:05',
				'updated_at' => '2016-03-23 16:35:15',
				'deleted_at' => NULL,
			),
		));
	}

}
