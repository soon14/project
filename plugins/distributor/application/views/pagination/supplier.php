<div class="main_mod_page clear">
	<p class="page_right">
		<?php if ($first_page !== FALSE): ?>
			<a class="back-first" title="首页" href="<?php echo HTML::chars($page->url($first_page)) ?>"></a>
		<?php else: ?>
			<a class="back-first" title="首页"></a>
		<?php endif ?>

		<?php if ($previous_page !== FALSE): ?>
			<a class="prev" title="上一页" href="<?php echo HTML::chars($page->url($previous_page)) ?>"></a>
		<?php else: ?>
			<a class="prev" title="上一页"></a>
		<?php endif ?>

		<span class="mod_pagenav_count">
	<?php for ($i = 1; $i <= $total_pages; $i++): ?>

		<?php if ($i == $current_page): ?>
			<a title="<?php echo $i ?>" class="current"><?php echo $i ?></a>
		<?php else: ?>
			<a title="<?php echo $i ?>" href="<?php echo HTML::chars($page->url($i)) ?>"><?php echo $i ?></a>
		<?php endif ?>

	<?php endfor ?>
		</span>

		<?php if ($next_page !== FALSE): ?>
			<a class="next"title="下一页" href="<?php echo HTML::chars($page->url($next_page)) ?>"></a>
		<?php else: ?>
			<a class="next" title="下一页"></a>
		<?php endif ?>

		<?php if ($last_page !== FALSE): ?>
			<a class="go-last" title="末页" href="<?php echo HTML::chars($page->url($last_page)) ?>"></a>
		<?php else: ?>
			<a class="go-last" title="末页"></a>
		<?php endif ?>
	</p>
</div><!-- 翻页 -->
