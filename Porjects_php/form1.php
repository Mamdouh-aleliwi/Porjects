<html>
<head>
    <title>منصتي </title>
</head>
<body>
    <div align="center"  dir="rtl" >
        <h2>تحميل الدورات </h2>
        <form action="web1.php" method="POST" enctype="multipart/form-data" >
            <lable>اسم الدوره : </lable><input type="text" name="brand">
			<br><br>
            <lable>اسم المدرب : </lable><input type="text" name="model">
			<br><br>
			
			<lable>مدتها : </lable><select name="ram">
			<option value="4h">4h</option> 
			<option value="6h">6h</option>
			<option value="8h">8h</option>
			<option value="10h">10h</option>
			</select>
			
			<br><br>
			<lable>تاريخ بداية الدورة : </lable>
			<input type="radio" name="col" value="2023/1">
			<lable>2023/1 </lable>
			<input type="radio" name="col" value="2023/2">
			<lable>2023/2 </lable>
			<input type="radio" name="col" value="2023/3">
			<lable>2023/3 </lable>
			<input type="radio" name="col" value="2023/4">
			<lable>2023/4 </lable>
			
			<br><br>
			<lable> متطلبات الدوره : </lable>
			<input type="checkbox" name="opt[]" value="درجه الثانوي ">
			<lable> درجه الثانوي  </lable>
			<input type="checkbox" name="opt[]" value="درجة دبلوم ">
			<lable> درجة دبلوم  </lable>
			<input type="checkbox" name="opt[]" value="درجة بكالوريوس">
			<lable>درجة بكالوريوس  </lable>
			<br><br>
			
			<input type="file" name="myfile"><br><br>
			
			<input type="submit" name="submit" value="ارسال">

        </form>
		<?php
		if (isset($_POST["submit"])){
			
			echo "Brand: ".$_POST["brand"]."<br>";
			echo "Model: ".$_POST["model"]."<br>";
			echo "Ram: ".$_POST["ram"]."<br>";
			echo "Color: ".$_POST["col"]."<br>";
			foreach ($_POST["opt"] as $v){
				echo $v." ";
			}
			echo "<br>";
			$img_loction='img/';
			$img_name= basename($_FILES["myfile"]["name"]);
			$img_path = $img_loction . $img_name;
			move_uploaded_file ($_FILES["myfile"]["tmp_name"],$img_path);
			echo '<img src="'.$img_path.'">';
			
		}
		
		?>
		
    </div>
</body>
</html>