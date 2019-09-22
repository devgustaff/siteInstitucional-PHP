<?php
require_once 'environment.php';

define('BASE_URL', 'http://localhost/siteInstitucional/');
global $config;
$config = array();

if (ENVIRONMENT == 'development') {
  $config['dbname'] = 'siteInstitucional';
  $config['dbuser'] = 'root';
  $config['dbhost'] = 'localhost';
  $config['dbpass'] = '';
} else {}