<? switch($_GET['action']) {
	case 'edit':
		$menu = $portfolioCMS->getMenu($_GET['menuid']);
		if($menu == NULL) { ?>
			<div class="jumbotron" style="margin-top: -20px;">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h1>Hmmm...</h1>
							<p>We can't seem to find that menu. Use the list below to select a menu</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-xs-push-2">
						<? $menus = $portfolioCMS->getMenuList();
						
						if($menus == NULL) {
							include('alerts/no_menus.alert.php');
						} else {
							$listdisplay = 'edit';
							include('menu_list.inc.php');
						} ?>
					</div>
				</div>
			</div>
		<? } else {
			if($menu['meType'] == 'page') {
				$page = $portfolioCMS->getPage($menu['mePageID']);
				$url = BASE_URL.str_replace(".php", "", $page['pgFilename']);
			} else {
				$url = $menu['meURL'];
			} ?>
			<div class="jumbotron" style="margin-top: -20px;">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h1><?=$menu['meName']?> <br class="visible-xs"><small class="smaller"><a href="<?=$url?>" target="_blank"><?=$url?></a></small></h1>
							<p>Edit your menu</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						
					</div>
				</div>
			</div>
		<? }
		
		break;
	case 'new': ?>
		<div class="jumbotron" style="margin-top: -20px;">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h1>New menu</h1>
						<p>Create a new menu</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
				
				</div>
			</div>
		</div>
		<? break;
	case 'delete':
		$menu = $portfolioCMS->getMenu($_GET['menuid']);
		if($menu == NULL) { ?>
			<div class="jumbotron" style="margin-top: -20px;">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h1>Hmmm...</h1>
							<p>We can't seem to find that menu. Use the list below to select a menu</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-xs-push-2">
						<? $menus = $portfolioCMS->getMenuList();
						
						if($menus == NULL) {
							include('alerts/no_menus.alert.php');
						} else {
							$listdisplay = 'delete';
							include('menu_list.inc.php');
						} ?>
					</div>
				</div>
			</div>
		<? } else {
			if($menu['meType'] == 'page') {
				$page = $portfolioCMS->getPage($menu['mePageID']);
				$url = BASE_URL.str_replace(".php", "", $page['pgFilename']);
			} else {
				$url = $menu['meURL'];
			} ?>
			<div class="jumbotron" style="margin-top: -20px;">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h1><?=$menu['meName']?> <br class="visible-xs"><small class="smaller"><a href="<?=$url?>" target="_blank"><?=$url?></a></small></h1>
							<p>Delete your menu</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-xs-push-2">
						<div class="alert alert-danger">
							<div class="text-center">
								<p>Are you sure you want to delete this menu? It cannot be undone.</p>
								<a class="btn btn-danger" href="#">Yes, delete</a>
								<a class="btn btn-warning" href="<?=ADMIN_URL?>website#menus">No, take me back</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<? }
		
		break;
} ?>