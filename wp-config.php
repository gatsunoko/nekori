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
define('DB_NAME', 'nekori_db');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'gatsunoko');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '54596834');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '+F2rL)atjX~-AC1[EO;7B6=z/{W;Y2)PL_+:3:&ckH0{%S2a9jhQ<IJ?)jTno![<');
define('SECURE_AUTH_KEY',  'lRT(`Isdtip^fwn!#xbbsw!C-?_YC*<~K_7!N{F&H0==+9Odf)7;fr7h-X5azw/8');
define('LOGGED_IN_KEY',    '#|~Q%2B(L;6?13T*fH>Na=4L7_qv[X!&+Nh/BZ>$Tr/Z0a>XUlz,_}JxC5+ #2Y~');
define('NONCE_KEY',        'Ub+$kUwF!rH*k>qM3= JuIkzQVELtz+dP{M=z7v+OIqO+q(;I-EcU8bWN;xd|rem');
define('AUTH_SALT',        'IC`20k4Dwzg)y!MIZ1.|~^![B?vA<Gpp $y-99{d+|`wXCwi|^SaHv$=w|f->niG');
define('SECURE_AUTH_SALT', '%|/9n7P#<b7kRf}u]eT)u2~j|{%u`;UlIz<)|1bt-gAD$2X|T]9rL1#JBJDz|D9|');
define('LOGGED_IN_SALT',   'Cgx+v-Cf[p7nW?qO/Wa=]v(*Wy?w+&T5{d^}oB4KHmcc=mIQ9S(wRrN?_I&U!Gu~');
define('NONCE_SALT',       '2isq4)#!X7D~A_|Z|=MZV=Z+I|r@|V;-Zl4ZU].Z`I&}tU.c[%8VpLk9%$W|!|tm');

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
