<?php

       //DataBase configuration:
	define('DATABASE_TYPE', 'pgsql');
	define('DATABASE_HOST', 'localhost');
	define('DATABASE_PORT', '5432'); // numéro de port ou '' !!
	define('DATABASE_NAME', 'akt');
	define('DATABASE_USER', 'akt');
	define('DATABASE_PWD', 'akt');
	define('DATABASE_SCHEMA', 'akt_schema');
	define('LOG_PATH', '/opt/logs/akt.log');
	define('LOG_LEVEL', 'DEBUG');
        
        define('TIERS','TIERS');
        define('ADHERENT','ADHERENT');
        define('MEMBRE','MEMBRE');
        define('ADMINISTRATEUR','ADMINISTRATEUR');
?>
