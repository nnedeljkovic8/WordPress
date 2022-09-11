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
define( 'DB_NAME', 'nnedeljkovic_portfolio' );
/** Корисничко име MySQL базе */
define( 'DB_USER', 'nnedeljkovic_portfolio' );
/** Лозинка MySQL базе */
define( 'DB_PASSWORD', '#U56V$k6g*~E' );
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
define( 'AUTH_KEY',         'Xc7-O%aCe[Azi@%v%o;i68kFu&ER%NY&=^:eVb0K:hQg*gsA1!LX:r!PgfdD18_j' );
define( 'SECURE_AUTH_KEY',  't5<>?-sR_KHCI;{8r%OT^C,*|<_gAcN7C~k{p?5BMiPV<%wtSFZh(OlRE#7OpW@Q' );
define( 'LOGGED_IN_KEY',    '[=t7#*j.j!|+4?CJW!_0i !E2( Gu,K-!HA143r,E@.S_U*xT6??5;E7|^(<v<M]' );
define( 'NONCE_KEY',        'ALa_w59HsBi:+E,g4[5w2Rp#/7oS8lK@B@,S2#bCZ}gN4IsdIt{2#3(u$UU(E5y<' );
define( 'AUTH_SALT',        'iu0]8>^(>z7b#EPCy!]m+E~SX/Qp7rWUJY^B/.$_KN&gMWI61X}MR]u7m suyT1n' );
define( 'SECURE_AUTH_SALT', 'XqzA%5c~s*D?Va2J0j[|r57qBzo=D<f<O.+zWKC:@/+.q?[>k7!fWu5i% gjd@yI' );
define( 'LOGGED_IN_SALT',   '(D/*nv,*/^kl<}MH5?Z2o&@6lR;S)Ym ^D/P{g(wfc_zx=E*Pn=`U-}tvgy6-Jmy' );
define( 'NONCE_SALT',       '{7_q!#D{RmZ!OjV}x}$G}3rD0MW3-A ;y7T3WPOvGVy?8_Eq<nY|a?J{%)85S$yT' );
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