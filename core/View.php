<?php

class View {

	private $title;
	private $dados = array();

	public function set($nome, $valor) {
		$this->dados[$nome] = $valor;
	}

	public function bind($nome, &$valor) {

		# Armazena o valor da variável como
		# referência.
		$this->dados[$nome] = &$valor;

	}

	public function get($nome = '') {

		# Se não existir nenhuma variável com
		# o nome indicado como parâmetro,
		# o método retorna uma string vazia.
		if ($nome == '') {
			return $this->dados;
		} else {
			if (isset($this->dados[$nome]) && ($this->dados[$nome] != '')) {
				return $this->dados[$nome];
			} else {
				return '';
			}
		}
	}

	/**
	 * Renderiza um arquivo de visão específico com
	 * as variáveis armazenadas internamente. Como
	 * resultado, envia conteúdo HTML para o navegador
	 * do usuário.
	 *
	 * @param string $arquivo
	 * @return void
	 */
	public function render($arquivo) {

		# Transforma cada item armazenado
		# na lista de dados em variáveis locais
		foreach ($this->get() as $chave => $item) {
			$$chave = $item;
		}

		# Procura o arquivo php dentro da pasta
		# visoes. Se o arquivo existir, inclui o mesmo
		# dentro da função, executando e rederizando
		# o conteúdo dele.
		#print $arquivo;
		if (file_exists("app/views/{$arquivo}.php")) {
			include "app/views/{$arquivo}.php";

		}

	}
}
