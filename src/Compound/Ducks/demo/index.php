<?php

use Patterns\Compound\Ducks\CountingDuckFactory;
use Patterns\Compound\Ducks\DuckSimulator;

require __DIR__ . '/../../../../bootstrap.php';

$duckFactory = new CountingDuckFactory();

(new DuckSimulator())->simulate($duckFactory);