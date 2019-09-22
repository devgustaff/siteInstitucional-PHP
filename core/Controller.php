<?php
class Controller {
  public function loadTemplate($viewName, $viewData = array()) {
    require_once 'view/template.php';
  }

  public function loadView($viewName, $viewData = array()) {
    extract($viewData);
    require_once 'view/' . $viewName . '.php';
  }
}