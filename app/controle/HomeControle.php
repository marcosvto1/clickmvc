<?php

class HomeControle extends Controle {

	private $action;
	private $model;
	private $senha;
	private $pdo;

	public function index() {

		$this->visao->set('titulo', 'Home');
		$this->visao->render('site/home');

		//print "to na index";

	}

	public static function login() {

		$this->visao->set('titulo', 'Meu primeiro MVC em PHP');
		$this->visao->render('site/index');
	}

}
