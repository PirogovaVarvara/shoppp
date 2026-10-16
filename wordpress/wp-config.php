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
define( 'DB_NAME', 'shop' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'varvara' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'opaLkklpo12.6' );

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
define( 'AUTH_KEY',         '8FA2<3Oq_Y[Qm2x~GD!jsMxEFS|8I|4hluqMQx}ns<lgJVCWV~;<.MH8rx3 ENBL' );
define( 'SECURE_AUTH_KEY',  'RpXTFf2Z{VM+TLL13ywx}(42/kMh1Q%PO6U-9Fj=7?}@R;R[7#=|.ghtNcqr2wkA' );
define( 'LOGGED_IN_KEY',    'd5NImO-Jc!MiHybvVMiS(.tWCrp6lpi*=JtC1:T@K~U&?{RHhu/$?V oaol!tm&l' );
define( 'NONCE_KEY',        'Ip/+)VJkz(1-AXpM~f(4qrSxf+O-4*VD#sw.U<No`<nZ]w(M*rRAoV.xmVDT|RN>' );
define( 'AUTH_SALT',        'F=D-?r<#$>K[`pkK]r#,u[|B~FqlBM=Am]8)J])?eY,>#A84W^V8P,o[]`m*}&$&' );
define( 'SECURE_AUTH_SALT', '~0WM`|Nv/a0ghrg:;Zce>EyC,+W)Rj%7%$h}DQMF%W/x~pLttom !!&%HP4bVR$z' );
define( 'LOGGED_IN_SALT',   'n~%<L_t-Q<]FJ <ThQi>Iu^B1tg-jf1A1uS)K%DnUEW)B>I?gMV_l18|kHu?{R/L' );
define( 'NONCE_SALT',       ']9WE`}sR=t6enqKnUN~4A2$U+xU%vjVHaevLWez)k.`a4K{v@2r+W z(/6LL>7`c' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
