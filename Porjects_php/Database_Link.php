<?php
// الربط مع قاعدة البيانات
 
 $conn = mysqli_connect("localhost","root","","project");
 if (!$conn) {
 die("error".mysqli_connect_error());
}
 ?>
 