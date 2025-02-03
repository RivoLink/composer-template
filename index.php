<?php

use App\Model\Project;

require __DIR__.'/config/autoload.php';

echo Project::env('APP_NAME');
echo PHP_EOL;
