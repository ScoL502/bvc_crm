<?php
  class index extends Controller {
   public function __construct() {
    echo "Контроллер обработки ошибок";
    parent::__construct();
    $this->view->render();
   }
   public function index() {

   }
  }
?>