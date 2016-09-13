<?php

class testAB {

  private $node; // Drupal page node, for other systems could be the URL
  private $test_id; //If it's 0 it means this node doesn't have a current test
  /*private $num_variants;*/ //number of variants ($variants.size)
  private $variants; // array with every variant which contains: title (string), mutations(array):{ target_nid(int), nid(int), plugin(string)}
  private $conn; // DB connection

  function __construct($node) {
    $this->node = $node;
    $conn = Database::getConnection();
    $this->search_experiment();
  }

  // ---------- GETTERS -------------

  // Returns the current test id for this node, or 0 if there's no active test
  public function get_id(){
    return $this->test_id;
  }

  // Return the current page node
  public function get_node(){
    return $this->node;
  }

  // Returns the number of variants
  /*public function get_num_variants(){
    return $this->$num_variants;
  }*/

  public function get_option_node($id){
    var_dump( $this->variants );
    return $this->variants[$id];
  }

  // ------------- METHODS ---------------

  // searches if the given node is in a enabled A/B test
  private function search_experiment(){
    $this->test_id=0;
    $this->variants = array();
    $this->num_variants = 0;

    try {
        // DB connection
        $result = db_select('aiesp_multivariate_tests', 'mt')
          ->condition('enabled', 1, '=')
          ->condition('node_origin', $this->node, '=')
          ->fields('mt', array('id','node_origin', 'url_origin', 'url_a', 'url_b'))
          ->execute();

        while ( $record = $result->fetchAssoc() ){
          $test_id = $record['id'];
          $node_id = $record['node_origin'];
          $url_origin = $record['url_origin'];
          $node_a = $record['url_a'];
          $node_b = $record['url_b'];
          // si el test es sobre el nodo actual
          if( $node_id == $this->node ){
                $this->test_id = $test_id;
                array_push($this->variants, $node_a, $node_b);
                break;
          }
        }
    } catch (Exception $e) {
        echo 'Caught error: ',  $e->getMessage(), "\n";
        //exit(1);
    }
}

  // Searches an option in the DB having an IP address and a test ID
  public function search_option($remote_ip){
    $result = db_select('aiesp_multivariate_users', 'u')
      ->condition('ip_address', $remote_ip, '=')
      ->condition('test_id', $this->test_id, '=')
      ->fields('u', array('ip_address','option_id'))
      ->range(0, 1)
      ->execute();
    $record = $result->fetchAssoc();
    $current_ip = $record['ip_address'];
    $option_id = $record['option_id'];

    // If is not in the historic, insert it
    if(!$current_ip){
      $option_id = $this::get_random();
      // Insert in the DB
      $nid = db_insert('aiesp_multivariate_users')
      ->fields(array(
        'ip_address' => $remote_ip,
        'test_id' => $this->test_id,
        'option_id' => $option_id,
      ))
      ->execute();
    }
    return $option_id;
  }

  // ------- STATIC FUNCTIONS ----------

  // Seeds with microseconds
  private static function make_seed(){
    list($usec, $sec) = explode(' ', microtime());
    return (float) $sec + ((float) $usec * 100000);
  }

  // Get a random number
  public static function get_random() {
    mt_srand(testAB::make_seed());
    $rand = mt_rand(0,1);
    return $rand;
  }

}

?>
