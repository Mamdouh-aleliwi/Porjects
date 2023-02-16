<!DOCTYPE html>
<html>

<head>
  <title>تفاصيل الدورات </title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Cairo&family=Lemonada:wght@300&family=Noto+Naskh+Arabic&family=Poppins:ital,wght@0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Vazirmatn:wght@200;300;400&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/home_page.css">
</head>
 <body>
 <div class="header">
    <ul>
      <li><a href="Logout.php">تسجيل خروج </a></li>
    </ul>
    <a href="home_page.php"> <img src="ogo1.png" alt="logo" height="95px" width="100px"></a>
  </div>
 <div class="container1">
  <div class="card1"> 

<?php
 include 'Database_Link.php';
$id= $_GET['id'];
$sql = "select * from create_course where c_number =".$id;
$query = mysqli_query($conn,$sql);
$rslt = mysqli_fetch_row($query);
if ($rslt) {
    echo '<div class="g" align="center">';
    echo '<table border="1" width="80%" bgcolor="#cca">';
    echo '<tr align="center"><td>' . $rslt[1] . '</td></tr>';
    echo '<tr align="center"><td>' . $rslt[2] . '</td></tr>';
    echo '<tr align="center" ><td><img src="' . $rslt[3] . '" height="100"width="100"></td></tr>';
    echo '<tr align="center"><td>' . $rslt[4] . '</td></tr>';
	echo '<td align="center"><a href="home_page.php"><button class="submit">Back</button></a></td></tr>';
    echo '</table>';
}
 ?>
      </div>
      </div>
  <footer>
    <p id="p1">منصة وطنية للتدريب الإلكتروني وإحدى مبادرات صندوق تنمية الموارد البشرية هدف التي تسعى إلى تمكين
      القوى العاملة وتطوير قدراتهم ومهاراتهم</p>
    <p id="p2">جميع الحقوق محفوظة <br> برنامج دوراتي 2023 </p>
    <ul class="nav1">
      <li> <a href="#"> اتصل بنا </a></li>
      <li><a href="#">الأسئلة الشائعة</a></li>
      <li> <a href="#"> عن دوراتي </a></li>
    </ul>
  </footer>

</body>

</html>