<?php
  class Error extends Controller {
   public function __construct() {
    echo "Контроллер обработки ошибок";
    parent::__construct();
    $this->view->render();
   }
  }
?>