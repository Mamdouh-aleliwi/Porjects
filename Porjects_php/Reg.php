<!DOCTYPE html>
<html>
<head>
    <title>أنشاء حساب</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Lemonada:wght@300&family=Noto+Naskh+Arabic&family=Poppins:ital,wght@0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Vazirmatn:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reg.css">
</head>
<body>
<div class="header">
        <ul>
            <li><a href="#"></a></li>
         </ul>
       <a href="#"><img src="ogo1.png" alt="logo" height="100px" width="100px" ></a>
    </div>
    <div class="container">
 <h2 class="label">انشاء حساب</h2>
 <form class="box" action="reg.php" method="post">
<?php

$m1= $m2= $m3= $m4 = $m5 =" ";

include 'Database_Link.php';

if (isset($_POST['submit'])){ 
    $name = $_POST['name'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];

    if(empty($name)){
        $m1 = ' ادخل الاسم ';
    }    
    if(empty($username)){
        $m2 = 'ادخل اسم المستخدم ';
    }
    if(empty($pass)){
        $m3 = 'ادخل كلمة المرور ';
    }
    if(empty($pass2)){
        $m4 = 'اعد كتابة كلمة المرور';
    }

    if($m1 ==" " && $m2 == " " && $m3 == " " && $m4==" " ){
        if ($pass !== $pass2 ){
    
            $m5 ='تاكد من تطابق كلمة المرور';
    }
        else{
            $sql = "insert into user (name,username1,password) values ('$name','$username','$pass')";
            $query = mysqli_query($conn,$sql);
            if ($query) {
                echo 'تم أنشاء حساب ';
                echo header('location:Login.php');
}
}
}       
}

    ?>

<input class="text" type="text" name="name" placeholder="الاسم "><?php echo $m1; ?><br><br>
<input class="text" type="text" name="username" placeholder="اسم المستخدم"> <?php echo $m2; ?><br><br>
<input class="text" type="password" name="pass" placeholder="ادخل كلمة المرور"><?php echo $m3; ?><br><br>
<input class="text" type="password" name="pass2" placeholder=" اعادة كلمة المرور "><?php echo $m4 ;?><br><br> 
 <input class="submit" type="submit" name="submit" value="انشاء حسابك"> <br><br><?php echo $m5 ;?>
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