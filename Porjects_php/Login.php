<!DOCTYPE html>
<html>
<head>
    <title>التسجيل و الدخول </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Lemonada:wght@300&family=Noto+Naskh+Arabic&family=Poppins:ital,wght@0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Vazirmatn:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/Login.css">
</head>
<div class="header">
        <ul>
            <li><a href="#"> </a></li>
         </ul>
       <a href="#"> <img src="ogo1.png" alt="logo" height="100px" width="100px" ></a>
    </div>
<body>

<?php
  session_start();
?>
        <?php

        include 'Database_Link.php';
        $m1 = $m2 =$m3 = "";

            if (isset($_POST['submit'])) {

            $username = $_POST['username'];
            $password = $_POST['pass'];

            if (empty($username)) {
                $m1 = 'اسم المستخدم خطاء';
            }
            if (empty($password)) {
                $m2 = 'كلمة المرور خطاء';
            }
            if ($m1 == "" && $m2 == "") {
                
            $sqll = "SELECT * FROM user WHERE username1 = '$username' and password = '$password'";
            $q=mysqli_query($conn, $sqll);
            $re1=mysqli_fetch_assoc($q);
            $row = mysqli_num_rows($q);
            if ($row == 1){

           md5($_SESSION['level']=$re1['level']);
            $_SESSION['name']=$re1['name'];
    
            header('location: home_page.php');
        }
        else {
        $m3 =  "Your Login Name or Password is invalid";
        } 

            }
        }
        ?>

<div class="container">
        <h2 class="label">تسجيل دخول</h2><br>
        <form   class="box" action="Login.php" method="post">

            <input class="text" type="text" name="username" placeholder="اسم المستخدم"><?php echo $m1 ;?><br><br>
            <input class="text" type="password" name="pass" placeholder="ادخل كلمة المرور"><?php echo $m2;?><br><br>
            <a href="reg.php"><div class="btn"> انشاء حساب الان</div></a><br><br>
            <input class="submit" type="submit" name="submit" value="تسجيل دخول "> <br><br>
            <?php echo $m3; ?>
        </form>
</div>
<footer>
        <p id="p1">منصة وطنية للتدريب الإلكتروني وإحدى مبادرات صندوق تنمية الموارد البشرية هدف التي تسعى إلى تمكين 
            القوى العاملة وتطوير قدراتهم ومهاراتهم</p>
        <p id="p2">جميع الحقوق محفوظة <br> برنامج دوراتي 2023 </p>
        <ul class="nav1">
           <li> <a href="#"> اتصل بنا </a></li>
           <li><a href="#">الأسئلة الشائعة</a></li>
           <li> <a href="#">عن دوراتي </a></li>
        </ul>
    </footer>

</body>

</html>