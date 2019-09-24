<?php
/**
* @link              https://andrewbarber.me
* @since             0.1
* @package           staging-bar
*
* @wordpress-plugin
* Plugin Name: RT-IT Staging Bar
* Plugin URI: https://andrewbarber.me
* Description: An internal plugin for staging WP releases.
* Version: 0.1
* Author: Andrew A. Barber
* Author URI: https://andrewbarber.me/
* License: GPLv2 or later
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain: staging-bar
**/





add_action('wp_head', 'change_bar_color');
add_action('admin_head', 'change_bar_color');
function change_bar_color() { ?>
	<style>
		#wpadminbar {
			background-color: #c4453c;
			background-image: -webkit-linear-gradient(135deg, transparent,
							  transparent 25%, hsla(0,0%,0%,.05) 25%,
							  hsla(0,0%,0%,.05) 50%, transparent 50%,
							  transparent 75%, hsla(0,0%,0%,.05) 75%,
							  hsla(0,0%,0%,.05));
			background-image: -moz-linear-gradient(135deg, transparent,
							  transparent 25%, hsla(0,0%,0%,.1) 25%,
							  hsla(0,0%,0%,.1) 50%, transparent 50%,
							  transparent 75%, hsla(0,0%,0%,.1) 75%,
							  hsla(0,0%,0%,.1));
			background-image: -ms-linear-gradient(135deg, transparent,
							  transparent 25%, hsla(0,0%,0%,.1) 25%,
							  hsla(0,0%,0%,.1) 50%, transparent 50%,
							  transparent 75%, hsla(0,0%,0%,.1) 75%,
							  hsla(0,0%,0%,.1));
			background-image: -o-linear-gradient(135deg, transparent,
							  transparent 25%, hsla(0,0%,0%,.1) 25%,
							  hsla(0,0%,0%,.1) 50%, transparent 50%,
							  transparent 75%, hsla(0,0%,0%,.1) 75%,
							  hsla(0,0%,0%,.1));
			background-image: linear-gradient(135deg, transparent,
							  transparent 25%, hsla(0,0%,0%,.1) 25%,
							  hsla(0,0%,0%,.1) 50%, transparent 50%,
							  transparent 75%, hsla(0,0%,0%,.1) 75%,
							  hsla(0,0%,0%,.1));
			background-size: 20px 20px;
			color: #f6f6f6;
			display: block;
		}
		#wpadminbar:hover {
			background: #23282d;
		}

	</style>
<?php }