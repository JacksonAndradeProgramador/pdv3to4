<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Security extends BaseConfig
{
    public $csrfProtection = true;
    public $tokenName = 'token';
    public $cookieName = 'token_cookie';
    public $expire = 7200;
    public $regenerate = false;
    public $excludeURIs = ['payments/paypalipn', 'payments/skrillipn', 'welcome/image_upload'];
}