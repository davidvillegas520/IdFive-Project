<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'formas');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'wX;iE`7`W}L6y4}q0Q._`1uFbp6z~~~So>M_zneVuu=+e%p/=tGGUHobPn<K90~C');
define('SECURE_AUTH_KEY', 'i10^F~9)5T|w8lIo8s<y#YXFs Bw&*QdGC,a%9yzS8C!jMK#Ik8[Y:;Rx<EI38?.');
define('LOGGED_IN_KEY', 'YO&%>N~Wbw^?^2rq`iDf#;u AOcqAJ!oaP@#<sjR:FB#&kNTvi+e$`}+BL- 8}rn');
define('NONCE_KEY', '9VF>k8tVZ(ab~P5Wbwfne_]efqX=^zzTnfJH:,(bu.<P)w@ZVk3nOZ;~Au!p,m?C');
define('AUTH_SALT', 'IUO|Ln3,3SwuF7I;qF{~[o^|E/SKKSi-EH&@D>WX^BP{>c~b:/~abrm5Gc`LuXv{');
define('SECURE_AUTH_SALT', '<ns!f]VBCQk^wlq[qz!pX{MMmwuf&j=BQ]ivId$U|B+ZDI`/_||F%kj%-=_F:]Cc');
define('LOGGED_IN_SALT', 'lD4;Y$?I?Y{wJ{9]G(ES!Z;^=/J+)OI]h41E#:D,#]tvK:=h%28}7)n(B#%D*As?');
define('NONCE_SALT', '|X[%_$q8dlm&$r7;wQM7ST<o$-#8?5FY^?E|c{vR;nT0?T7m3[:%Jj!efy4*zoXE');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

