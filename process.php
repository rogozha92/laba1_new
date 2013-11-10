<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
	<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$firstName = $_POST["firstName"];
			$lastName = $_POST["lastName"];
			$sex = $_POST["sex"];
			switch ($sex) {
				case "male":
					$sex = "Мужской";
			 		break;
					
				case "female":
					$sex = "Женский";
			 		break;
					
				default:
					$sex = "Мужской";
			 		break;
			}
			
			$hobbies = array();
			if (isset($_POST["hobbies"]["football"])) {
				$hobbies[] = "Футбол";
			}
			if (isset($_POST["hobbies"]["volley"])) {
				$hobbies[] = "Волейбол";
			}
			if (isset($_POST["hobbies"]["hockey"])) {
				$hobbies[] = "Хоккей";
			}
			if (isset($_POST["hobbies"]["another"])) {
				$hobbies[] = "Другой";
			}
			
			if (count($hobbies) > 0) {
				$hobbies = implode(", ", $hobbies);
			} else {
				$hobbies = "Нет увлечений";
			}
			
			if (isset($_POST["pro"]) && $_POST["pro"] == "yes") {
				$pro = "Да";	
			} else {
				$pro = "Нет";
			}
	?>
	
	Ваши данные:
	<div id="mainForm">
		<div>
			<b>Ваше имя:</b> <?php echo $firstName; ?>
		</div>
		
		<div>
			<b>Ваша фамилия:</b> <?php echo $lastName; ?>
		</div>
		
		<div>
			<b>Ваш пол:</b> <?php echo $sex; ?>
		</div>
		
		<div>
			<b>Ваши увлечения:</b> <?php echo $hobbies; ?>
		</div>	
		
		<div>
			<b>Занимались ли Вы профессионально спортом?:</b> <?php echo $pro; ?>
		</div>
	</div>
	<?php 
		}
	?>
</body>
</html>