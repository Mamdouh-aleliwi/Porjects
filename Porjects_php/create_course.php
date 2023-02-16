<!DOCTYPE html>
<html>
<head>
	<title> تفاصيل الدورة </title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cairo&family=Lemonada:wght@300&family=Noto+Naskh+Arabic&family=Poppins:ital,wght@0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Vazirmatn:wght@200;300;400&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="css/create_course.css">
</head>

<body>

	<div class="header">
		<ul>
			<li><a href="#"></a></li>
		</ul>
		<a href="home_page.php"><img src="ogo1.png" alt="logo" height="100px" width="100px"></a>
	</div>

			<?php

			//  تحقق من الارسال 
			$error1 = $error2 = $error3 = $error4 = $error5 = $error6 = "";
			if (isset($_POST["submit"])) {
				if (empty($_POST['details'])) {
					$error1 = " ادخل اسم الدورة";
				}
				if (empty($_POST['price'])) {
					$error2 = " ادخل رسوم ";
				}
				if ($_POST['text1'] == 'no') {
					$error3 = " اختار قسم الدورة";
				}
				if (empty($_FILES["photo"]["name"])) {
					$error4 = " ارفاق الصوره";
				}
				//  سحب الصورة من المستخدم
				$img_location = 'img/';
				$img_name = basename($_FILES["photo"]["name"]);
				$img_bath = $img_location . $img_name;

				$img_size = basename($_FILES["photo"]["size"]);
				$img_type = basename($_FILES["photo"]["type"]);

				if ($img_size > 2000000) {
					$error5 = 'الصوره حجمها اقل من 2 ميغا';
				}
				if (strtolower($img_type) != 'png' && $img_type != 'jpg') {
					$error6 = 'امتداد الصورة لابد ان يكون(png) او (jpg)';
				}

				if (
					$error1 == "" && $error2 == "" && $error3 == "" && $error4 == ""
					&& $error5 == "" && $error6 == ""
				) {

					include 'Database_Link.php';
					move_uploaded_file($_FILES["photo"]["tmp_name"], $img_bath);

					$sql = "insert into create_course(c_name,c_price,image,c_num) values('" . $_POST['details'] . "'," . $_POST['price'] . ",
 '" . $img_bath . "'," . $_POST['text1'] . ")";
					$query1 = mysqli_query($conn, $sql);
					if ($query1) {
			
						echo '<br>' . 'تم أنشاء الدورة ';
					}
				}
			}
?>
	
	 	<div class="container1">
			<div class="card1"> 
			
			<form class="box1" action="create_course.php" method="post" enctype="multipart/form-data">
				<h2> اضافة تفاصيل الدورة </h2>
				<input class="text" type="text" name="details" placeholder=" اسم الدورة"><font color="red">*</font><?php echo $error1; ?><br><br>
				<input class="text" type="text" name="price"  placeholder=" رسوم الدورة "><font color="red">*</font><?php echo $error2; ?><br>
				<input class="f1" type="file" name="photo">
				<font color="red">*</font><br>
				<?php echo $error4 . " " . $error5 . " " . $error6; ?><br><br>
				<select class="te" name="text1">
					<option value="no">ادخل القسم</option>
					<?php

					// ربط صفحة بصفحه اخر
					include 'Database_Link.php';

					// امر قاعدة البيانات 
					$sql = "select * from Course_sections";
					$query = mysqli_query($conn, $sql);
					$row = mysqli_fetch_row($query);

					while ($row) {
						echo '<option value="' . $row[0] . '">' . $row[1] . '</option>';
						$row = mysqli_fetch_row($query);
					}
					?>

				</select>
				<font color="red">*</font>
				<?php echo $error3 ?><br><br>

				<input class="submit" type="submit" name="submit" value="أنشاء الدورة"><br><br>
			</form>
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