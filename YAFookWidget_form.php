<style>
	.yafook-cols { display: table; table-layout: fixed; width: 100%; }
	.yafook-cols > * { display: table-cell; vertical-align: middle; }
	.yafook-cols label { white-space: nowrap; }
	label.yafook-ignored { opacity: 0.4; }
</style>

<p><label>
	Title:
	<input type="text" class="widefat" value="<?= esc_attr($instance['title']) ?>"
		name="<?= $this->get_field_name('title') ?>">
</label></p>
<hr>

<p><label class="yafook-cols">
	<span>Fanpage address:</span>
	<input type="url" class="widefat" value="<?= esc_attr($instance['fanpageURL']) ?>"
		required name="<?= $this->get_field_name('fanpageURL') ?>">
</label></p>

<p><label class="yafook-cols">
	<span>Box height (px):</span>
	<input type="number" min="70" class="widefat" value="<?= esc_attr($instance['height']) ?>"
		name="<?= $this->get_field_name('height') ?>">
</label></p>

<p><label class="yafook-cols <?= is_customize_preview() ? 'yafook-ignored' : '' ?>"
	title="<?= is_customize_preview() ? 'This value is ignored in preview mode.' : '' ?>">
	<span>Loading delay (ms):</span>
	<input type="number" min="0" class="widefat" value="<?= esc_attr($instance['loadingDelay']) ?>"
		name="<?= $this->get_field_name('loadingDelay') ?>">
</label></p>

<p class="yafook-cols">
	<label>
		<input type="checkbox" class="checkbox" name="<?= $this->get_field_name('tabTimeline') ?>"
			<?php checked($instance['tabTimeline']) ?> >
		Timeline
	</label>
	<label>
		<input type="checkbox" class="checkbox" name="<?= $this->get_field_name('tabEvents') ?>"
			<?php checked($instance['tabEvents']) ?> >
		Events
	</label>
	<label>
		<input type="checkbox" class="checkbox" name="<?= $this->get_field_name('tabMessages') ?>"
			<?php checked($instance['tabMessages']) ?> >
		Messages
	</label>
</p>

<p>
	<label>
		<input type="checkbox" class="checkbox" name="<?= $this->get_field_name('showCover') ?>"
			<?php checked($instance['showCover']) ?> >
		Show cover photo in header
	</label>
	<br>
	<label>
		<input type="checkbox" class="checkbox" name="<?= $this->get_field_name('showFriends') ?>"
			<?php checked($instance['showFriends']) ?> >
		Show friends who like it too
	</label>
	<br>
	<label>
		<input type="checkbox" class="checkbox" name="<?= $this->get_field_name('showCTA') ?>"
			<?php checked($instance['showCTA']) ?> >
		Show call-to-action button
	</label>
	<br>
	<label>
		<input type="checkbox" class="checkbox" name="<?= $this->get_field_name('smallHeader') ?>"
			<?php checked($instance['smallHeader']) ?> >
		Use smaller header
	</label>
</p>