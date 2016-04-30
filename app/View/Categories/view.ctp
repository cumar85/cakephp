<h2>Категория:  <?=$cat['Category']['title']?></h2>
<h3>Описание: <?=$cat['Category']['body']?></h3>

<? foreach ($cat['Post'] as $post) :?>
	<p>
		<?=$post['title']?>
	</p>
<? endforeach; ?>
<?// $html->dayOptionTag('Event/start');?>
<? debug($cat); ?>
