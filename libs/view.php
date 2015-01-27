<?php
  class View {

  public $model_view;

   public function __construct() {
   	$this->main_view = file(ROOT_DIR.'/views/index.php');
   	$this->main_view = implode('',$this->main_view);
   }
   public function load($name) {
   	$this->model_view = file(ROOT_DIR.'/views/'.$name);
   	$this->model_view = implode('',$this->model_view);
   }
   public function set($name, $value) {
    $this->model_view = str_replace($name,$value,$this->model_view);
   }
   public function render() {
    $dir = ROOT_DIR;
    $this->main_view = str_replace('[_content]', $this->model_view, $this->main_view);
    $this->main_view = str_replace('[_ROOT_DIR]', $dir, $this->main_view);
    echo $this->main_view;
   }
  }
?>