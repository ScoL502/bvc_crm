<?php
  class Controller {
   public function __construct() {
    $this->view = new View();
   	$this->db = Database::getDB();
   	
   }
  }
?>