<?php

define('DEBUG', true);

define('DB_NAME', 'framework'); //database name
define('DB_USER', 'root'); //database user
define('DB_PASSWORD', '123456789'); //database password
define('DB_HOST', 'localhost'); //database host ***use ip address to avoid DNS lookup

define('DEFAULT_CONTROLLER', 'Home'); //default controller if there isn't one defined in the url
define('DEFAULT_LAYOUT', 'default'); //if no layout is set in the controller, use this layout

define('PROOT', '/camagru/'); // set this to '/' for a live server.

define('SITE_TITLE', 'Framework ya mapara'); //This will be used if no site title is set