<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
include(dirname(__FILE__).'/local-config.php');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1Dk&%:8^?>hmP=9w+7BCttu7K(ZW(X-w7O( *pN5UoW,at]<gc?&`xikU00-4!>N');
define('SECURE_AUTH_KEY',  '.BK!kU2m}rYAp-m/nU.Mdr-8kZt3(c<xc@2cAA}:r){IVnMEYVsXs;Hp30r=]]r#');
define('LOGGED_IN_KEY',    '<1niPhzuJ(b}8T9_v$Fw5-F&OX*f8Pn|GW)qK-VPVZfJa<t{E}l( HtQ[PYMD,CL');
define('NONCE_KEY',        'qW8-s~$*P-J%T-G%d},vxz-0X|ay0?wTlV?ol+>LY~Hm-ZE[5_T0LLV8a_?-lXy$');
define('AUTH_SALT',        'icUMgSxXd}/bFs3.j^3Et<1}*<88ME}TWy?/PM`dNO.SN;n?-08}xttiluNw0c]`');
define('SECURE_AUTH_SALT', '^rM(?^=. =NYs-3xUy>athQ5&<=Mr1H,wPrvVSK?D/KC=Se-H&6iQE.NREm@~P{v');
define('LOGGED_IN_SALT',   'g|8-i.,]CSIZ#xiPo1tIld9D)IaiA@Ig*E K,?JtG7%1uLX:<5qRQt!metQEKXoP');
define('NONCE_SALT',       '>A%yj-v^.N@99J0xR?9l|,w~+`DK.MzMRvbTmtq}&p&)iMg/!v+1k8jJr~=}d@,~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 * For VaultPress
 */
define( 'VAULTPRESS_DISABLE_FIREWALL', true );
if ( !empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
   $forwarded_ips = explode( ',', $_SERVER['HTTP_X_FORWARDED_FOR'] );
   $_SERVER['REMOTE_ADDR'] = $forwarded_ips[0];
   unset( $forwarded_ips );
}

/**
 * For Nginx Cache Controller
 */
define('IS_AMIMOTO', true);
define('NCC_CACHE_DIR', '/var/cache/nginx/proxy_cache');

/**
 * 管理画面からのインストールを無効にする
 */
define('DISALLOW_FILE_EDIT',true);
define('DISALLOW_FILE_MODS',true);

/*
 * wp_cron off
 */
define( 'DISABLE_WP_CRON', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
