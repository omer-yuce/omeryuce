<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'omeryuce_db' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Lr#FGu5?rVw^dju_2$*JzA)[o4E$ptFN{EV;k8*vvj-=!;zk-1HW p`W`p;DU5|q' );
define( 'SECURE_AUTH_KEY',  'Rl?Q|%ri8(?>w>/W47C-}|uCd7BXzkD8zr8qcA4c_ijX*vDM}zF/sI8R;%FV(/K3' );
define( 'LOGGED_IN_KEY',    'VC2/f>UY5pWo*WxQhY&r5C5*mu?dcm s$y(S_ &K@m/0&4]bHrDKz. d;{!X=.Ul' );
define( 'NONCE_KEY',        '}}l?2:%>odRe)wopi/$g/]|5h4z7e2~/x[J/u@r$(iw^w)Yjrk1xp6K72E:YYi_;' );
define( 'AUTH_SALT',        '>* ~/{Ew7Du1`Xi@Lh*!>T|@=mA;2Tj#AFeZh%C&yJ4:}Mp.$:n. h~m0?J)lr,}' );
define( 'SECURE_AUTH_SALT', 'zhHGt(NOaNvi^x*}ZO3^tJA7fIFm*=xeMU6Fl=o999T3jR8YL$3K%A0v[&]?5LWI' );
define( 'LOGGED_IN_SALT',   'R2el,M;wVf|t^Ts&{OK$}8},<|t0OJtU4?MjoPZK3*UGnjk~hvFb8Xl3=U8jm+7R' );
define( 'NONCE_SALT',       'sC!9lDom:2H,}-/tk5k;SS7p:ZK%n=.ITvoSPI+YgMr2o<csp#h]EWP2M@,|N_76' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
