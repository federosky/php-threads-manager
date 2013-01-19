<?php
/**
 *
 */
require_once __DIR__.'/../../Logger.php';
$pid = getmypid();
$logger  = Logger::instance('Syslog', 'worker-'.$pid, LOGGER_ALL);
$logger->open();

// Do nothing for 1 second
//sleep(1);

$output = print_r($_SERVER['argv'], 1);

for ($i = 0; $i < 6; $i++) {
    sleep(rand(1,3));
    echo($output);
    $logger->info('Worker output: ('.$pid.'), round: '.$i.', Args:'.$_SERVER['argv'][1]);
}

// Tear down
$logger->close();
exit();