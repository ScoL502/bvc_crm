<?php
  class request extends Controller {
   	public function __construct() {
    	parent::__construct();
      $this->select = new select();
      $this->menu = new menu();
      $this->menu = $this->menu->create('request');
      $this->view->set('[_menu]', $this->menu);
  	}

  	public function index() {
      $this->view->load('request/request_index.php');
      $contragents = $this->select->create('contragents','0','form-control');
      $this->view->set('[_contragent]',$contragents);
  		$result= $this->db->mysqli->query("SELECT * FROM `requests`");
      while($line=$result->fetch_assoc()) {
        $this->view->row($line);
      }
      $this->view->render();
  	}
    public function addnew() {
      $this->view->load('request/request_add.php');
      $contragents = $this->select->create('contragents','0','form-control');
      $this->view->set('[_contragent]',$contragents);
      $this->view->render();
    }
    public function add(){
      $request = $_POST['request'];
      //$req_number = $request['number'];
      $req_client = $request['contragents'];
      $req_am =$request['am'];
      $req_adress_load = $request['adress_load'];
      $req_adress_unload = $request['adress_unload'];
      $req_shipper = $request['shipper'];
      $req_consignee = $request['consignee'];
      $req_cargo_name = $request['cargo'];
      $req_cargo_weight = $request['weight'];
      $req_cargo_size = $request['volume'];
      $req_executor = $request['perfomer'];
      $req_driver = $request['driver'];
      $req_note = $request['note'];
      $req_date = $request['date'];
      //$this->db->mysqli->query("INSERT INTO `test` (name) VALUES ($req_number)");
      $this->db->mysqli->query('INSERT INTO `requests` (req_client,req_am,req_adress_load,req_adress_unload,req_shipper,req_consignee,req_cargo_name,req_cargo_weight,
        req_cargo_size,req_executor,req_driver,req_note,req_date) VALUES ("'.$req_client.'","'.$req_am.'","'.$req_adress_load.'","'.$req_adress_unload.'","'.$req_shipper.'","'.$req_consignee.'","'.$req_cargo_name.'",
        "'.$req_cargo_weight.'","'.$req_cargo_size.'","'.$req_executor.'","'.$req_driver.'","'.$req_note.'","'.$req_date.'")');
      //print_r($request);
      header('Location: index');
      //echo $this->db->mysqli->error;
    }
  }
?>