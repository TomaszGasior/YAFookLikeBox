<?php

namespace YAFookPageBox;

class YAFookWidget extends \WP_Widget
{
	public function __construct()
	{
		parent::__construct('yafook_page_box', 'Fanpage on Facebook',
			['description' => 'Your fanpage\'s timeline, events list, messenger.']
		);
	}

	private function _instance($instance)
	{
		return array_merge([
			'title'        => null,

			'tabTimeline'  => true,
			'tabEvents'    => false,
			'tabMessages'  => false,

			'fanpageURL'   => '',
			'height'       => 400,
			'showCover'    => true,
			'showFriends'  => true,
			'showCTA'      => true,
			'smallHeader'  => true,

			'loadingDelay' => null,
		], $instance);
	}

	public function widget($args, $instance)
	{
		$instance = $this->_instance($instance);

		echo $args['before_widget'];

		if ($instance['title']) {
			echo $args['before_title'], apply_filters('widget_title', $instance['title']), $args['after_title'];
		}

		do_action('yafook_before_render');
		$this->_render($instance);
		do_action('yafook_after_render');

		echo $args['after_widget'];
	}

	public function form($instance)
	{
		$instance = $this->_instance($instance);

		include __DIR__ . '/YAFookWidget_form.php';
	}

	public function update($newInstance, $oldInstance)
	{
		return [
			'title'        => sanitize_text_field($newInstance['title']),

			'tabTimeline'  => isset($newInstance['tabTimeline']),
			'tabEvents'    => isset($newInstance['tabEvents']),
			'tabMessages'  => isset($newInstance['tabMessages']),

			'fanpageURL'   => sanitize_text_field($newInstance['fanpageURL']),
			'height'       => $newInstance['height'] ? (int)($newInstance['height']) : false,
			'showCover'    => isset($newInstance['showCover']),
			'showFriends'  => isset($newInstance['showFriends']),
			'showCTA'      => isset($newInstance['showCTA']),
			'smallHeader'  => isset($newInstance['smallHeader']),

			'loadingDelay' => $newInstance['loadingDelay'] ? (int)($newInstance['loadingDelay']) : false,
		];
	}

	private function _render($instance)
	{
		try {
			$FBPageBox = new FacebookPageBox;

			$tabs = 0;
			if ($instance['tabTimeline']) {
				$tabs = $tabs | FacebookPageBox::TAB_TIMELINE;
			}
			if ($instance['tabEvents']) {
				$tabs = $tabs | FacebookPageBox::TAB_EVENTS;
			}
			if ($instance['tabMessages']) {
				$tabs = $tabs | FacebookPageBox::TAB_MESSAGES;
			}
			$FBPageBox->setShownTabs($tabs);

			$FBPageBox->setFanpageURL($instance['fanpageURL']);
			$FBPageBox->setHeight($instance['height']);
			$FBPageBox->setShowCover($instance['showCover']);
			$FBPageBox->setShowFriends($instance['showFriends']);
			$FBPageBox->setShowCTA($instance['showCTA']);
			$FBPageBox->setSmallHeader($instance['smallHeader']);

			if ($instance['loadingDelay']) {
				$FBPageBox->setLoadingDelay($instance['loadingDelay']);
			}

			$CSSClass = (string)apply_filters('yafook_css_class', '');
			if ($CSSClass) {
				$FBPageBox->setCSSClass($CSSClass);
			}

			$FBPageBox->render();
		}
		catch (FacebookPageBoxException $e) {
			echo 'Error: ', $e->getMessage();
		}
	}
}
