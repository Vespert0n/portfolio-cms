<? require_once('portfolio-cms/config.inc.php');
require_once('portfolio-cms/start.class.php');

if(!isset($portfolioCMS) || (isset($portfolioCMS) && !is_a($portfolioCMS, 'portfolioCMS')))
	$portfolioCMS = new portfolioCMS();

$collections = $portfolioCMS->getCollections(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$portfolioCMS->getWebsiteData('siteTitle')?></title>
	
	<script src="<?=JQUERY_URL?>"></script>
	
	<link rel="stylesheet" href="<?=BOOTSTRAP_URL?>css/bootstrap.min.css">
	<script src="<?=BOOTSTRAP_URL?>js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="<?=CSS_URL?>main.css">
</head>
<body data-spy="scroll" data-target="#sidebar">
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#admin-nav" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?=ADMIN_URL?>"><?=$portfolioCMS->getWebsiteData('siteTitle')?></a>
			</div>
			<div class="collapse navbar-collapse" id="admin-nav">
				<ul class="nav navbar-nav">
					<li class="<?=($page == 'website')?'active':'';?>"><a href="<?=ADMIN_URL?>website">Website</a></li>
					<? foreach($collections as $collection) { ?>
						<li class="<?=($page == $collection['colURL'])?'active':'';?>"><a href="<?=ADMIN_URL.$collection['colURL']?>"><?=$collection['colName']?></a></li>
					<? } ?>
				</ul>
			</div>
		</div>
	</nav>