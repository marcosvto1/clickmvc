<?php
/**
 * Created by PhpStorm.
 * User: marcos
 * Date: 23/03/15
 * Time: 19:58
 */
/**
 *
 */
class modelo {

	private $tabela;

	public function setTabela($nometabela = '') {

		if ($nometabela == '') {
			$this->tabela = '';
		} else {
			$this->tabela = $nometabela;
		}
	}

}