 <?php

class Controle {
	/**
	 * Variável usada como mecanismo
	 * de renderização de visões.
	 * O objeto Visao do arquivo visao.php
	 */

	private $action;
	private $model;
	private $pdo;
	protected $visao = null;

	/**
	 * Construtor da classe, inicializando o
	 * mecanismo de visão dos controles
	 */
	public function __construct($action = NULL, $model = NULL, $pdo = NULL) {
		$this->visao = new View();
		$this->pdo = $pdo;
		$this->action = $action;
		$this->model = $model;
	}

	/**
	 * Método index padrão usado
	 * em todos os controles.
	 */
	public function getPdo() {
		return $this->pdo;
	}

	public function getAction() {
		return $this->action;
	}

	public function getModel() {
		return $this->model;
	}

	public function index() {
		die('Comando index do controle base');
	}

}
