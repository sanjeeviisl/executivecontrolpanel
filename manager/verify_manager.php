<?php
/*include 'connect_updated.php'; */
include 'unified_dbconnect.php';
    
$phone_no   = isset($_POST['manager_phone']) ? $_POST['manager_phone'] : 8800213260;
$manager_mail   = isset($_POST['manager_mail']) ? $_POST['manager_mail'] : "AAAAAAAAAA";

//$query = " SELECT * FROM executive_manager_details WHERE  mobile_no = '$mobile_no'  AND  manager_mail = '$manager_mail' ";

$query = " SELECT * FROM executive_manager_details WHERE  mobile_no = '$phone_no'  ";

$result =mysqli_query($link,$query);
if($result)
{
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$mobile_no_db = $row['mobile_no'];
 
//echo $row['mobile_no'] ;

if(strcmp($mobile_no_db,$phone_no)== 0)
    echo "OK";
else
    echo "NOK";
}
else
{
  echo mysql_error;
}

?>
