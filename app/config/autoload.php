<?php 

namespace Config;

use CodeIgniter\Config\AutoloadConfig;

class Autoload extends AutoloadConfig
{
    public $libraries = [
        'session', 'database', 'parser', 'sma'
    ];

    public $helpers = [
        'url', 'form', 'cookie', 'language', 'file', 'date'.  'doctype',
    ];
}