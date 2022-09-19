<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
/**
 * Основне поставке Вордпреса.
 *
 * Ова датотека се користи од стране скрипте за прављење wp-config.php током
 * инсталирања. Не морате да користите веб место, само умножите ову датотеку
 * у "wp-config.php" и попуните вредности.
 *
 * Ова датотека садржи следеће поставке:
 * * MySQL подешавања
 * * тајне кључеве
 * * префикс табеле
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
// ** MySQL подешавања - Можете добити ове податке од свог домаћина ** //
/** Име базе података за Вордпрес */
define( 'DB_NAME', 'nnedeljkovic_projekat' );
/** Корисничко име MySQL базе */
define( 'DB_USER', 'nnedeljkovic_projekat' );
/** Лозинка MySQL базе */
define( 'DB_PASSWORD', 'J#XNU9=sLjuo' );
/** MySQL домаћин */
define( 'DB_HOST', 'localhost' );
/** Скуп знакова за коришћење у прављењу табела базе. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The Database Collate type. Не мењајте ово ако сте у сумњи. */
define( 'DB_COLLATE', '' );
/**#@+
 * Јединствени кључеви за аутентификацију.
 *
 * Промените ово у различите јединствене изразе!
 * Можете направити ово користећи {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org услугу тајних кључева}
 * Ово можете променити у сваком тренутку да бисте поништили све постојеће колачиће.
 * Ово ће натерати кориснике да се поново пријаве.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'K mU2p-M!P[g;gf)Y9BOUP]x&-.B/s*$ekO?D&P`MJ>jO^)`BEvX=7%xNTM:AB$g' );
define( 'SECURE_AUTH_KEY',  'CDcKVTZ![A0^{(b( 8n_`[T>k!+fr:0%h`hoUpd55)1oCC$%+`4Rx;X JhCLjLaR' );
define( 'LOGGED_IN_KEY',    '6_e:?+H)3^*hQYc^dT[b7]g1(H5x3IxiZ(1e@:fQ|{dZV>t`Lmud=1IB)m@hLIKX' );
define( 'NONCE_KEY',        '=WUUPV.dD3/B+.TJ]Te.s`a,?V=>[b}}VTf%bakG+(%bkh(w;h|OM,`9]99K):^`' );
define( 'AUTH_SALT',        ')BUji2ANY;%PR}i{DN;Ui_!9LVIA_.TU.3r,&/u9g^_.b?+Y&W76K8&#-0QBj(U[' );
define( 'SECURE_AUTH_SALT', 'lb`CAIWs,diVinQvpag(qEv1WBD.|5:mT2qSxec?i =x}_;pvF?W7wKGyM+v)P_b' );
define( 'LOGGED_IN_SALT',   ')Z+nIH7W>VYAzDw_z3#v10351<T`-7oBZJBHqQeagd24q)6cyQN0iw5Q$3QCg&?Q' );
define( 'NONCE_SALT',       '1aqK^Y>d_RmwU%_tHfu<<u^7b|2cYaNP!:amjQgFN;wN{6+Q{JQ7og/.)*lqz3I=' );
/**#@-*/
/**
 * Префикс табеле Вордпресове базе података.
 *
 * Можете имати више инсталација Вордпреса у једној бази уколико
 * свакој дате јединствени префикс. Само бројеви, слова и доње цртице!
 */
$table_prefix = 'wp_';
/**
 * За градитеље: исправљање грешака у Вордпресу ("WordPress debugging mode").
 *
 * Промените ово у true да бисте омогућили приказ напомена током градње.
 * Веома се препоручује да градитељи тема и додатака користе WP_DEBUG
 * у својим градитељским окружењима.
 *
 * За више података о осталим константама које могу да се
 * користе током отклањања грешака, посетите Документацију.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
/* То је све, престаните са уређивањем! Срећно објављивање. */
/** Апсолутна путања ка Вордпресовом директоријуму. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Поставља Вордпресове променљиве и укључене датотеке. */
require_once( ABSPATH . 'wp-settings.php' );