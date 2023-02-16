<!DOCTYPE html>
<html>

<head>
  <title>الدورات المتاحه</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Cairo&family=Lemonada:wght@300&family=Noto+Naskh+Arabic&family=Poppins:ital,wght@0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Vazirmatn:wght@200;300;400&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/home_page.css">
</head>
<?php
session_start();
?>

<body>
  <div class="header">
    <ul>
      <li><a href="Logout.php">تسجيل خروج </a></li>
    </ul>
    <a href="#"> <img src="ogo1.png" alt="logo" height="95px" width="100px"></a>
  </div>
 <div class="container">
  <div class="card"> 
      
      <?php
      include 'Database_Link.php';

      if (isset($_SESSION['name'])) {


        $name = $_SESSION['name'];
        $level = $_SESSION['level'];
        
        echo "<h2 align='center'>" . 'Welcome ' . $name ."</h2>";


        $sql = "select * from create_course";
        $query = mysqli_query($conn, $sql);
        echo '<h2 align="center"> الدورات المتاحه </h2>';
        echo '<table border="2" width="95%" align="center" bgcolor="#cca">';
        echo '<tr align="center"><th> القسم </th><th> الدورة </th><th> رسوم </th><th> صورة </th><th> تفاصيل </th>';
        if($level ==1) {
         echo '<th> حذف </th> <th> تعديل </th> ';
        }
        echo '</tr>';
        while ($row = mysqli_fetch_row($query)) {
          $sql1 = "select c_num from Course_sections where c_num =" . $row[4];
          $query2 = mysqli_query($conn, $sql1);
          $row1 = mysqli_fetch_assoc($query2);
          echo '<tr align="center">
          <td width="15%">' . $row1['c_num'] . '</td>';
          echo '<td width="15%">' . $row[1] . '</td>';
          echo '<td width="15%">' . $row[2] . '</td>';
          echo '<td width="15%"><img src="' . $row[3] . '" width="80" height="80"></td>';
          echo '<td width="15%"><a href="detalis.php?id=' . $row[0] . '"><button class="submit" >Detalis</button></a></td>';
          if($level ==1){
          echo '<td width="15%"><a href="delete.php?id=' . $row[0] . '"><button class="submit" >Delete</button></a></td>';
          echo '<td width="15%"><a href="update.php?id=' . $row[0] . '"><button class="submit" >Update</button></a></td></tr>';
          }
          echo '<br>';
        }

        echo '</table>';
      } else {
        header('location:Login.php');
      }
      ?>
      <div class="g"></div>
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