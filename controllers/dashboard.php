<?php
  class dashboard extends Controller {
   	public function __construct() {
    	parent::__construct();

  	}

  	public function index() {
  		$this->view->load('dashboard/index.php');
  		$this->view->set('[_name]','Валовая выручка:');
  		$this->view->render();
  	}
  }
?>