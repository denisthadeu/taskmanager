<?php

class RelatorioController extends BaseController {

	/*
	| GitHub Relatorio https://github.com/Maatwebsite/Laravel-Excel/tree/1.3
	*/
	public function __construct() {
	    $this->beforeFilter('auth');
  	}
  	
  	
	public function getIndex()
	{
		return View::make('erro.embreve');
	}

}
