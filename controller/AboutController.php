<?php
class AboutController extends Controller {
  public function index() {
    $array = array();
    
    $this->loadTemplate('about', $array);
  }
}