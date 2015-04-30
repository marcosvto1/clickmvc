<?php
$controller = HOME_PAGE;
$action = "index";
$dados = null;

if (isset($_GET['load'])) {
	$params = array();
	$params = explode("/", $_GET['load']);

	$controller = ucwords($params[0]);

	if (isset($params[1]) && !empty($params[1])) {
		$action = $params[1];

	}

	if (isset($params[2]) && !empty($params[2])) {
		$dados = $params[2];
	}
}

$modelName = $controller;
$controller .= 'Controle';
$modelName .= 'Dao';

#print "( ação = " . $action;
#print " | controle =" . $controller;
#print " | modelo = " . $modelName . ")";

if (class_exists($controller)) {

	$load = new $controller($modelName, $action, $bd);

	if (method_exists($load, $action)) {
		$load->$action($dados);
	} else {
		require_once HOME . DS . 'app/views/erro/erro.php';
	}
} else {

	require_once HOME . DS . 'app/views/erro/erro.php';
}
