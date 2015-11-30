<? require_once('config.inc.php');
require_once('start.class.php');

$menus = $portfolioCMS->getMenuList();
$last_level = 0;

$menu_string = '<ul class="nav navbar-nav">';

foreach($menus as $menu) {
	$level = $menu['meLevel'];
	$parent = ($menu['meRight'] == $menu['meLeft'] + 1) ? false : true;
	$child = ($level > 1) ? true : false;
	
	if($menu['meType'] == 'page') {
		$page = $portfolioCMS->getPage($menu['mePageID']);
		$url = BASE_URL.str_replace(".php", "", $page['pgFilename']);
		
		if($this_page_id == $menu['mePageID']) {
			$active = 'active';
			$current = ' <span class="sr-only">(current)</span>';
		} else {
			$active = '';
			$current = '';
		}
	} else {
		$url = $menu['meURL'];
	}
	
	/* If this menu's level is smaller than the previous
	 * menu's then close off the dropdown menu list
	 */
	if($level < $last_level) {
		$menu_string .= '</ul></li>';
	}
	
	/* If this menu is a parent then make it a dropdown menu */
	if($parent == true) {
		$menu_string .= '<li class="dropdown '.$active.'">';
	} else {
		$menu_string .= '<li class="'.$active.'">';
	}
	
	$menu_string .= '<a href="'.$url.'">'.$menu['meName'].$current.'</a>';
	
	/* If this menu is a parent then add a dropdown menu list */
	if($parent == true) {
		$menu_string .= '<ul class="dropdown-menu">';
	} else {
		$menu_string .= '</li>';
	}
	
	$last_level = $level;
}

while($last_level > 1) {
	$menu_string .= '</ul></li>';
	$last_level--;
}

$menu_string .= '</ul>';