<?php namespace plattex;

use purplex\Application;

/**
 * Palettex Entry
 * 
 */
function run($startTime, $projectPath) {
    require $projectPath.'/vendor/autoload.php';
    $application = new Application($projectPath);
    $application->apply($startTime);
}

run(microtime(true), dirname(__DIR__));