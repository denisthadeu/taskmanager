<?php

class CronController extends BaseController {
  	
	public function getIndex()
	{
		$hora = date('H:i');
		$hora = "13:00";
		$diadasemana = date('l');
		//verifica se é durante a semana
		if($diadasemana == "Monday" || $diadasemana == "Tuesday" || $diadasemana == "Wednesday" || $diadasemana == "Thursday" || $diadasemana == "Friday") {
			// Inicia Tarefas pausadas pelo sistema no dia anterior e no almoço de hoje
			if($hora == "09:00" || $hora == "13:00"){
				//pega todas as tarefas com status 2(que foi pausado automaticamente)
				$tarefas = Tarefa::where('status','=','2')->with('usertempoplay')->with(['responsavel' => function($query)
								{
								    $query->with('tarefaTempoIniciado');
								}])->get();
				foreach ($tarefas as $tarefa) {
					$user = $tarefa->responsavel;
					//seta status 0(normal)
					$tarefa->status = 0;
					$tarefa->save();
					// verifica se a tarefa ja nao foi iniciada por algum usuario, ou se o usuario ja esta em outra tarefa
					if(count($tarefa->usertempoplay) == 0 && count($user->tarefaTempoIniciado) == 0){
						//cria start da tarefa
						$tarefauser = new Tarefausertempo();
						$tarefauser->tarefa_id = $tarefa->id;
						$tarefauser->user_id = $tarefa->user_id;
						$tarefauser->data_ini = Formatter::dataAtualDB();
						$tarefauser->minutos = 0;
						$tarefauser->save();
						//cria comentario no log da tarefa
						$comentario = new Tarefacomentario();
						$comentario->tarefa_id = $tarefa->id;
						$comentario->user_id = $tarefa->user_id;
						$comentario->descricao = "Aviso do sistema: Tarefa iniciada automaticamente às ".$hora;
						$comentario->save();
					}
				}
			}

			// pausa Tarefas no horario comercial e para a hora do almoço
			if($hora == "12:00" || $hora == "18:00"){
				// pega na tabela de tempo da tarefa todas as tarefas que não foram pausadas
				$tarefastempo = Tarefausertempo::whereNull('data_fim')->with('tarefa')->get();
				foreach ($tarefastempo as $tarefatempo) {
					//pausa a tarefa
					$tarefatempo->data_fim = Formatter::dataAtualDB();
					$tarefatempo->minutos = Formatter::minutesBetweenDates($tarefatempo->data_ini,$tarefatempo->data_fim);
					$tarefatempo->save();
					//coloca status 2 na tarefa(que funciona para saber q a tarefa foi pausada automaticamente)
					$tarefa = $tarefatempo->tarefa;
					$tarefa->status = 2;
					$tarefa->save();
					//cria o comentario no log da tarefa
					$comentario = new Tarefacomentario();
					$comentario->tarefa_id = $tarefa->id;
					$comentario->user_id = $tarefa->user_id;
					$comentario->descricao = "Aviso do sistema: Tarefa pausada automaticamente às ".$hora;
					$comentario->save();
				}
			}

			// cria tarefas agendadas
			if($hora == "05:00"){

			}
		}

		echo "finalizado";
	}
}