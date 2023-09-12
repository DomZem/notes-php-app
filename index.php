<?php 
declare(strict_types=1);
namespace App;

use App\Exception\AppException;
use App\Exception\ConfigurationException;
use Throwable;

require_once("src/utilities/debug.php");
require_once("src/Controller.php");
require_once("src/exception/AppException.php");

$configuration = require_once("config/config.php");

$request = [
  'get' => $_GET,
  'post' => $_POST,
];

try {
  Controller::initConfiguration($configuration);
  (new Controller($request))->run();
} catch(ConfigurationException $e) {
  echo "<h1>Error in app</h1>";
  echo "Error with configuration. Please contact with your administrator.";
} catch(AppException $e) {
  echo "<h1>Error in app</h1>";
  echo "<h3>" . $e->getMessage() . "</h3>";
} catch(Throwable $e) {
  echo "<h1>Error in app</h1>";
}
