<?php
class select extends Controller {
	public $select;
	public function __construct() {
    	parent::__construct();
  }

	public function create($dbtable, $sid, $class) {
		$result= $this->db->mysqli->query("SELECT * FROM `$dbtable`");
		$line=$result->fetch_assoc();
		$this->select .= "<select id=".$dbtable." name=request[".$dbtable."] class=".$class.">";
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
class menu extends Controller {
		public function __construct() {
    	parent::__construct();
  }
  public function create($controller) {
  	$result = $this->db->mysqli->query('SELECT * FROM `menu` WHERE controller = "'.$controller.'"');
  	while($line=$result->fetch_assoc()) {
  		$this->tmp .= "<li><a href='".$line['href']."'><span class='".$line['icon']."'></span> ".$line['name']." <span class='badge'>42</span></a></li>";
  	}
		return $this->tmp;
  }
}
?>