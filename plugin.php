<?php
/*
Plugin Name:  YAFookPageBox
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