<?php
/*
Plugin Name:  YAFookPageBox
Domain Path:  /
Plugin URI:   https://github.com/TomaszGasior/YAFookPageBox
Description:  Yet Another FacebOOK Page Plugin for WordPress. Provides sidebars widget and standalone PHP class for developers.
Version:      2018-07-31
Author:       Tomasz Gąsior
Author URI:   https://tomaszgasior.pl
License:      WTFPL
*/

namespace YAFookPageBox;

include __DIR__ . '/FacebookPageBox.php';
include __DIR__ . '/YAFookWidget.php';

add_action('widgets_init', function(){
	register_widget(YAFookWidget::class);
});

function __($text)
{
	static $loaded = false;
	if (!$loaded) {
		load_plugin_textdomain('YAFookPageBox', FALSE, basename(__DIR__));
		$loaded = true;
	}

	return \__($text, 'YAFookPageBox');
}