<?php
class Home extends Model {
  public function getFotos($quantidade = '') {
    $rows = array();
    
    $query = "SELECT * FROM portifolio ";
    
    if (!empty($quantidade)) {
      $query .= "LIMIT " . $quantidade;
    }

    $query = $this->conn->query($query);

    if ($query->rowCount() > 0) {
      $rows = $query->fetchAll();
    }

    return $rows;
  }
}