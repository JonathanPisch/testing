<?php
require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('Laboration 1');
$log->pushHandler(new StreamHandler('greetings.log', Logger::INFO));
$log->info($argv[1]);

echo "$argv[1] Heavy shit";

function WriteString($string)
{
  echo "Hello $string! What a wonderful name!\n";
}

WriteString($argv[1]);
?>
