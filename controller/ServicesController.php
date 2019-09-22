<?php
class ServicesController extends Controller {
  public function index() {
    $array = array();
    
    $this->loadTemplate('Services', $array);
  }
}