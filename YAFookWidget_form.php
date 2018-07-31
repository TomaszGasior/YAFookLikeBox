<style>
	fieldset.yafook { border-bottom: 1px solid rgba(0,0,0, 0.1); }
	details.yafook { margin: 1.1em 0; }
	details.yafook summary { cursor: pointer; margin-bottom: 0.6em; }
	.yafook-cols { display: table; table-layout: fixed; width: 100%; }
	.yafook-cols > * { display: table-cell; vertical-align: middle; }
</style>

<fieldset class="yafook">
	<p><label>
		Title:
		<input type="text" class="widefat" value="<?= esc_attr($instance['title']) ?>"
			name="<?= $this->get_field_name('title') ?>">
	</label></p>
</fieldset>

<fieldset class="yafook">
	<p><label class="yafook-cols">
		<span>Fanpage address:</span>
		<input type="url" class="widefat" value="<?= esc_attr($instance['fanpageURL']) ?>"
			name="<?= $this->get_field_name('fanpageURL') ?>">
	</label></p>

	<p><label class="yafook-cols">
		<span>Box height (px):</span>
		<input type="number" min="0" class="widefat" value="<?= esc_attr($instance['height']) ?>"
			name="<?= $this->get_field_name('height') ?>">
	</label></p>

	<p><label class="yafook-cols">
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
			Show cover (header background)
		</label>
		<br>
		<label>
			<input type="checkbox" class="checkbox" name="<?= $this->get_field_name('showFriends') ?>"
				<?php checked($instance['showFriends']) ?> >
			Show friends
		</label>
		<br>
		<label>
			<input type="checkbox" class="checkbox" name="<?= $this->get_field_name('showCTA') ?>"
				<?php checked($instance['showCTA']) ?> >
			Show CTA
		</label>
		<br>
		<label>
			<input type="checkbox" class="checkbox" name="<?= $this->get_field_name('smallerHeader') ?>"
				<?php checked($instance['smallerHeader']) ?> >
			Smaller header
		</label>
	</p>
</fieldset>

<details class="yafook">
	<summary>See preview</summary>

	<?php $this->_render($instance) ?>
</details>