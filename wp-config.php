<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'wp');

/** MySQL数据库用户名 */
define('DB_USER', 'wanglong');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'whereIs@940207');

/** MySQL主机 */
define('DB_HOST', '127.0.0.1');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');


/** ftp setting **/
define("FS_METHOD","direct");
define("FS_CHMOD_DIR",0777);
define("FS_CHMOD_FILE",0777);


/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'B:{X,t*.#SkmZ&tLWgaom9gfoL@-au%iJqn/Gt3?+I!; |-zzz(pq^:M2|(ua:3n');
define('SECURE_AUTH_KEY',  '^/s1[Ga76F 8(5>2<3RX.?WSL6[h}#qbgu 0AFP|,zO~K9sco#?DnF9[iAI%?`5H');
define('LOGGED_IN_KEY',    '77;fa(t%1NAEbj;0<~qwAF__%Roytpj~>g7K0Z`ZUz*%e}JJc_6sr(W|3{uE5[x%');
define('NONCE_KEY',        '|SX%OYE/k8pQpl`QjG6&hk5C{E< K@^N^?>z|<aV5gF/!J5|i~_u9@;0Hsr_HKMV');
define('AUTH_SALT',        'MsUuHLh%nZuF*_pLk?Pf3|YDpKy{y[PnV(J#hfum|`>:pZST1 h$MI,u:d;p*G,[');
define('SECURE_AUTH_SALT', 'YQm{ Q4l;u.}r IsOA5~#)4KQE,6u&%RafY6A2tyg5=fS@)>XF{:O.8~;W$|,]a!');
define('LOGGED_IN_SALT',   'Mz)mCx#W.#.CFMMBXxaO:j*fberij2h/:na:*w[TE/ZHE_O+UOwK7.ggISQ4Vwgt');
define('NONCE_SALT',       'Hq;f,(Jp}rJ,:5BZ6ogVhQ{Mc<3?Au-{WHV{^B{#lQz<E>; $6aG)&a8YTyL283W');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
