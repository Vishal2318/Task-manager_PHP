<?php

include './config/constants.php';
error_reporting(0);
$id =$_GET['id'];
$query ="DELETE from tbl_list where id='$id'";
$data =mysqli_query($con,$query);
if($data){
    echo "<head><script>alert('Deleted successfuly')</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=./manage-list.php'>";

}else{
    echo "not deleted";
}

?>