<a href="/posts/"> posts</a>
<? foreach ($cats as $cat) :?>
	<li>
	<a href="/categories/view/<?=$cat['Category']['id']?>">
		<?=$cat['Category']['title']?></a>
	</li>

<? endforeach; ?>
<? debug($cats); ?>
