<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'yr_yuki');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'yr_yuki');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'kobakoba27');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'o;<m;yu=xLy/<rsf?@Q3zT+aGI,89]V>XZ{j7E-ts;;%SB>r:qutAz{Aq3z&u;gx');
define('SECURE_AUTH_KEY',  '~&ayRSiUh#%Ag;5W+HzAD$Lm#=NO>}vS_yxaIMT4|,!1r@g{~4=D,u=i3!c$]!Hd');
define('LOGGED_IN_KEY',    '$JH/K]e_9z65L2|/I[UcNao4e[e}+{dfaV7f c9Kp&Qvn]tR$F.FpZeY$3ZS)=y7');
define('NONCE_KEY',        '?:O `&Q[HiHcb@D<NFjA#;03CFzfVj=W0|W ym!,=/wfY:y,RY?)ny9r<<}6v0gB');
define('AUTH_SALT',        'Nvm}*ZizvGTZx`2$g[a WO-KW5xVRPT-|HQWmR$b)9Wt^8/7-Lfk6r4@nJjUkeKa');
define('SECURE_AUTH_SALT', 'Dj>Jf4DXP/_@v7l+gvK#E>MVds%87KKD^Lr>qd.)V4|<4ngNOda!QW}?;v 3W dD');
define('LOGGED_IN_SALT',   '72S|nAV2Y&6M#aO6+89eIU<.{6])qRyV+VeIBW^;Okn>4D?LVac8~bQ.#3xjk>(R');
define('NONCE_SALT',       'vyg/C`$7[4xRd.b:r~Ts^j!%7?^NP-2(Y~($3Kh]=ZQFH< :r#7@CU4V#]~k<D1{');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
