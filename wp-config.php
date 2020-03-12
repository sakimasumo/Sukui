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
define( 'DB_NAME', 'sukui' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'wpuser' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'ni4139ko' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#E&55b+(eyvh{zBS<y5(bGO9]BP{q2Ku{emvzGLj5Sbz)bvgrO;N@hf.IpVKy[.?' );
define( 'SECURE_AUTH_KEY',  '=v%79d#Funy? xl70Jq9#6KA8-[ERbO0+A?K.{Ln=q{R@}B9^aGP%![.vj@p{a9j' );
define( 'LOGGED_IN_KEY',    'OE2N0|Illhq~SB%Z%_WoKJA*s*:/J-J*tGFaW:tGYmp+|mfQ,N7+}Q|`1Ow&nc8q' );
define( 'NONCE_KEY',        '6LAUCCo#r@J;6qkVnQ`.T^2t<] 8Qd,&XA]vv-.5HUUQ5pLk*9KMk.WeJ61s8[FE' );
define( 'AUTH_SALT',        'MzUSPcz93UP5WsJ)cI<?[%kQ%TM]*Bl!]Hzg?NIGQvQ97@|m+H]VboJ|qP=;-{$:' );
define( 'SECURE_AUTH_SALT', 'qZbHa[v.<+<HdTt]ipTfSz=LZ%I+s8C;BI#4[56S25B|yaCHr.MBriEGD!J[&cxQ' );
define( 'LOGGED_IN_SALT',   '`<x!^KA3*c,O2l>d WGgf@iqG~c3RH{~2A e1,[P0*SVL?&3)y7CZ|>]T$#jR$s2' );
define( 'NONCE_SALT',       'AUbpBvE$f]Iop60r/.(Fo$E]Iy1.q,r[*tC; ,O5RAJN G-CZyyXKP:Pr*kJ~KO6' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'sk_';

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
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
