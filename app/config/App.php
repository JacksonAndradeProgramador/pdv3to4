<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class App extends BaseConfig
{
    public $baseURL = 'http://localhost/novocolher';
    public $uriProtocol = 'REQUEST_URI';
    public $defaultLocale = 'en';
    public $charset = 'UTF-8';
    public $permittedURIChars = 'a-z 0-9~%.:_\-';
    public $proxyIPs = '';
    public $timezone = 'UTC';
    public $indexPage = '';
    public $CSPEnabled = false;
}