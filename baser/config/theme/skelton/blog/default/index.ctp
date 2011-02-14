<?php
/**
 * ブログトップ
 */
$baser->css('colorbox/colorbox', null, null, false);
$baser->js('jquery.colorbox-min', false);
$baser->setDescription($blog->getDescription());
?>
<!-- blog title -->

<script type="text/javascript">
$(function(){
	if($("a[rel='colorbox']").colorbox) $("a[rel='colorbox']").colorbox();
});
</script>

<h2 class="contents-head">
	<?php $blog->title() ?>
</h2>
<!-- blog description -->
<?php if($blog->descriptionExists()): ?>
<p class="blog-description">
	<?php $blog->description() ?>
</p>
<?php endif ?>
<!-- pagination -->
<?php $baser->pagination('simple'); ?>
<?php if(!empty($posts)): ?>
<?php foreach($posts as $post): ?>
<div class="post">
	<h4 class="contents-head">
		<?php $blog->postTitle($post) ?>
	</h4>
	<?php $blog->postContent($post,true,true) ?>
	<div class="meta"> <span>
		<?php $blog->category($post) ?>
		&nbsp;
		<?php $blog->postDate($post) ?>
		&nbsp;
		<?php $blog->author($post) ?>
		</span> </div>
</div>
<?php endforeach; ?>
<?php else: ?>
<p class="no-data">記事がありません。</p>
<?php endif; ?>
<!-- pagination -->
<?php $baser->pagination('simple'); ?>
