<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Logger extends BaseConfig
{
    public $threshold = 0;
    public $path = WRITEPATH . 'logs/';
    public $fileExtension = 'php';
    public $filePermissions = 0644;
    public $dateFormat = 'Y-m-d H:i:s';
}