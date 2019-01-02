<?php
if (isset($_POST['username'])){
  $db = array("mark","steve","bill");
  $username = $_POST['username'];
  if(!in_array($username, $db)&& $username!='')
    echo '<span class="label label-success">Username okay</span>';
   
  else 
    echo '<span class="label label-danger">Username not okay</span>';
  
}
?>