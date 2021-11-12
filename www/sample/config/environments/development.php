<?php
/**
 * Configuration overrides for WP_ENV === 'development'
 */

use Roots\WPConfig\Config;

Config::define('SAVEQUERIES', false);
Config::define('WP_DEBUG', false);
Config::define('WP_DEBUG_DISPLAY', false);
Config::define('SCRIPT_DEBUG', false);

ini_set('display_errors', 1);

// Enable plugin and theme updates and installation from the admin
Config::define('DISALLOW_FILE_MODS', false);

Config::define( 'WPSE54453_IS_LOCAL_SERVER', true );