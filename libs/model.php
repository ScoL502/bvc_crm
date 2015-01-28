<?php
  class Model {

  public $db;

   public function __construct() {
    $db = Database::getDB();
   }

  }
?>