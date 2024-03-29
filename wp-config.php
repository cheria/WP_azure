<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'joyhackARG3afBxF');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'b7837bb2355ca4');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'f37335aa');

/** MySQL のホスト名 */
define('DB_HOST', 'ja-cdbr-azure-east-a.cloudapp.net');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'V$;2Td+&D:Jw+hG{~HfDsW-%|+T&~iKU4,Q)*]&2*ha1xnWlXS|<sS]W=%d%9gIR');
define('SECURE_AUTH_KEY',  '-8+B|=]OYSYF~#W&,?3c_VOGp[N&yT+NM9mV.k# (>2.(S$<3E$-eHjOi9TZA!&I');
define('LOGGED_IN_KEY',    '{oP>1{H^t.P?$#u&pH9!8B@Kx3-c&,$VC[U_5u00n+O{et6ThP`@4%4lP%%E`vBd');
define('NONCE_KEY',        'oY)S!<jG6aG2Hm}/#.+Q=AWTu|8/<4-)jj3[8+?{)-+40T1b-mSmLS2T|T:[<Or5');
define('AUTH_SALT',        'T0h,v(-@F+-^21>.@ AA5$8],<RB3yOL6;$v>jARs@rhYs.=R?LV^pycd-;f;zn;');
define('SECURE_AUTH_SALT', 'FPVm]v66p(}*7CO.- ;OSzu5D, L]7O)lxk b/-h$WpQ>I-#|Vl.l{X=Co!Ol$m5');
define('LOGGED_IN_SALT',   '8J3b#V5yVX8Y3#*>zG<9WNxB;9q>5L:{#~w%n[?U9G+k|#z)6b0*G%`*iof&fQKl');
define('NONCE_SALT',       'un5qh(;34Ovn*g/V9I@o4166l8y%/yZ|&B7yzTOvqlh@9cvNJ5FtSI,|XbsSA=n3');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。たとえば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定すると、ドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
