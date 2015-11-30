<ul class="list-group">
	<? foreach($pages as $page) { ?>
		<li class="list-group-item">
			<a class="delete-button" href="<?=ADMIN_URL?>page/delete/<?=$page['pgFilename']?>" title="delete"><i class="fa fa-trash-o hover"></i></a>
			<a class="edit-button" href="<?=ADMIN_URL?>page/edit/<?=$page['pgFilename']?>" title="edit"><i class="fa fa-file-text-o hover"></i></a>
			<a href="<?=BASE_URL.$page['pgFilename']?>" target="_blank">
				<? if($page['pgName'] != NULL || $page['pgName'] != '') { ?>
					<?=$page['pgName']?> <small>(<?=$page['pgFilename']?>)</small>
				<? } else { ?>
					<?=$page['pgFilename']?>
				<? } ?>
			</a>
		</li>
	<? } ?>
</ul>