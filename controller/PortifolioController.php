<?php
class PortifolioController extends Controller {
  public function index() {
    $home = new Home();
    $array['images'] = $home->getFotos();

    $this->loadTemplate('Portifolio', $array);
  }
}