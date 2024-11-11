<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'smmstudio2.0' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'k@&]B^I7_*W+b9%SWf-&z&+5wrPFYxX)VE0V *3CMNus`n[xOV5!JGX%sC(Zb&C8' );
define( 'SECURE_AUTH_KEY',  '$!_cuM%D?5`iG4KbK4wyPG.BFa,PlO7+-N!iQFwGt_S#1|#i@IQ6{N{PJY0pA-*7' );
define( 'LOGGED_IN_KEY',    '^W7WQ3XQZrxcAyN`Qx`$#[ZOztb~E%=}<*Sj`spZu:e+NMQ/pCE-sv|$topGjzlH' );
define( 'NONCE_KEY',        '+^5MKMg*k#52~`.UX-GZK~W6/:^ Y>aymIUtq>/XCR#,4`5)#Bvs2)slUQ`Y`qFS' );
define( 'AUTH_SALT',        'BB21$)]?|Itw{rx<ya)HB>F[HrS;xdRKG@?#}@oYB<AD^jYv),b3*XA)H^; X?EU' );
define( 'SECURE_AUTH_SALT', '0*<HYkAOryp6{3L#IyGWn:Ov)1uJU}t:Q)9t[?]Aw17&^dRcx~_!I%;&`d WWi1j' );
define( 'LOGGED_IN_SALT',   'q1h3vBh-Yj~xHTm<(nEn/#la,wMD h[c3$)Ha{$4nOxqRog^vFoRO!dEh#mf&8lU' );
define( 'NONCE_SALT',       '*-)l;Gwx8EE` m=A%^y5`K=fySZ}RhFR(w@p1qcD5K3&&ib$Dg[ucBuP7-A;uw;&' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'smmwpstudio_';

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );

/** Загрузка плагинов и обновлений без FTP. */
define('FS_METHOD', 'direct');

/* Отключение редактирования файлов в админке WP */
define('DISALLOW_FILE_EDIT', true);
