<?php  
	require 'connect.php';


	if(isset($_POST['singlebutton'])){
	
$name       = stripslashes($_POST['name']);
$id     = stripslashes($_POST['id']);
$phone      = stripslashes($_POST['phone']);
$vehicle        = stripslashes($_POST['vehicle']); 
$installer  = stripslashes($_POST['installer']);
$installerphone = stripslashes($_POST['installerphone']);
$category       = @json_encode($_POST['car']);
$sound      = @json_encode($_POST['checkboxes']);

# Construct a query
$sql = "INSERT INTO users
(name, identity, phone, vehicle, installer_name, installer_phone, category,installer_sound)
VALUES('$name','$id', '$phone', '$vehicle', '$installer', '$installerphone', '$category', '$sound')";

if(mysql_query($sql)){
  echo "success";
  header("Location: index.php?mode=success");
}
  else{
        echo "nothing";
  }
}

 ?>