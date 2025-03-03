<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Cookie extends BaseConfig
{
    public $prefix = 'sma_';
    public $domain = '';
    public $path = '/';
    public $secure = false;
    public $httponly = false;
}