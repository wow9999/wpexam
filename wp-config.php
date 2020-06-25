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
define( 'AUTH_KEY',         '16t61FZe5exs`HK]9FClL4~_X&l Flo<QUp5X*q=%v*-sqHAtL0<l}~nnkXln?t1' );
define( 'SECURE_AUTH_KEY',  '_Yh^=%<hSs{2IwC,@+?U9V@BPo*|!tKG`HZEnC3![=FB$<`xG!=G#W|{@9+2c]Rs' );
define( 'LOGGED_IN_KEY',    'BXn,^nT.afo6wJLBJ,c+lRG*]Ym-1%cMalR4O2 {FXpq;OE0=5kS7:/5_%7C&hB{' );
define( 'NONCE_KEY',        'h4Y>}MwcF((3nB;+O9!SwcslBoOP.]]3L-Xqcs()/:^J*@8~xu&;Q{`11hI5$7|c' );
define( 'AUTH_SALT',        'l0?L8m:|=Ki]Gg3y|@$^rBYi~1pSih!jb_3 >jT8/@FyJTjtets8?zUH;Sr,*SdQ' );
define( 'SECURE_AUTH_SALT', ')f0%3(WfC[!gM0j.s,&,|DlUrI~xQD,xle*O$r!^sXjPK>OOtv<i36BMl8>52g[5' );
define( 'LOGGED_IN_SALT',   '!fz4i;^k4/|(J3uxH>_EAr$FXEjn(D,m6#<I%Qq[s}D7rwcdYs?45c+qK,RcF#Hp' );
define( 'NONCE_SALT',       '[XW3;2H{ohF6owpP4dK/VNv*0b5Y%z&]e1+*G_^`RM=I_Z0jp?*9d1Th2L R?nYz' );

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
