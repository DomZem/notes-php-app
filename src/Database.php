<?php 
declare(strict_types=1);
namespace App;

require_once("exception/StorageException.php.php");
require_once("exception/ConfigurationException.php");

use App\Exception\ConfigurationException;
use App\Exception\StorageException;
use PDO;
use PDOException;

class Database 
{
  public function __construct(array $config)
  {
    $this->validateConfig($config);

    try {
      $dsn = "mysql:dbname={$config['database']};host={$config['host']}";
      $connection = new PDO($dsn, $config['user'], $config['password']);
    } catch(PDOException $e) {
      throw new StorageException('Connection error');
    }
  }

  private function validateConfig(array $config):void {
    if(empty($config['database']) 
    || empty($config['host']) 
    || empty($config['user']) 
    || empty($config['password'])) {
      throw new ConfigurationException('Storage configuration error');
    }
  }
}