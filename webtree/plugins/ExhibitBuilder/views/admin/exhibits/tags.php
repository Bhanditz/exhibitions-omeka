<?php head(); ?>

<h1>Exhibit Tags</h1>

<div id="primary">
<?php if (!empty($tags)): ?>
	<?php
	echo tag_cloud($tags, uri('exhibits/browse/'));
	?>
<?php else: ?>
	<h2>There are no tags to display.  You must first tag some items.</h2>
<?php endif; ?>
</div>
<?php foot(); ?>