<?php
$con = mysqli_connect('localhost','root','','project');
if(!$con){
  die('Unable to connect').mysqli_error($con);
}
?>