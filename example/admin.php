<? require_once('portfolio-cms/config.inc.php');
require_once('portfolio-cms/start.class.php');

$portfolioCMS = new portfolioCMS();

if(!isset($_GET['page']) || $_GET['page'] == '')
	$page = $portfolioCMS->getWebsiteData('siteDefaultAdminPage');
else
	$page = $_GET['page'];

require_once('portfolio-cms/header.inc.php');

if($page == 'website')
	include_once('portfolio-cms/layout/website.inc.php');
else
	include_once('portfolio-cms/layout/collection.inc.php');

include_once('portfolio-cms/footer.inc.php');