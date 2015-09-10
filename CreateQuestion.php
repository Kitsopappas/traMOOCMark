<?php
class CreateQuestion {
public $data;
 function __construct($data, $divider=""){
   echo $divider;
   $this->data = $data;
   echo '<h2 class="lead"> Mark words to enable the popup</h2>';

   echo '<div id="test" class="lead">
       <div id="select">'. $this->data . '</div>';
 }

 function adddropDown($title){
   echo '<div class="drop_down" style="display:none;"><hr>';
   echo '<h4 class="title">'. $title .'</h4>';
 }

 function addForm($action = ""){
   echo '<form action="'. $action .'">';
 }

 function addFormElement($type, $name, $value, $info, $br=""){
   echo '<input type="'. $type .'" name="'. $name .'" value="'. $value .'">'. $info;
   echo $br;
 }

 function addBSButton($info="ADD"){
   echo '<button type="button" class="btn btn-default">'. $info .'</button>';
 }

 function closeForm(){
   echo '</form>';

 }

 function closeDiv(){
   echo '</div>';
 }

}
 ?>
