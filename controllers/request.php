<?php
  class request extends Controller {
   	public function __construct() {
    	parent::__construct();
  	}

  	public function index() {
      $this->view->load('request/request_add.php');
  		$this->view->set('[_name]','Валовая выручка:');
  		$this->view->render();
  	}
    public function add() {
      $this->view->load('request/request_add.php');
      $this->view->render();
    }
  }
?>