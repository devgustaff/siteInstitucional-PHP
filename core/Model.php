<?php
class Model {
  protected $conn = null;

  public function __construct() {
    try {
      global $config;
      $this->conn = new PDO(
        'mysql:dbname=' . $config['dbname'] . 
        ';host=' . $config['dbhost'], 
        $config['dbuser'], 
        $config['dbpass']
      );
    } catch(PDOException $e) {
      echo 'Erro: ' . $e->getMessage();
    }
  }
}