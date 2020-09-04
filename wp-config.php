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
define( 'DB_NAME', 'matihouse' );

/** Username của database */
define( 'DB_USER', 'matihouse' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '123' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'aM:|A3?8mDyEJgBTN.M7%:RDh&L X+qmc$/;Z/BsL0C#W}gz9F>qwtJ3g/}&9&Jo' );
define( 'SECURE_AUTH_KEY',  '*d[nh7:3JK$a})pn(r/+|tCb)&xntSTo#2)D(PT0DLKUw=sl$n1nXE;uTv/@!L0P' );
define( 'LOGGED_IN_KEY',    '|*(_~[mG(N#3J+GMP#V4a#.=3H|By&]09FQ2:vZD2Uh !6klFd:Vn8J!0~i_YUh6' );
define( 'NONCE_KEY',        '%mP-LD 0boMY?p]REVm&q`56X%{vn!knsOp^cHI;n|@d]SX-:d5utCxO2;/ClP3Q' );
define( 'AUTH_SALT',        '(xTn<o@+s]$5/i~&=g`UG{9qpV65?Kz,)M:C.oE$c>D6:c4yq^B{AYJ|&A4}L7E/' );
define( 'SECURE_AUTH_SALT', 'tZB!SI0=WCAq{2iatyU=;3=/f L5ogiDpKFa5OMr:/Vg87`o>j*mCz#T)4#em|Qa' );
define( 'LOGGED_IN_SALT',   'EWSL{u|jQbu#7T|G+>Ud!O0p@BgueVj5gOr:OTCSt01.VPZlVPg-v*^kzoQIfK)o' );
define( 'NONCE_SALT',       '(`D1Rr2.qN4x%3hc-Yu6EUOJSPFhYuzdFo[kav&5?GvTjceX7|@(-^$Bs(_@_kS@' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

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
