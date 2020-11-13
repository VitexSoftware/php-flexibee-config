<?php

require_once '../vendor/autoload.php';
define('EASE_APPNAME', 'php-abraflexi-checker');
define('EASE_LOGGER', 'console|syslog');

$shared = new \Ease\Shared();

if (getenv('ABRAFLEXI_URL') === false) {
    $shared->loadConfig('../client.json', true);
}

$checker = new FlexiPeeHP\Company();
$infoRaw = $checker->getFlexiData();
$info = is_array($infoRaw) && !array_key_exists('message', $infoRaw) ? \Ease\Functions::reindexArrayBy($infoRaw, 'dbNazev') : [];
$myCompany = $checker->getCompany();
$checker->logBanner();

$checker->addStatusMessage('connection test',
        array_key_exists($myCompany, $info) ? 'success' : 'error' );

return( array_key_exists($myCompany, $info) ? 0 : 1 );