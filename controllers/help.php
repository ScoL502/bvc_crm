<?php
  class Help extends Controller {
   public function __construct() {
    parent::__construct();

   }

   public function index($arg = false) {
	$this->view->render();
   }
  }
?>