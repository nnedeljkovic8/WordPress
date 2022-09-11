<?php
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
define( 'DB_NAME', 'nnedeljkovic_romann' );

/** Корисничко име MySQL базе */
define( 'DB_USER', 'nnedeljkovic_romann' );

/** Лозинка MySQL базе */
define( 'DB_PASSWORD', '9F=tV)3amUw3' );

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
define( 'AUTH_KEY',         'w$[(vg$!{<>6qk{6.QQ!fYd}ySLK;-t#m^7=o2cUwra?(/@E?<Xpc#@XOx|y}!>w' );
define( 'SECURE_AUTH_KEY',  'G*=z8BEZ}YjX&Adj{KhPa`,li>xvQV;H}&K|h!b|e>F:[/?X#%JHdmbu-ebcf$k6' );
define( 'LOGGED_IN_KEY',    'q<YjeU{O}@LVBu%fi`50rd,W{jl9RLqb%4Bt@M<Qi8  W#S$zG;6{0{%Kz,}[r$Z' );
define( 'NONCE_KEY',        ':xK[&L}(=I%#7o)rxsqz^e!8-o F^zYE=;xG13ptN0xCo3k3D!Bp!#`&}@`1<`HW' );
define( 'AUTH_SALT',        '4GK_ZNc/6HSld)fTAB|(P]9d+7G;mPGvxa-|.UcG(_!+BKzXrf- +zQ1$Y89ryk:' );
define( 'SECURE_AUTH_SALT', 'R3*h$>>{w)Wm{Tuf3Vj:7jG/0t8l%r9xu/%1Nx5nq$#]VTwTR!6<Vh5?(jn1.pC7' );
define( 'LOGGED_IN_SALT',   ',vlde;D>]%F8w|MAK7h;Aq6s&RQ~?.2kf-ATW+V^F7/Wso5(w]>8(pLq_5e5I-<]' );
define( 'NONCE_SALT',       'q0$$#YxN0?#5PyiuHR6em>33FR}T.Lgd%ow8W9cx=%8[o6~(ytY3TF9An}7/uN+]' );

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
