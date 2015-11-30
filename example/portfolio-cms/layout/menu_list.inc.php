<? switch($listdisplay) {
	case 'edit': ?>
		<ul class="list-group">
			<? foreach($menus as $menu) { ?>
				<li class="list-group-item menu-level-<?=$menu['meLevel']?>">
					<a href="<?=ADMIN_URL?>menu/edit/<?=$menu['meMenuID']?>"><?=$menu['meName']?></a>
				</li>
			<? } ?>
		</ul>
		<? break;
	
	case 'delete': ?>
		<ul class="list-group">
			<? foreach($menus as $menu) { ?>
				<li class="list-group-item menu-level-<?=$menu['meLevel']?>">
					<a href="<?=ADMIN_URL?>menu/delete/<?=$menu['meMenuID']?>"><?=$menu['meName']?></a>
				</li>
			<? } ?>
		</ul>
		<? break;
	
	default: ?>
		<ul class="list-group">
			<? foreach($menus as $menu) { ?>
				<li class="list-group-item menu-level-<?=$menu['meLevel']?>">
					<a class="delete-button" href="<?=ADMIN_URL?>menu/delete/<?=$menu['meMenuID']?>" title="delete"><i class="fa fa-trash-o hover"></i></a>
					<a class="edit-button" href="<?=ADMIN_URL?>menu/edit/<?=$menu['meMenuID']?>" title="edit"><i class="fa fa-file-text-o hover"></i></a>
					<i class="fa fa-arrows hover-pointer"></i>
					<?=$menu['meName']?>
				</li>
			<? } ?>
		</ul>
		<? break;
} ?>