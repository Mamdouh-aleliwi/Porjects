<!DOCTYPE html>
<html>

<head>
    <title>أنشاء قسم الدورات </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo&family=Lemonada:wght@300&family=Noto+Naskh+Arabic&family=Poppins:ital,wght@0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Vazirmatn:wght@200;300;400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/course.css">
</head>

<body>
    <div class="header">
        <ul>
            <li><a href="#"></a></li>
        </ul>
        <a href="home_page.php"><img src="ogo1.png" alt="logo" height="100px" width="100px"></a>
    </div>
    <div class="container">
    <div class="card"> 
        <div align="center" dir="rtl">
           
                
         
            <form class="box" action="Course_sections.php" method="post">
            <h2> أنشاء قسم لدورة </h2>
                <label> اسم القسم : </label>
                <input class="text" type="text" name="text1"><br><br>
                <input class="submit" type="submit" name="submit" value="أنشاء القسم"><br><br>

                <?php
                if (isset($_POST["submit"])) {
                    include 'Database_Link.php';
                    $sql = "insert into Course_sections (c_name) values('" . $_POST['text1'] . "')";
                    $query = mysqli_query($conn, $sql);
                    if ($query) {
                        echo '<br>' . 'تم أنشاء القسم ';
                    }
                }
                ?>
            </form>
        </div>
        </div>
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