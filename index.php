<?php
require_once 'core/Config.php';
require_once 'lib/bd.php';
require_once 'lib/conect.php';
require_once 'core/Modelo.php';
require_once 'core/Controle.php';
require_once 'core/View.php';

define('DS', DIRECTORY_SEPARATOR);
define('HOME', dirname(__FILE__));

ini_set('display_errors', 1);

require_once HOME . DS . 'bootstrap.php';

function __autoload($class) {
	if (file_exists(HOME . DS . 'app/controle' . DS . $class . '.php')) {

		require_once HOME . DS . 'app/controle' . DS . $class . '.php';

	} else if (file_exists(HOME . DS . 'app/modelo' . DS . 'Bean' . DS . $class . '.php')) {

		require_once HOME . DS . 'app/modelo' . DS . 'Bean' . DS . $class . '.php';

	} else if (file_exists(HOME . DS . 'app/modelo' . DS . 'Dao' . DS . $class . '.php')) {

		require_once HOME . DS . 'app/modelo' . DS . 'Dao' . DS . $class . '.php';

	} else {

		require_once HOME . DS . 'app/views/erro/erro.php';
	}
}
