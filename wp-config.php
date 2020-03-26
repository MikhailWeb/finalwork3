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
define( 'DB_NAME', 'wp_data' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'mysql' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'y^7*8 gNgOfcQn=<P/oU=u.#tQ;3gbk(.LGjQ^I?k/iKrNU[z#su:<ivLMVSNSbY' );
define( 'SECURE_AUTH_KEY',  'f<01U<@~6ixwES.odBUEe:gh<V|<LY#JWGVE^z;m+gfT;y?R<6XpoPn|Y2(gO{,4' );
define( 'LOGGED_IN_KEY',    '`VH6)-*fS2c;^%~eiJd(v1}hqYk+n,=1_Nod|Xxpt:?H^Ry;1Pj%suctWKHTkHlp' );
define( 'NONCE_KEY',        '&oNB3G,@we,CVDlI[?pjA+bN#VMGBNYUW,K{`7bnp<UAKSW}C2+I|tk;:[(QzG-4' );
define( 'AUTH_SALT',        'AV@Ka1-Pv^@EIZtMdT9K!6 ,rL`_~[?y0K@y^CQ+02$*_WUJ0:,nnex9T}40~RU ' );
define( 'SECURE_AUTH_SALT', 'IDfh8SAZ&t+8YLyRB%HXj{)R1;g,Qi$j?_uweegh&pMq[@3zIIcKj|$$8p|Vg96.' );
define( 'LOGGED_IN_SALT',   ',%eyZ3K|Y_yN}Uqq9]y$4mxrOavuRMMSBUu1TTW^@)1qlbWSO=u~!<{?eDdG:gVv' );
define( 'NONCE_SALT',       '_N!p*^EH|r-o}vDX|H%jh/Dx&K5oi~WuMk9I<+B$h y(hbYA5h<t0cJ+$btf=Qdj' );

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
