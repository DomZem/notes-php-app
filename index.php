<?php 
  declare(strict_types=1);
  namespace App;
  require_once("src/utilities/debug.php");
  
  $action = $_GET['action'] ?? null;


  if($action === 'create') {
    include_once('templates/pages/create.php');
  } else {
    include_once('templates/pages/list.php');
  }