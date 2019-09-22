<?php

define('DEBUG', true);

// Database connect information
define('DB_NAME', 'framework');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

// Default controller if there isn't one defined in the url
define('DEFAULT_CONTROLLER', 'Home');

// If no layout is set in the controller use this default layout
define('DEFAULT_LAYOUT', 'default');

// set this to '/' for the live server
define('PROOT', '/mvc_framework/');

// This will be used if no site title is set
define('SITE_TITLE', 'MVC Framework');
