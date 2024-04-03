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
define( 'DB_NAME', 'kamanas' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'kamanas_admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'Kamanas3000!' );

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
define( 'AUTH_KEY',         '5@S~^V*GUHf*O`.]A)F-APab[FZ=#J+hUcrY)RU{mU5!5Sy>bG]Z@qY`Db_2hk?J' );
define( 'SECURE_AUTH_KEY',  '5yZlkpFML060cDtaIGBTL3PROyvG#U}C+ds:n~KQQ@:pNLq)m#ab;|9Khy_FAw2o' );
define( 'LOGGED_IN_KEY',    '/w)2.NZU-a5cbfyakZgL(`MY}fqV&n`R6WTbj]M_YL8HX;/!{H^/>r@r0sMU{Im;' );
define( 'NONCE_KEY',        '-x34vdE/Q/;XeqgBJI^HjWR@4xLeI|BpBzm.o/,%ulit3(ir![stI<x[DPfhbLH+' );
define( 'AUTH_SALT',        'x@Nm0J#o-cxStt0k6bED23AHG<]dHH om;:mX2h)ut6o0G+wDr`s&h6US&QI0[SW' );
define( 'SECURE_AUTH_SALT', '%CgKTJCb&z,!~fA0l&x#/lZ~ZICa-v}8,7]t8m+V!j%)c<4)iS dPK^|5Z[`5H/_' );
define( 'LOGGED_IN_SALT',   'm)=)?9Wy]wdQ1;nHtFT;R!<}bu*C Xm_;c].b@) Wi$<g1g_g~no6>&?+i*oVXqw' );
define( 'NONCE_SALT',       '!wq$FBY Rd(GPeDPq|U:^:{7HW2t{Y[6.2f5in ^(p/vHPaM!V*0`7O|D[qFSitM' );

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
