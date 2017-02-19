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
define('DB_NAME', 'u321500864_bd');

/** Имя пользователя MySQL */
define('DB_USER', 'u321500864_bd');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '1345567172');

/** Имя сервера MySQL */
define('DB_HOST', 'mysql.hostinger.ru');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2DoN O<,pkp7q`Dn=?8{@ZA7k~,2!H:nb!CaIJpX?`X0qug&k8Wg?5G52?F^[j$(');
define('SECURE_AUTH_KEY',  '<[,dfsntmtF5!k-,80r,SIV;cw=MnSX.AzPtLjb&BT1>uO{dOX]6U8*jmh[xPebS');
define('LOGGED_IN_KEY',    'd]4=797Nfk|gnfsn5AJu%QpeP!3(@es4;>jn2kwuVS)RFE:S)<|i4d+9xfHf{qPz');
define('NONCE_KEY',        'qt(d8&-fbQ;Zau~<8 6/G4P5Ms4Fzlz/J!d6TKUY71.<F?@}ZNz%9{:frcgFM4w2');
define('AUTH_SALT',        'kMLt|[ik4(byYaE[5O!m*Z`~zu4gm$>ywvM7xo?8AfNP[q$xYs>1Ch*(IgoD}1Td');
define('SECURE_AUTH_SALT', '7~hokEfemJfbk+ZZAtUj%di9I49aj!oVboVHpF0h%@JR!>pgU]miZiFB+a48^xqB');
define('LOGGED_IN_SALT',   ',,_0 X$lQ<H#1`{QiZZM&I(-0D{h+D$Z&-t-;I!ld=w8`zT/.4hQUa>?lU!dYE8X');
define('NONCE_SALT',       'm0`af:C6+pvvN;N7Cf^{Q_zClqK-TD@`X[3<H!Kg>!SV~f|?|HfMV=0D0QD|9Bia');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
