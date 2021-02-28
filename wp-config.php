<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'universal' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'universal_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'mPW2P3sSXSxVZxKi' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#.wFtoU|9?%!K`5Ml#nrjE2e4E5o8<y k{6Wg)2oz?+&j5O=_Ujwf)yd,ThV7_(D' );
define( 'SECURE_AUTH_KEY',  '<W@{^U)]pY~:(F865GndC7]Fv+Y&_9Dxh`rv>ELK=N]vOt/?5Z#9dg(pzd6jW|5d' );
define( 'LOGGED_IN_KEY',    ':? j}&i@Fz {/!#>E3M(p%wY C&ZK4 1B8MQ4jY.=;/p+>;AhP7&thtH8w8 SPGP' );
define( 'NONCE_KEY',        ';Hfk$Q=x=R_SxW!`$MTy;V[^OhvY6A;TSZh0@XXOmKhk(:L~$<z#8DD~T|MJ[ye[' );
define( 'AUTH_SALT',        'kR/X{{}:(9O! 41q[#V<k6_t1[cU:/SV]_}OOW?{A{P0[G+0y {&k;m?]S}!Sq%5' );
define( 'SECURE_AUTH_SALT', 'VM>]e9#Ux~IwE6$b#0owFp/@![VFK553XaJ!NEFnqEj!/V745Q0ngp%0+f|Fq_Qz' );
define( 'LOGGED_IN_SALT',   ' 7*zn-H,#&0^Fhh4jCQ65XS/748XumBp.?7F#&fho/F-5yAUNW,.V5OC{qm^e)xc' );
define( 'NONCE_SALT',       '0#81J?(x5]<6H;<O?WYzZ[s0G?^cbNaZVv{+3[0GI%sk|`vP~@2)t|,neWU3P,Ly' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'universal_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
