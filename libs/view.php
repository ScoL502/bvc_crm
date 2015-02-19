<?php
  class View {

  public $model_view;   //Хранилище вида модели
  public $rows;         //Хранилище строк таблицы
   public function __construct() {
   	$this->main_view = file(ROOT_DIR.'/views/index.php');
   	$this->main_view = implode('',$this->main_view);
   }
   public function load($name) {
   	$this->model_view = file(ROOT_DIR.'/views/'.$name);
   	$this->model_view = implode('',$this->model_view);
    if(preg_match("/\[_while\](.*?)\[_while\]/s",$this->model_view, $this->row)) {
      $this->model_view=preg_replace("/\[_while\](.*?)\[_while\]/s",'[_rows]',$this->model_view);
    }
    $this->main_view = str_replace('[_content]', $this->model_view, $this->main_view);
   }
   public function set($name, $value) {
    $this->main_view = str_replace($name,$value,$this->main_view);
   }
   public function row($array) {
    $this->tmp = $this->row[1];
    foreach ($array as $key => $value) {
      $this->tmp = str_replace("[_".$key."]",$value,$this->tmp);
    }
    $this->rows .= $this->tmp;
   }
   public function render() {
    $dir = ROOT_DIR;
    $this->main_view = str_replace('[_ROOT_DIR]', $dir, $this->main_view);
    $this->main_view = str_replace('[_rows]', $this->rows, $this->main_view);
    echo $this->main_view;
   }
  }
?>