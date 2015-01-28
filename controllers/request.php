<?php
  class request extends Controller {
   	public function __construct() {
    	parent::__construct();
      $this->select = new select();
  	}

  	public function index() {
      $this->view->load('request/request_add.php');
  		$this->view->set('[_name]','Валовая выручка:');
  		$this->view->render();
  	}
    public function add() {
      $request = $_POST['request'];
      print_r($request);
      $this->view->load('request/request_add.php');
      $contragents = $this->select->create('contragents','0','form-control');
      $this->view->set('[_contragent]',$contragents);
      $this->view->render();
    }
  }
?>