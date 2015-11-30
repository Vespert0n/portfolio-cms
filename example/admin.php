<? require_once('portfolio-cms/config.inc.php');
require_once('portfolio-cms/start.class.php');

$portfolioCMS = new portfolioCMS();

if(!isset($_GET['page']) || $_GET['page'] == '')
	$page = $portfolioCMS->getWebsiteData('siteDefaultAdminPage');
else
	$page = $_GET['page'];

require_once('portfolio-cms/header.inc.php');

switch($page) {
	case 'website':
		include_once('portfolio-cms/layout/website.inc.php');
		break;
	case 'page':
		include_once('portfolio-cms/layout/page.inc.php');
		break;
	default:
		include_once('portfolio-cms/layout/collection.inc.php');
		break;
}
	

include_once('portfolio-cms/footer.inc.php');