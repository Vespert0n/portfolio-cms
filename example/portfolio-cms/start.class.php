<? require_once('config.inc.php');
require_once('functions.inc.php');

define('QUERY', 'QUERY');
define('RESULT', 'RESULT');
define('ROW', 'ROW');
define('NUM_ROWS', 'NUM_ROWS');

/**
 * Main functions class for PortfolioCMS framework
 * @author Drew Collins <drew@drewcollins.me>
 * @copyright Copyright (C) 2015, Drew Collins
 * @version v0.1
 */
class portfolioCMS {
	public $db_link;
	
	function __construct() {
		$this->db_link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		
		if(mysqli_errno($this->db_link))
			echo mysqli_error();
	}
	
	/**
	 * Handles all SQL queries
	 * @param string $sql SQL statement
	 * @param string $return_type What data to return (RESULT, ROW, NUM_ROWS, QUERY)
	 * @return mixed
	 */
	function sqlQuery($sql, $return_type) {
		$result = mysqli_query($this->db_link, $sql);

		if(mysqli_errno($this->db_link)) {
			echo "MySQLi Error: ".mysqli_error($this->db_link);
		}
		
		switch ($return_type) {
			default:
			case RESULT:
				$result_array = array();
				while($row = mysqli_fetch_array($result)) {
					$result_array[] = $row;
				}
				
				return $result_array;
				break;
			case ROW:
				return mysqli_fetch_assoc($result);
				break;
			case NUM_ROWS:
				return mysqli_num_rows($result);
				break;
			case QUERY:
				break;
		}
	}
	
	
	/* * * * * * * * * * * * * *
	 *  Website Data Functions *
	 * * * * * * * * * * * * * */
	
	function getWebsiteData($dataType) {
		$sql = "SELECT * FROM webdata
				WHERE webDataName = '$dataType'";
		$row = $this->sqlQuery($sql, ROW);
		return $row['webDataContent'];
	}
	
	
	/* * * * * * * * * * * * * *
	 *      Page Functions     *
	 * * * * * * * * * * * * * */
	
	function getPageList() {
		$sql = "SELECT * FROM pages";
		$pages = $this->sqlQuery($sql, RESULT);
		
		// usort() only works on arrays with multiple values
		// so only sort it if there is more than one page
		if(count($pages) > 1) {
			usort($pages, 'compareByNameElseFilename');
		}
		
		return $pages;
	}
	
	function getPage($pageid) {
		$sql = "SELECT * FROM pages
				WHERE pgPageID = $pageid";
		return $this->sqlQuery($sql, ROW);
	}
	
	function getPageByFilename($filename) {
		$sql = "SELECT * FROM pages
				WHERE pgFilename = '$filename'";
		return $this->sqlQuery($sql, ROW);
	}
	
	
	/* * * * * * * * * * * * * *
	 *  Collections Functions  *
	 * * * * * * * * * * * * * */
	
	function getCollections() {
		$sql = "SELECT * FROM collections";
		return $this->sqlQuery($sql, RESULT);
	}
	
	function getCollectionByURL($url) {
		$sql = "SELECT * FROM collections
				WHERE colURL = '$url'";
		return $this->sqlQuery($sql, ROW);
	}
	
	
	/* * * * * * * * * * * * * *
	 *     Items Functions     *
	 * * * * * * * * * * * * * */
	
	function getCollectionItems($collectionID) {
		$sql = "SELECT * FROM items
				WHERE itmCollectionID = $collectionID";
		return $this->sqlQuery($sql, RESULT);
	}
	
	function addCollectionItem($collectionID, $title, $description, $type, $data, $thumb) {
		$sql = "INSERT INTO items (itmCollectionID, itmTitle, itmDescription, itmType, itmData, itmThumbURL)
				VALUES ($collectionID, '$title', '$description', '$type', '$data', '$thumb')";
		$this->sqlQuery($sql, QUERY);
	}
} ?>