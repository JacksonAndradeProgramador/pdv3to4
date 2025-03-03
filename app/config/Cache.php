<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Cache extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Memcached Settings
     * --------------------------------------------------------------------------
     * Your Memcached servers can be specified below.
     *
     * @see http://codeigniter.com/user_guide/libraries/caching.html#memcached
     */
    public $memcached = [
        'host'   => '127.0.0.1', // Host do Memcached
        'port'   => 11211,       // Porta do Memcached
        'weight' => 1,           // Peso do servidor (útil para balanceamento de carga)
    ];
}