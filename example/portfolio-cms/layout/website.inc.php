<div class="jumbotron" style="margin-top: -20px;">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Website</h1>
				<p>Manage your website's information</p>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<nav class="col-xs-3 hidden-xs" id="sidebar">
			<ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="290">
				<li><a href="#basic-info">Basic info</a></li>
				<li><a href="#pages">Pages</a></li>
				<li><a href="#menus">Menus</a></li>
				<li><a href="#settings">Settings</a></li>
			</ul>
		</nav>
		<div class="col-xs-9" id="content">
			<div>
				<h2 id="basic-info">Basic info</h2>
				<form class="form-horizontal" name="website">
					<div class="form-group">
						<label for="website-title" class="col-xs-2 control-label">Title</label>
						<div class="col-xs-10">
							<input type="text" class="form-control" name="website-title" placeholder="title" value="<?=$portfolioCMS->getWebsiteData('siteTitle')?>">
						</div>
					</div>
					<div class="form-group">
						<label for="website-oneliner" class="col-xs-2 control-label">One liner</label>
						<div class="col-xs-10">
							<input type="text" class="form-control" name="website-oneliner" placeholder="one liner" value="<?=$portfolioCMS->getWebsiteData('siteTagline')?>">
						</div>
					</div>
					<div class="form-group">
						<label for="website-description" class="col-xs-2 control-label">Description</label>
						<div class="col-xs-10">
							<textarea name="website-description" class="form-control"><?=$portfolioCMS->getWebsiteData('siteDescription')?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-2 control-label">URL</label>
						<div class="col-xs-10">
							<p class="form-control-static"><a href="<?=BASE_URL?>" target="_blank"><?=$portfolioCMS->getWebsiteData('siteURL')?></a></p>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-10 pull-right">
							<button type="button" class="btn btn-primary">Update</button>
						</div>
					</div>
				</form>
			</div>
			<div>
				<h2 id="pages">Pages</h2>
				<? $pages = $portfolioCMS->getPageList();
				
				if($pages == NULL) {
					include('alerts/no_pages.alert.php');
				} else {
					include('page_list.inc.php');
				} ?>
			</div>
			<div>
				<h2 id="menus">Menus</h2>
				<? $menus = $portfolioCMS->getMenuList();

				if($menus == NULL) {
					include('alerts/no_menus.alert.php');
				} else {
					include('menu_list.inc.php');
				} ?>
			</div>
			<div>
				<h2 id="settings">Settings</h2>
				<form class="form-horizontal" name="settings">
					<div class="form-group">
						<label for="settings-date" class="col-xs-2 control-label">Date format</label>
						<div class="col-xs-10">
							<select class="form-control" name="settings-date">
								<option value="j M, Y" <?=($portfolioCMS->getWebsiteData('siteDateFormat') == "j M, Y") ? 'selected' : '';?>><?=date("j M, Y")?></option>
								<option value="l M j, Y" <?=($portfolioCMS->getWebsiteData('siteDateFormat') == "l M j, Y") ? 'selected' : '';?>><?=date("l M j, Y")?></option>
								<option value="jS \of F, Y" <?=($portfolioCMS->getWebsiteData('siteDateFormat') == "jS \of F, Y") ? 'selected' : '';?>><?=date("jS \of F, Y")?></option>
								<option value="j/n/Y" <?=($portfolioCMS->getWebsiteData('siteDateFormat') == "j/n/Y") ? 'selected' : '';?>><?=date("j/n/Y")?></option>
								<option value="j-n-Y" <?=($portfolioCMS->getWebsiteData('siteDateFormat') == "j-n-Y") ? 'selected' : '';?>><?=date("j-n-Y")?></option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="settings-time" class="col-xs-2 control-label">Time format</label>
						<div class="col-xs-10">
							<select class="form-control" name="settings-time">
								<option value="g:i a" <?=($portfolioCMS->getWebsiteData('siteDateFormat') == "g:i a") ? 'selected' : '';?>><?=date("g:i a")?></option>
								<option value="g:i A" <?=($portfolioCMS->getWebsiteData('siteDateFormat') == "g:i A") ? 'selected' : '';?>><?=date("g:i A")?></option>
								<option value="H:i" <?=($portfolioCMS->getWebsiteData('siteDateFormat') == "H:i") ? 'selected' : '';?>><?=date("H:i")?></option>
								<option value="j/n/y" <?=($portfolioCMS->getWebsiteData('siteDateFormat') == "j/n/y") ? 'selected' : '';?>><?=date("j/n/y")?></option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="settings-default-admin" class="col-xs-2 control-label">Default admin page</label>
						<div class="col-xs-10">
							<select class="form-control" name="settings-default-admin">
								<option value="website" <?=($portfolioCMS->getWebsiteData('siteDefaultAdminPage') == "website") ? 'selected' : '';?>>Website</option>
								<? foreach($collections as $collection) { ?>
									<option value="<?=$collection['colURL']?>" <?=($portfolioCMS->getWebsiteData('siteDefaultAdminPage') == $collection['colURL']) ? 'selected' : '';?>><?=$collection['colName']?></option>
								<? } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-10 pull-right">
							<button type="button" class="btn btn-primary">Update</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>