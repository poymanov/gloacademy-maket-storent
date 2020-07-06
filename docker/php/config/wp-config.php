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
define( 'DB_NAME', 'maket_storent' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'user' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '123qwe' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '|viy3CEK-QlfKJ6Ek1q3Yi*,M1CL^}M]wniTBUL;Vgp,4Z#iZRS|hoj}H9&%dzlq' );
define( 'SECURE_AUTH_KEY',  'N[;LIqBS|+Gj2xEf47A*5gLtv:9,(a@I-;eK/|+#48BA|la_YN|6yT[fg,CNons[' );
define( 'LOGGED_IN_KEY',    'G}X07:a/yLL|tB]O2A8.eAGh0uFzG#Y`QvH*mhwoMQkXde``z+}5A,4`AM >AMlG' );
define( 'NONCE_KEY',        'dpHt(l`/K3ETw{x}.Q,-JgTd)2m3Q0>j*CO*8zM3A{:=slkO[9rppKMP8bf.&I&v' );
define( 'AUTH_SALT',        '<y>{R7,-{G)>t$:}mJOS/fK:Zqc,9GhljowY]{|r.mNuP~A+-i1_,8$rA~_zQ8ud' );
define( 'SECURE_AUTH_SALT', '%tHyR/AnD}68r_s-O=Gk/`h:8xkOWGICl0)O6=$U649~9|Bsiq2 i<uA+e+)N|Cr' );
define( 'LOGGED_IN_SALT',   '!QrUI}d}-/I,mBl3f*3k9EU%]Z`0jA8HP< oJyi+FKnzVtlcaI0UXY_XXet#~ngn' );
define( 'NONCE_SALT',       '@t#Z-[.7yM^TkdK8*kH&F.e-{q;<J#d7(nV@Hu=w~]C8bwH&e)KXG(1CkwyB)(;w' );

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
