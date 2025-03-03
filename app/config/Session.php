<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Session extends BaseConfig
{
    public $driver = 'database';
    public $cookieName = 'sess';
    public $expiration = 86400;
    public $savePath = 'sessions';
    public $matchIP = false;
    public $timeToUpdate = 300;
    public $regenerateDestroy = false;
}
