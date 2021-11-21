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
define('DB_NAME', 'u9521263_spacetripdb');

/** Имя пользователя MySQL */
define('DB_USER', 'u9521263_spacetripdb');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'jd76HYniz');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '-]SdXe|m,0-Jz.)=U8(_7p0,86Q<9*IJt#lAvBCKOzZWuR2v<7A+6$NYH2dQRTo2');
define('SECURE_AUTH_KEY',  'X]m};QyUaa]h<BuNgg#<_qG|A7vUTji8y0ZLZluXh3(<uHF0?1q>U5YiMW&/)sSj');
define('LOGGED_IN_KEY',    'p%(aH%A[A$w(..dI&@!Af2A.2Fs;+O9uIrclo=fLSR$>1kN)-2XEI m&dp:e=wjJ');
define('NONCE_KEY',        'Jg[9GtpMGi$jQq+C~G%iNs6#=r+62odo?^!K:Z5qB v$^xveN752mSAqh5~E^M_8');
define('AUTH_SALT',        '>P$ReO)mA3`kV47 xu^k@%2{D(k33Gm=D4*XOZ;Pyj{wE<>sL,67u1bhC;OTQS6k');
define('SECURE_AUTH_SALT', 'GH*;nZe{~_MaFYtR~WOvEyVzTh;j[1]}*YfytC!}(X6;t+/oSN@4P~9H8sgF?M@2');
define('LOGGED_IN_SALT',   '+oTDZEc~~;P7hO5c]WqqgD8qp/`}2Vv<A ]AS]]9[TEIt#gb}h]Xb-wR-ay$iLOU');
define('NONCE_SALT',       'xc4!6r1rl^-+EU?T/e_9nsxG0qT;:uB[S]^jX?}ZILeNio^#*)MXI@] nZ8I=dp`');

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
define('WP_DEBUG', false);

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
