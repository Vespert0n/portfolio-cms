<? switch($_GET['action']) {
	case 'edit':
		$page = $portfolioCMS->getPageByFilename($_GET['filename']);
		if($page == NULL) { ?>
			<div class="jumbotron" style="margin-top: -20px;">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h1>Hmmm...</h1>
							<p>We can't seem to find that page. Use the list below to select a page</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-xs-push-2">
						<? $pages = $portfolioCMS->getPageList();
						
						if($pages == NULL) {
							include('alerts/no_pages.alert.php');
						} else {
							$listdisplay = 'edit';
							include('page_list.inc.php');
						} ?>
					</div>
				</div>
			</div>
		<? } else { ?>
			<div class="jumbotron" style="margin-top: -20px;">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h1><?=printPageName($page['pgName'], $page['pgFilename'])?></h1>
							<p>Edit your page</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<?=$page['pgContent']?>
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
						<h1>New page</h1>
						<p>Create a new page</p>
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
		$page = $portfolioCMS->getPageByFilename($_GET['filename']);
		if($page == NULL) { ?>
			<div class="jumbotron" style="margin-top: -20px;">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h1>Hmmm...</h1>
							<p>We can't seem to find that page. Use the list below to select a page</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-xs-push-2">
						<? $pages = $portfolioCMS->getPageList();
						
						if($pages == NULL) {
							include('alerts/no_pages.alert.php');
						} else {
							$listdisplay = 'delete';
							include('page_list.inc.php');
						} ?>
					</div>
				</div>
			</div>
		<? } else { ?>
			<div class="jumbotron" style="margin-top: -20px;">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h1><?=printPageName($page['pgName'], $page['pgFilename'])?></h1>
							<p>Delete your page</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-xs-push-2">
						<div class="alert alert-danger">
							<div class="text-center">
								<p>Are you sure you want to delete this page? It cannot be undone.</p>
								<a class="btn btn-danger" href="#">Yes, delete</a>
								<a class="btn btn-warning" href="<?=ADMIN_URL?>website#pages">No, take me back</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<? }
		
		break;
} ?>