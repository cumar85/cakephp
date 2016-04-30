<h2>Список статей</h2>
<? foreach ($posts as $post) :?>
	<p>
		<?=$post['Post']['title']?> ||
		<a href= "categories/view/<?=$post['Category']['id']?>" >
			<?=$post['Category']['title']?>
		</a>
	</p>
<? endforeach; ?>
<? debug($posts); ?>
