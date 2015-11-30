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
							<h1><?=$page['pgName']?></h1>
							<p>Edit your page</p>
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
		$page = $portfolioCMS->getPageByFilename($_GET['filename']); ?>
		<div class="jumbotron" style="margin-top: -20px;">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h1><?=$page['pgName']?></h1>
						<p>Delete your page</p>
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
} ?>