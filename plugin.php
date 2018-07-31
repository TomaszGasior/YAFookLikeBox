<?php
/*
Plugin Name:  YAFookPageBox
Plugin URI:   https://github.com/TomaszGasior/YAFookPageBox
Description:  Yet Another FacebOOK Page Box plugin for WordPress. Provides widget for sidebars and standalone PHP class.
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