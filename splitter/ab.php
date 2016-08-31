<?php

include_once("testAB.php");

$testAB = new testAB($node->nid);

// If this node has an enabled test A/B
if( $testAB->get_id() ){

  // Get the user's IP
  $remote_ip = $_SERVER['REMOTE_ADDR'];
  if(!$remote_ip || $remote_ip == ''){
      $remote_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }

  // Get the cookie
  /*foreach($_COOKIE['aiesp_multivariate_test'] as $cookie){
    echo $cookie;
  }
  exit;*/
  $cookie_info = explode('-', $_COOKIE['aiesp_multivariate_test']);
  if( isset($cookie_info) && $cookie_info[0] == $testAB->get_id() ){
      $test_id = $cookie_info[0];
      $option_id = $cookie_info[1];
  }
  else {
      // If we don't have the cookie, search in the historic (if not, get and save a random option)
      $option_id = $testAB->search_option($remote_ip);

      // Unset the previous cookie (from another test, if there is)
      unset($_COOKIE['aiesp_multivariate_test']);
      var_dump($testAB->get_id());

      // Set the cookie with the option served and the visitor id
      $cookie_expire = time()+60*60*24*60; // expiration in 60 days
      $cook = setcookie('aiesp_multivariate_test', $testAB->get_id() . '-' . $option_id, $cookie_expire);
  }

  // ------------ Test A/B ------------------------

  // Redirect to version A or B
  $url = $_SERVER['HTTP_HOST'];
  if ($option_id==0){
    echo "Option A";
    $nodeA = $testAB->get_option_node(0);
    header('Location: /' . $nodeA);
    exit;
  }
  else{
    echo "Option B";
    $nodeB = $testAB->get_option_node(1);
    //header('Location: /civicrm/node/' . $nodeB . "?op=B");
    header('Location: /' . $nodeB);
    exit;
  }

}

?>
