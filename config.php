<?php
/**
 * Application Configuration
 *
 * @version 2.0.0
 * @author Kevin Rubio
 * @copyright 2018 Galaxy Internet
 * @license Proprietary - No Licence Granted
 * @see http://galaxyinternet.us
 *
 */

namespace PerfectApp\Debug;

//----------------------------------------------------------------------------------------
// Application Url
//----------------------------------------------------------------------------------------

define("APPLICATION_URL", "http://{$_SERVER['HTTP_HOST']}");

//----------------------------------------------------------------------------------------
// Set App Name & Admin Email
//----------------------------------------------------------------------------------------

define("APP_NAME", 'My Perfect Application');
define("VERSION", 'v.2.0');

define("ADMIN_EMAIL_TO", 'admin@example.com');
define("ADMIN_EMAIL_FROM", 'DoNotReply@example.com');

//----------------------------------------------------------------------------------------
// Database Connection
//----------------------------------------------------------------------------------------

define('DB_TYPE', 'mysql'); // Database Type
define('DB_NAME', 'perfect_app'); // Database Name
define('DB_USER', 'root'); // Database Username
define('DB_PASSWORD', ''); // Database Password
define('DB_HOST', 'localhost'); // Database Hostname
define('DB_CHARSET', 'utf8'); // Database Charset

//----------------------------------------------------------------------------------------
// Dates & Times
//----------------------------------------------------------------------------------------

// Set Timezone
date_default_timezone_set('America/Los_Angeles');

// MySQL Datetime. Format: 2010-07-15 16:33:56
define("MYSQL_DATETIME_TODAY", date("Y-m-d H:i:s"));

//----------------------------------------------------------------------------------------
// Errors
//----------------------------------------------------------------------------------------

define("EMAIL_ERROR", true); // Email errors to ADMIN_EMAIL_TO
define("LOG_ERROR", true); // Log errors to file

//----------------------------------------------------------------------------------------
// Debugging
//----------------------------------------------------------------------------------------
define("DEBUG", false); // Toggle Debugging

define("SHOW_DEBUG_PARAMS", DEBUG); // Display Sql & Sql Parameters
define("SHOW_SESSION_DATA", DEBUG); // Display Session Data
define("SHOW_POST_DATA", DEBUG); // Display Post Data
define("SHOW_GET_DATA", DEBUG); // Display Get Data
define("SHOW_COOKIE_DATA", false); // Display Cookie Data
define("SHOW_REQUEST_DATA", false); // Display Request Data

//----------------------------------------------------------------------------------------
// Main Logo
//----------------------------------------------------------------------------------------
define("IMAGE_FILENAME", 'logo.png');
define("IMAGE_WIDTH", 320);
define("IMAGE_HEIGHT", 220);
define("IMAGE_ALT", APP_NAME);

//----------------------------------------------------------------------------------------
//  DO NOT EDIT BELOW HERE
//----------------------------------------------------------------------------------------

if (version_compare(PHP_VERSION, '5.4') < 0)
{
    die('Your PHP installation is too old. Requires at least PHP 5.4');
}

define('ABSPATH', __dir__ . DIRECTORY_SEPARATOR);

// Path To error log
define("ERROR_LOG_PATH", ABSPATH . "logs" . DIRECTORY_SEPARATOR . "error.log");


/** Required files. */
require 'functions.php';

// Custom exception handler function (functions.php)
set_exception_handler('custom_exception');

/*// Sentry Error Tracking
require_once '../vendor/Autoload.php';
$client = new Raven_Client('https://b770f71f9d7444339d3e236377ff8d79:8dd13a7685f44875b26ef720b6223dfa@sentry.io/135633');
$error_handler = new Raven_ErrorHandler($client);
$error_handler->registerExceptionHandler();
$error_handler->registerErrorHandler();
$error_handler->registerShutdownFunction();*/

require "vendor/autoload.php";

if (DEBUG)
{
    $varDumper = new HTMLVarDumper();
    echo '<div class="error_custom"><H1>DEBUGGING IS ON !!!</H1></div>';


    if (SHOW_COOKIE_DATA)
    {
        $varDumper->dump('COOKIE', $_COOKIE);
    }

    if (SHOW_SESSION_DATA && isset($_SESSION))
    {
        $varDumper->dump('SESSION', $_SESSION);
    }

    if (SHOW_POST_DATA)
    {
        $varDumper->dump('POST', $_POST);
    }

    if (SHOW_GET_DATA)
    {
        $varDumper->dump('GET', $_GET);
    }

    if (SHOW_REQUEST_DATA)
    {
        $varDumper->dump('REQUEST', $_REQUEST);
    }
}