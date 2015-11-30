<? include('config.inc.php');

/**
 * usort() function to sort pages by name
 * (using their filename if no name exists)
 * 
 * @param first page $a
 * @param second page $b
 * @return strcmp() result
 */
function compareByNameElseFilename($a, $b) {
	$aID = ($a['pgName'] != NULL || $a['pgName'] != '') ? $a['pgName'] : $a['pgFilename'];
	$bID = ($b['pgName'] != NULL || $b['pgName'] != '') ? $b['pgName'] : $b['pgFilename'];
	
	return strcmp($aID, $bID);
}

function printPageName($name, $filename) {
	if($name != NULL || $name != '')
		return $name." <small>(".$filename.")</small>";
	else
		return $filename;
}