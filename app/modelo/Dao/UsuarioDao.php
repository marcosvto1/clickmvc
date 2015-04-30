<?php
/**
 * Created by PhpStorm.
 * User: marcos
 * Date: 10/03/15
 * Time: 21:06
 */

class UsuarioDao {

	public function __CONSTRUCT($bd) {
		$this->pdo = $bd;
	}

	public function findAll() {
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM usuarios ORDER BY id DESC");
			$stm->execute();

			foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {

				$usuario = new UsuarioBean($this->pdo);
				$usuario->__SET('id', $r->id);
				$usuario->__SET('username', $r->username);
				$usuario->__SET('senha', $r->senha);
				$usuario->__SET('permissao', $r->permissao);

				$result[] = $usuario;
			}

			return $result;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

}