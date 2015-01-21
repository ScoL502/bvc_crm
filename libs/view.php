<?php
  class View {
   public function __construct() {
   	$this->main_view = file(ROOT_DIR.'/views/index.php');
   	$this->main_view = implode('',$this->main_view);
   }
   public function load($name) {
   	$this->model_view = file(ROOT_DIR.'/views/'.$name);
   	$this->model_view = implode('',$this->model_view);
   }
   public function render() {
    echo $this->main_view;
   }
  }
?>