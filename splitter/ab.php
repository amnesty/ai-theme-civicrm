<?php

// Incluimos la clase que contiene las funcionalidades de testAB
include_once("testAB.php");

// Le pasamos el nodo actual, para que mire si existe un test activo en esta página
$testAB = new testAB($node->nid);

// Leemos y guardamos los parámetros GET, para luego tenerlos en la redirección de página
$getVars = '';
$i=0;
foreach ($_GET as $key=>$value){
  if($key != 'q'){
    if($i){
      $getVars .= '&'.$key.'='.$value;
    }
    else { //primera variable
      $getVars .= '?'.$key.'='.$value;
    }
    $i++;
  }
}

// Nos aseguramos de que ?origen=attel o parecidos quedan excluidos del test
$attel = ( isset($_GET['origen']) && preg_match('/attel/',$_GET['origen']) );

// Si el nodo tiene un test A/B activo, procedemos
if( !$attel && $testAB->get_id() ){

  // Recuperamos la IP del usuario
  $remote_ip = $_SERVER['REMOTE_ADDR'];
  if(!$remote_ip || $remote_ip == ''){
      $remote_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }

  // Vemos si tiene una cookie guardada con el test. El valor va a ser test_id-opcion_id
  $cookie_info = explode('-', $_COOKIE['aiesp_multivariate_test']);
  if( isset($cookie_info) && $cookie_info[0] == $testAB->get_id() ){
      $test_id = $cookie_info[0];
      $option_id = $cookie_info[1];
  }
  else {
      // Si no tiene cookie, miramos si su IP tiene entrada en la BD para este test,
      // Sino, sirve una opción aleatoria A o B
      $option_id = $testAB->search_option($remote_ip);

      // Borramos una cookie anterior, si existe
      unset($_COOKIE['aiesp_multivariate_test']);

      // Guardamos la cookie con el test actual y la opción dada
      $cookie_expire = time()+60*60*24*60; // expiration in 60 days
      $cook = setcookie('aiesp_multivariate_test', $testAB->get_id() . '-' . $option_id, $cookie_expire);
  }

  // ------------ Test A/B ------------------------

  // Redirige a versión A (0) o B (1)
  $url = $_SERVER['HTTP_HOST'];
  if ($option_id==0){
    $nodeA = $testAB->get_option_node(0);
    header('Location: /' . $nodeA . $getVars);
    exit;
  }
  else{
    $nodeB = $testAB->get_option_node(1);
    header('Location: /' . $nodeB . $getVars);
    exit;
  }

}

?>
