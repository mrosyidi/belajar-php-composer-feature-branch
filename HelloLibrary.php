<?php

  require_once __DIR__ . "/vendor/autoload.php";

  $customer = new \OsyKunchen\Belajar\Customer("Eko");
  echo $customer->sayHello("Budi") . PHP_EOL;
