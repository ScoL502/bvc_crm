<?php
  class dashboard extends Controller {
   	public function __construct() {
    	parent::__construct();
    	$this->view->load('dashboard/index.php');
  	}

  	public function index() {
  		$this->view->set('[_name]','Валовая выручка:');
  		$this->view->render();
  	}
  }
?>