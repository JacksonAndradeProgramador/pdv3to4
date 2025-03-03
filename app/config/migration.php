<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Migrations extends BaseConfig
{
    /**
     * Enable or disable migrations.
     *
     * @var bool
     */
    public $enabled = true;

    /**
     * Migration type: 'sequential' or 'timestamp'.
     *
     * @var string
     */
    public $type = 'sequential';

    /**
     * Name of the table that stores the current migration state.
     *
     * @var string
     */
    public $table = 'migrations';

    /**
     * Automatically migrate to the latest version.
     *
     * @var bool
     */
    public $autoLatest = false;

    /**
     * Current migration version.
     *
     * @var int
     */
    public $currentVersion = 315;

    /**
     * Path to the migrations directory.
     *
     * @var string
     */
    public $path = APPPATH . 'Migrations/';
}