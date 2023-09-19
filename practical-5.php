<?php 
   function ravi(){
    static $x = 11;
    $x++;
    return '<option value="'.$x.'">'.$x.'</option>';
   }

   function raj(){
    $html = '';
    $html .= "<label>select yoyr age : </label>";
    $html .= '<select name="age" id="age">';
    $html .=  ravi();
    $html .=  ravi();
    $html .=  ravi();
    $html .=  ravi();
    $html .=  ravi();
    $html .=  ravi();
    $html .=  ravi();
    $html .=  '<select/>';
    echo $html;
   }
   raj();


?>