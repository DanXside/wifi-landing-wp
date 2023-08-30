<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wifi_landing' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'm1EM9+KjsICwsI2vTEd5[WVi3P&`)t*AxvkdyH>7hRs:dUL|dhmLHbi+FW=JP&qm' );
define( 'SECURE_AUTH_KEY',  '%}8-0Zk*7D]FiCz5<6wqy],uf[;| ?!c{Y!G_*5JOU[nKX3i@,Z(2;d$LaO7$?I[' );
define( 'LOGGED_IN_KEY',    'qg=D,~L`:Fc(vJ#wHt~Hz/=k5d)gP-Hgv/*9Juvt#GRl%{*YrH?OT{eKy((r<+qV' );
define( 'NONCE_KEY',        '<s,eE!x4Y9_ox<b&O<$)}@7ok*=yM8I0&<Al0*Uv6aGx`R8bPS,a}QhSV yQ_-4S' );
define( 'AUTH_SALT',        'A^-a)q5-FBi#q+X>.6I#eO08H{=aL%ZoH,BP`J!-{WqZ$r2M(UH.7-q(e[2gGuZ.' );
define( 'SECURE_AUTH_SALT', 'p13= ^L%oEavx+%-.unsmFSeJ-I1R)$Bp:lO?lP]rQ$WTq{ce5QD4/GU}Sl^>>?$' );
define( 'LOGGED_IN_SALT',   '$Na9e|fyo ylj@#%$gSU ;o/a7iGObafg@UyL(,@H67!B!C<J1DIOy+m7hb~NYs_' );
define( 'NONCE_SALT',       'i@{yKw}qnIzHNv}c4J+)2~%G?rMW4`TAf1=:h4w,K-]@$ek}KB0>]c^X#eqd&h_W' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
