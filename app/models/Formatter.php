<?php
	
	class Formatter 
	{
	
	  public static function stringToDate($data) 
	  {
	    $data = str_replace('/', '-', $data);
	    return date('Y-m-d',strtotime($data));
	  }
	
	  public static function dateToString($data)
	  {
	    return date('d/m/Y',strtotime($data));
	  }
	
	  public static function getDataFormatada($data) 
	  {
	    return date('d/m/Y',strtotime($data));
	  }
	
	  public static function getDataHoraFormatada($dataHora) 
	  {	
	  	if(empty($dataHora)){
	  		return null;
	  	}
	    return date('d/m/Y H:i:s',strtotime($dataHora));
	  }
	
	  public static function getValorFormatado($valor)
	  {
	    if(is_numeric($valor))
	      return 'R$ ' . number_format($valor,'2',',','.'); 
	    else
	      return 'R$ ' . $valor;
	  }
	
	  public static function getValor($valor)
	  {
	    if(is_numeric($valor))
	      return number_format($valor,'2',',','.'); 
	    else
	      return $valor;
	  } 
	
	  public static function getValorBD($valor)
	  {
	    $valor = str_replace("R$ ", "", $valor);
	    $valor = str_replace(".", "", $valor);
	    $valor = str_replace(",", ".", $valor);
	    return $valor; 
	  }
	
	  public static function getDataPorExtensoAbreviada($data) 
	  {
	    setlocale(LC_ALL,'pt_BR.utf8');
	    return utf8_encode(ucfirst(strftime('%a %d/%m',strtotime($data))));
	  }
	
	  public static function getDataPorExtenso($data) 
	  {
	    setlocale(LC_ALL,'pt_BR.utf8');
	    return utf8_encode(strftime('%d/%m/%Y - %A',strtotime($data)));
	  } 
	
	  public static function getMesPorExtenso($data)
	  {
	    setlocale(LC_ALL,'pt_BR.utf8');
	    return utf8_encode(ucfirst(strftime('%B de %Y',strtotime($data))));
	  }
	
	  public static function getMesExtenso($data)
	  {
	    setlocale(LC_ALL,'pt_BR.utf8');
	    return utf8_encode(ucfirst(strftime('%B',strtotime($data))));
	  }
	
	  public static function getPorcentagemFormatada($valor)
	  {
	    return number_format($valor,'2',',','.'); 
	  }
	  public static function getStatusSimNao($status)
	  {
	    if($status == 1){
	    	return "Sim";
	    } else {
			return "Não";
	    }
	  }
	
	  public static function mask($val, $mask)
	  {
	
	    // $cnpj = "11222333000199";
	    // $cpf = "00100200300";
	    // $cep = "08665110";
	    // $data = "10102010";
	    // echo mask($cnpj,'##.###.###/####-##');
	    // echo mask($cpf,'###.###.###-##');
	    // echo mask($cep,'#####-###');
	    // echo mask($data,'##/##/####');
	
	    $maskared = '';
	    $k = 0;
	    for($i = 0; $i<=strlen($mask)-1; $i++)
	    {
	      if($mask[$i] == '#')
	      {
	        if(isset($val[$k]))
	        $maskared .= $val[$k++];
	      }
	      else
	      {
	        if(isset($mask[$i]))
	        $maskared .= $mask[$i];
	      }
	    }
	    return $maskared;
	  } 
	  public static function dateDbToString($data) 
	  {
	  	if(!empty($data)){
	  		$data = explode(' ', $data);
		    $data = $data[0];
		    $data = explode('-', $data);
		    $data = $data[2]."/".$data[1]."/".$data[0];
		    return $data;
	  	}
	  	return null;
	  }

	  public static function dateStringToTimeStampDB($data) 
	  {
	  	try {
		    if(!empty($data)){
		  		$data = explode(' ', $data);
		  		$hora = $data[1];
			    $data = $data[0];
			    $data = explode('/', $data);
			    $data = $data[2]."-".$data[1]."-".$data[0]." ".$hora;
			    return $data;
		  	} else {
		  		return null;
		  	}
		} catch (Exception $e) {
		    return null;
		}
	  	
	  }

	  public static function convertToHoursMins($time, $format = '%02d:%02d')
	  {
	    if ($time < 1) {
        	return "00:00";
    	}
	    $hours = floor($time / 60);
	    $minutes = ($time % 60);
	    return sprintf($format, $hours, $minutes);
	  }

	  public static function dataAtualDB()
	  {
	    return date('Y-m-d H:i:s');
	  }
	  public static function dataAtualDB2()
	  {
	    return date('Y-m-d 23:59:59');
	  }

	  public static function dataAtualDBPlusMinutes($minutes)
	  {
		$dias = null;
		$extraMinutes = 0;
	  	$hora = date("H", strtotime( $dias." +".$minutes." minutes"));
	  	$recursive = false;
		if($hora >= 18){
			$arrHorarios = array('18'=>'15','19'=>'14','20'=>'13','21'=>'12','22'=>'11','23'=>'10');
			$minutes = $minutes + (60 * $arrHorarios[$hora]);
			$extraMinutes = ($hora - 18) * 60;
			$recursive = true;
		}  elseif($hora < 9){
			$minutes = $minutes + (60 * (9 - $hora)) ;
			$extraMinutes = ($hora + 9) * 60;
			$recursive = true;
		}
		$diaSemana = date("l", strtotime("+".$minutes." minutes"));
		if($diaSemana == "Saturday"){
			$dias = " + 2 day ";
			$recursive = true;
			$extraMinutes = $extraMinutes + (2 * 24 * 60);
		} elseif($diaSemana == "Saturday"){
			$dias = " + 1 day ";
			$recursive = true;
			$extraMinutes = $extraMinutes + (1 * 24 * 60);
		}
		$minutes = $minutes + $extraMinutes;
		if($recursive){
			return Formatter::dataAtualDBPlusMinutes($minutes);
		}
		return date("Y-m-d H:i:s", strtotime($dias." +".$minutes." minutes"));
	  }

	  	public static function recursivoHorarioComercial($data)
		{
			$hora =  date("H", strtotime($data));
			if($hora >= 18){
				$arrHorarios = array('18'=>'15','19'=>'14','20'=>'13','21'=>'12','22'=>'11','23'=>'10','00'=>'9','01'=>'8','02'=>'7',);
				$minutes = (60 * $arrHorarios[$hora]);
				$data = date("Y-m-d H:i:s", strtotime("+".$minutes." minutes", strtotime($data)));
			}
			$diaSemana = date("l", strtotime($data));
			if($diaSemana == "Saturday"){
				$extraMinutes = (2 * 24 * 60);
				$data = date("Y-m-d H:i:s", strtotime("+".$extraMinutes." minutes", strtotime($data)));
			} elseif($diaSemana == "Saturday"){
				$extraMinutes = (1 * 24 * 60);
				$data = date("Y-m-d H:i:s", strtotime("+".$extraMinutes." minutes", strtotime($data)));
			}
			$horaFim = date("H", strtotime($data));
		    return $data;
		}

	  public static function setDatalDBPlusMinutes($data,$minutes)
	  {
		$hours = floor($minutes / 60);
	    $minutes = ($minutes % 60);
	    $hid = 8;
	    $days = floor($hours/$hid);
	    $horaINi =  date("H", strtotime($data));
	    $hours = $hours - ($days * $hid);
	    $data = date("Y-m-d H:i:s", strtotime("+".$minutes." minutes", strtotime($data)));
		$data = Formatter::recursivoHorarioComercial($data);
		$data = date("Y-m-d H:i:s", strtotime("+".$hours." hours", strtotime($data)));
		$data = Formatter::recursivoHorarioComercial($data);
		for ($i = 1; $i <= $days; $i++){
			$data = date("Y-m-d H:i:s", strtotime("+1 day", strtotime($data)));
			$data = Formatter::recursivoHorarioComercial($data);
		}
		$horaFim = date("H", strtotime($data));
		if($horaINi <= 12 && $horaFim >= 12 ){
			$data = date("Y-m-d H:i:s", strtotime("+60 minutes", strtotime($data)));
		}
	    return $data;
	  }

	  public static function dataAtualDBPlusHours($hours)
	  {
	  	$hora = date("H", strtotime("+".$hours." hours"));
		if($hora >= 18){
			$hours = $hours + (60 * 15);
		} 
		return date("Y-m-d H:i:s", strtotime("+".$hours." hours"));
	  }

	  public static function leadingZero($int)
	  {
	    return str_pad($int, 2, '0', STR_PAD_LEFT);;
	  }

	  public static function minutesBetweenDates($dt_ini,$dt_fim)
	  {
	  	if(empty($dt_fim)){
	  		$dt_fim = Formatter::dataAtualDB();
	  	}
		return  round(abs(strtotime($dt_ini) - strtotime($dt_fim)) / 60,2);
	  }

	  public static function daysHoursMinutes($minutes){
  		$day = floor ($minutes / 1440);
		$hour = floor (($minutes - $d * 1440) / 60);
		$min = $minutes - ($d * 1440) - ($h * 60);
		 
		return "{$day}Dias {$hour}:{$min}";
	  }


	  public static function dataExtenso($data){
  		$data = explode("-", $data);
  		$ano = $data[0];
  		$mes = $data[1];
  		switch ($mes){
			case 1: $mes = "JANEIRO"; break;
			case 2: $mes = "FEVEREIRO"; break;
			case 3: $mes = "MARÇO"; break;
			case 4: $mes = "ABRIL"; break;
			case 5: $mes = "MAIO"; break;
			case 6: $mes = "JUNHO"; break;
			case 7: $mes = "JULHO"; break;
			case 8: $mes = "AGOSTO"; break;
			case 9: $mes = "SETEMBRO"; break;
			case 10: $mes = "OUTUBRO"; break;
			case 11: $mes = "NOVEMBRO"; break;
			case 12: $mes = "DEZEMBRO"; break;
		}
		 
		return $mes." DE ".$ano;
	  }

	  public static function generateStrongPassword($length = 9, $add_dashes = false, $available_sets = 'luds')
	  {
		$sets = array();
		if(strpos($available_sets, 'l') !== false)
			$sets[] = 'abcdefghjkmnpqrstuvwxyz';
		if(strpos($available_sets, 'u') !== false)
			$sets[] = 'ABCDEFGHJKMNPQRSTUVWXYZ';
		if(strpos($available_sets, 'd') !== false)
			$sets[] = '23456789';
		if(strpos($available_sets, 's') !== false)
			$sets[] = '!@#$%&*?';
		$all = '';
		$password = '';
		foreach($sets as $set)
		{
			$password .= $set[array_rand(str_split($set))];
			$all .= $set;
		}
		$all = str_split($all);
		for($i = 0; $i < $length - count($sets); $i++)
			$password .= $all[array_rand($all)];
		$password = str_shuffle($password);
		if(!$add_dashes)
			return $password;
		$dash_len = floor(sqrt($length));
		$dash_str = '';
		while(strlen($password) > $dash_len)
		{
			$dash_str .= substr($password, 0, $dash_len) . '-';
			$password = substr($password, $dash_len);
		}
		$dash_str .= $password;
		return $dash_str;
	  }
	  
	}