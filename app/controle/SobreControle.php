<?php

class SobreControle extends Controle {
	private $action;
	private $model;
	private $senha;
	private $pdo;

	public function index() {

		$this->visao->set('titulo', 'sobre');
		$this->visao->render('site/sobre');

		//print "to na index";

	}

}
