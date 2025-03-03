<?php

namespace Config;

class Constants
{
    // File and Directory Modes
    public const FILE_READ_MODE = 0644;
    public const FILE_WRITE_MODE = 0666;
    public const DIR_READ_MODE = 0755;
    public const DIR_WRITE_MODE = 0755;

    // File Stream Modes
    public const FOPEN_READ = 'rb';
    public const FOPEN_READ_WRITE = 'r+b';
    public const FOPEN_WRITE_CREATE_DESTRUCTIVE = 'wb'; // truncates existing file data, use with care
    public const FOPEN_READ_WRITE_CREATE_DESTRUCTIVE = 'w+b'; // truncates existing file data, use with care
    public const FOPEN_WRITE_CREATE = 'ab';
    public const FOPEN_READ_WRITE_CREATE = 'a+b';
    public const FOPEN_WRITE_CREATE_STRICT = 'xb';
    public const FOPEN_READ_WRITE_CREATE_STRICT = 'x+b';

    // Debug backtrace
    public const SHOW_DEBUG_BACKTRACE = true;

    // Exit Status Codes
    public const EXIT_SUCCESS = 0; // no errors
    public const EXIT_ERROR = 1; // generic error
    public const EXIT_CONFIG = 3; // configuration error
    public const EXIT_UNKNOWN_FILE = 4; // file not found
    public const EXIT_UNKNOWN_CLASS = 5; // unknown class
    public const EXIT_UNKNOWN_METHOD = 6; // unknown class member
    public const EXIT_USER_INPUT = 7; // invalid user input
    public const EXIT_DATABASE = 8; // database error
    public const EXIT__AUTO_MIN = 9; // lowest automatically-assigned error code
    public const EXIT__AUTO_MAX = 125; // highest automatically-assigned error code
}