<?php

include 'Database_Link.php';
 $id = $_GET['id'];
 echo $id;

$sql ="delete from create_course where c_number=".$id;
$query = mysqli_query($conn,$sql);
if ($query) {
echo'<script>';
echo 'alert("تم الحذف الدورة");';
echo'window.location.href="home_page.php";';
echo'</script>';
}