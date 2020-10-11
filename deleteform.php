<?php

mysql_connect("localhost","root","");
mysql_select_db("facebook_apps");

$id=$_POST['sel_record'];


$sql="DELETE from register_detail  
where userid='$id' ";

$result=mysql_query($sql);

if($result){
echo"user deleted successfully";
}

else{
echo
"sorry no delete";
}

?>