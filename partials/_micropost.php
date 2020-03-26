
<article class="status-media media">
	<div class="pull-left">
		<img src="<?= get_avatar_url($user->email)?>" alt ="<?= $user->pseudo ?>" class="media-object"/>
	</div>
	<div class="media-body">
		<h4 class="media-heading"><?= e($user->pseudo) ?></h4>
		<p><i class="far fa-clock"></i>&nbsp<span class="need_to_be_rendered load_time strong" datetime="<?= $micropost->created_at?>"><?= e($micropost->created_at)?></span></p>
		<?= nl2br(e($micropost->content));?>
	</div>
</article>