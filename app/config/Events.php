<?php
namespace Config;

use CodeIgniter\Events\Events;
use App\Libraries\SmaHooks;

Events::on('post_controller_constructor', function() {
    $smaHooks = new SmaHooks();
    $smaHooks->check();
});

Events::on('post_controller', function() {
    $smaHooks = new SmaHooks();
    $response = service('response');
    $output = $response->getBody();
    $response->setBody($smaHooks->minify($output));
});