<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('DB_NAME', 'h916jrvipia28zdx');

/** Username của database */
define('DB_USER', 'b17t0bhf0bofsplu');

/** Mật khẩu của database */
define('DB_PASSWORD', 'sn9bexzbw2hxqbsv');

/** Hostname của database */
define('DB_HOST', 'j1r4n2ztuwm0bhh5.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'BFtmf%5(79dCK.]Dt+_> a@c<L!H1)I5yzUE?`)3vc;>([8uAo4U={El[||JA.~9');
define('SECURE_AUTH_KEY',  'rabA){`|2s{$RoU%lx<s {^v g+ :;<7W $sTcEwN_;:)|q|[-?3S$&D5%H,ML$_');
define('LOGGED_IN_KEY',    ':Kk)x|yyV$+re*m1&`l/Y]#s?|x^Mpnmj)oxkQPHd+Cw/]*&^DKhV1/bb-S(|~$m');
define('NONCE_KEY',        '+{vw]!_H--IIr#j_(N=qUL!MusGn.!`@#(%$ /LJo$bo,Y$*kusE[>;n@86|cet+');
define('AUTH_SALT',        '6#p3AS_X7a!{^OyZMFY{[xGxc3Lph}=]H?!{Fy6tA3$ cl -AV2%*dL2lSs H[R/');
define('SECURE_AUTH_SALT', 'x+KfBJNZyEkh3C~f[QJ zkExdWWT]10IX,/eia)8N6alCijC#H3C+{^Q[2Svee{+');
define('LOGGED_IN_SALT',   'Q~Td++mIcZr_QD&%k%|lYI$#fs>~x_KA^v3!j(z=SF$(So(P%8^+}v+aQs%jSh;+');
define('NONCE_SALT',       'c (|=|_%771 K*Q+Ikuqg?)VlWwQ$[u<D.+Nt<n;QA(72N$T+SO^H&5?DyEtb,,H');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
