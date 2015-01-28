<?php
class select extends Model{
	public $select;
	public function __construct() {
    	parent::__construct();
    	$this->db = Database::getDB();
  }

	public function create($dbtable, $sid, $class) {
		$result= $this->db->mysqli->query("SELECT * FROM `$dbtable`");
		$line=$result->fetch_assoc();
		$this->select .= "<select id=".$dbtable." name=".$dbtable." class=".$class.">";
		do {
			if($sid!=$line['id']) {
				$this->select .= "<option value=\"".$line['id']."\">".$line['name']."</option>";
			}
			else {
				$this->select .= "<option value=\"".$line['id']."\" selected>".$line['name']."</option>";
			}
		}
		while($line=$result->fetch_assoc());
		$this->select .= "</select>";
	return $this->select;
	}
}
?>