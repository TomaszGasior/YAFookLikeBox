<?php namespace YAFookPageBox; ?>

<style>
	.yafook-plugin .columns { display: table; table-layout: fixed; width: 100%; }
	.yafook-plugin .columns > * { display: table-cell; vertical-align: middle; }
	.yafook-plugin .columns label { white-space: nowrap; }
	.yafook-plugin .columns.tabs { table-layout: auto; }
	.wp-customizer .yafook-plugin .columns.tabs > * { display: block; }
	.yafook-plugin .ignored { opacity: 0.4; }
</style>

<div class="yafook-plugin">
	<p><label>
		<?= __('Title') ?>:
		<input type="text" class="widefat" value="<?= esc_attr($instance['title']) ?>"
			name="<?= $this->get_field_name('title') ?>">
	</label></p>
	<hr>

	<p><label class="columns">
		<span><?= __('Fanpage address') ?>:</span>
		<input type="url" class="widefat" value="<?= esc_attr($instance['fanpageURL']) ?>"
			required name="<?= $this->get_field_name('fanpageURL') ?>">
	</label></p>

	<p><label class="columns">
		<span><?= __('Box height (px)') ?>:</span>
		<input type="number" min="70" class="widefat" value="<?= esc_attr($instance['height']) ?>"
			name="<?= $this->get_field_name('height') ?>">
	</label></p>

	<p><label class="columns <?= is_customize_preview() ? 'ignored' : '' ?>"
		title="<?= is_customize_preview() ? __('This value is ignored in preview mode.') : '' ?>">
		<span><?= __('Loading delay (ms)') ?>:</span>
		<input type="number" min="0" class="widefat" value="<?= esc_attr($instance['loadingDelay']) ?>"
			name="<?= $this->get_field_name('loadingDelay') ?>">
	</label></p>

	<p class="columns tabs">
		<label>
			<input type="checkbox" class="checkbox" name="<?= $this->get_field_name('tabTimeline') ?>"
				<?php checked($instance['tabTimeline']) ?> >
			<?= __('Timeline') ?>
		</label>
		<label>
			<input type="checkbox" class="checkbox" name="<?= $this->get_field_name('tabEvents') ?>"
				<?php checked($instance['tabEvents']) ?> >
			<?= __('Events') ?>
		</label>
		<label>
			<input type="checkbox" class="checkbox" name="<?= $this->get_field_name('tabMessages') ?>"
				<?php checked($instance['tabMessages']) ?> >
			<?= __('Messages') ?>
		</label>
	</p>

	<p>
		<label>
			<input type="checkbox" class="checkbox" name="<?= $this->get_field_name('showCover') ?>"
				<?php checked($instance['showCover']) ?> >
			<?= __('Show cover photo in header') ?>
		</label>
		<br>
		<label>
			<input type="checkbox" class="checkbox" name="<?= $this->get_field_name('showFriends') ?>"
				<?php checked($instance['showFriends']) ?> >
			<?= __('Show friends who like it too') ?>
		</label>
		<br>
		<label>
			<input type="checkbox" class="checkbox" name="<?= $this->get_field_name('showCTA') ?>"
				<?php checked($instance['showCTA']) ?> >
			<?= __('Show call-to-action button') ?>
		</label>
		<br>
		<label>
			<input type="checkbox" class="checkbox" name="<?= $this->get_field_name('smallHeader') ?>"
				<?php checked($instance['smallHeader']) ?> >
			<?= __('Use smaller header') ?>
		</label>
	</p>
</div>