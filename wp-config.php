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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '##N9#Sfd>-kC0/M@0~Yt&:hwiOggj2BD$!c}.~{g**4@ouM9p>083E,}va;2k_+y' );
define( 'SECURE_AUTH_KEY',  'w]hcI$OoG]get2!X7@SLC 0O4toKrsHt-VCw2rPt#4`A4*ye@.H-mSv4SPaCds&>' );
define( 'LOGGED_IN_KEY',    'Uj;v^I0|,iRY+{8@tS>qW[]=d@9czY<!VT`(#|3yZs}aI+/VQ)l*9%=Uur%PKuC.' );
define( 'NONCE_KEY',        '1}vS!%e OK2tkgUXO{?^;|)Po}-l80PA-%zr^_Yz.YUV/;vSZfU7Or@R2ZXo[W[D' );
define( 'AUTH_SALT',        ')i%/T~}xW/p=1}&_[dq!T{NyHth/1x0OT4Mfk&{/MicsD*a(dh;LJ-9K7D<N9`.Z' );
define( 'SECURE_AUTH_SALT', ',l{<Nnnk4FMS9i!d)2fP(NntL1lEd{2KN>&xQ+(od.O!BucqFSCSV3J9x/sxmqg<' );
define( 'LOGGED_IN_SALT',   'O. lcE#X`mm6wFHB(;EDMtoyzPUCKM*P@q9:Xk>tK]w4a~Yo7u)]}UQ784*psdjO' );
define( 'NONCE_SALT',       '`g;SFS|5h7,&?=YGj=0L 7QzCA]k,Gh at0h2Gb7RTbS]__2m7d3&m8c|=*?ngD%' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
