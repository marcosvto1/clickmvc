<?php

class UsuarioBean {

	private $id;
	private $username;
	private $senha;
	private $permissao;


	public function __GET($k) {
		return $this->$k;
	}

	public function __SET($k, $v) {
		return $this->$k = $v;
	}

}