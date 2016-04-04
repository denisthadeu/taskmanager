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
	}