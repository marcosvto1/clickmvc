<?php

class SuporteControle extends Controle {

	public function index() {

		$this->visao->set('titulo', 'suporte');
		$this->visao->render('site/suporte');

		//print "to na index";

	}

}
