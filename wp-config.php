<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
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
define( 'DB_NAME', 'David' );

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
define( 'AUTH_KEY',         'abux2dpWj{A,MJn/;fK(F4K.quK47nTA*-P10V{AK{|YF,w[[.Q]5tH%`oaNI|<|' );
define( 'SECURE_AUTH_KEY',  '0mRXq=[43-lQSl&,k2]@h{z!YwW(iA@/*cc$Y_OwzG^*yWgeV%G.7JXq5_I~;hSZ' );
define( 'LOGGED_IN_KEY',    'WOaS4|vVVA$:BGulPJs?;GNm?TReuO<t+#;mv<O_7}1qpbzAp&@zHi-/be2Vfi&F' );
define( 'NONCE_KEY',        'DWfM+4(9N5BCUzC!]NtdcC0w5:nG8k6e`Cs#z#Y#sCE5PXlCn/i~qVrdeVaR3qd3' );
define( 'AUTH_SALT',        '7E4yr58Pw,P{K)^^|EjE}I:^NlKl-FXL2g!s:J[/=HKU&,b0c;Xd:ssJt14*T[[W' );
define( 'SECURE_AUTH_SALT', 'rGK[YmKRgM#NW!lcJh*s1i,/rXy$$ 8BsGQY:y6GuZv-u8adL$Z<+,@Jg.;WqA*o' );
define( 'LOGGED_IN_SALT',   'nJrieT2L0c?]-;XUSGwf<ec(}tRd:!Hx*CCdHIbu QXn>7w?}>%:f0*b1;#juD3@' );
define( 'NONCE_SALT',       'Od*s?0Rub:/+IP{,Xa| Js$Z#qf:Uq/0.`Is`o|P2:)Iy:@1a+0}va=w_84pX0Ce' );

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
