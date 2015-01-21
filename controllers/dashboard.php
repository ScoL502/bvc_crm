<?php
  class index extends Controller {
   	public function __construct() {
    	parent::__construct();
    	$this->view->load('dashboard/index.php');
    	$this->view->render();
  	}
  }
?>