<?php
/**
 * Created by PhpStorm.
 * User: marcos
 * Date: 18/03/15
 * Time: 19:37
 */

session_start();
 //print $_SESSION['logado'];

  if(!$_SESSION['logado']){

      header('Location: /login');
    // print "marcos";

  }