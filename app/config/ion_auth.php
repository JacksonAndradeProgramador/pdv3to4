<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class IonAuth extends BaseConfig
{
    // Database Type
    public $useMongodb = false;

    // MongoDB Collections
    public $collections = [
        'users'          => 'users',
        'groups'         => 'groups',
        'login_attempts' => 'login_attempts',
    ];

    // Database Tables
    public $tables = [
        'users'          => 'users',
        'groups'         => 'groups',
        'users_groups'   => '',
        'login_attempts' => 'login_attempts',
    ];

    // Join Columns
    public $join = [
        'users'  => 'user_id',
        'groups' => 'group_id',
    ];

    // Hash Method (sha1 or bcrypt)
    public $hashMethod    = 'sha1'; // IMPORTANT: Make sure this is set to either sha1 or bcrypt
    public $defaultRounds = 8;      // This does not apply if randomRounds is set to true
    public $randomRounds  = false;
    public $minRounds     = 5;
    public $maxRounds     = 9;

    // Authentication Options
    public $siteTitle                 = "Stock Manager Advance"; // Site Title, example.com
    public $adminEmail                = "contact@tecdiary.com"; // Admin Email, admin@example.com
    public $defaultGroup              = 'customer';             // Default group, use name
    public $adminGroup                = 'admin';                // Default administrators group, use name
    public $identity                  = 'email';                // A database column which is used to login with
    public $minPasswordLength         = 8;                      // Minimum Required Length of Password
    public $maxPasswordLength         = 20;                     // Maximum Allowed Length of Password
    public $emailActivation           = true;                   // Email Activation for registration
    public $manualActivation          = false;                  // Manual Activation for registration
    public $rememberUsers             = true;                   // Allow users to be remembered and enable auto-login
    public $userExpire                = 0;                      // How long to remember the user (seconds). Set to zero for no expiration
    public $userExtendOnLogin         = false;                  // Extend the users cookies every time they auto-login
    public $trackLoginAttempts        = true;                   // Track the number of failed login attempts for each user or ip.
    public $trackLoginIpAddress       = false;                  // Track login attempts by IP Address, if false will track based on identity. (Default: TRUE)
    public $maximumLoginAttempts      = 3;                      // The maximum number of failed login attempts.
    public $lockoutTime               = 600;                    // The number of seconds to lockout an account due to exceeded attempts
    public $forgotPasswordExpiration  = 0;                      // The number of milliseconds after which a forgot password request will expire. If set to 0, forgot password requests will not expire.

    // Email Options
    public $useCiEmail = true; // Send Email using the builtin CI email class, if false it will return the code and the identity
    public $emailConfig = [
        'mailtype' => 'html',
    ];

    // Email Templates
    public $emailTemplates = 'auth/email/';
    public $emailActivate = 'activate.tpl.php';
    public $emailForgotPassword = 'forgot_password.tpl.php';
    public $emailForgotPasswordComplete = 'new_password.tpl.php';

    // Salt Options
    public $saltLength = 10;
    public $storeSalt  = false;

    // Message Delimiters
    public $delimitersSource       = 'config'; // "config" = use the settings defined here, "form_validation" = use the settings defined in CI's form validation library
    public $messageStartDelimiter = '<p>';     // Message start delimiter
    public $messageEndDelimiter   = '</p>';    // Message end delimiter
    public $errorStartDelimiter   = '<p>';     // Error message start delimiter
    public $errorEndDelimiter     = '</p>';    // Error message end delimiter
}