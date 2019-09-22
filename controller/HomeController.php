<?php
class HomeController extends Controller {
  public function index() {
    $home = new Home();
    $array['images'] = $home->getFotos(8);

    $this->loadTemplate('Home', $array);
  }
}