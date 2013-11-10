<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
	<b>Заполните форму:</b>
	<form action="process.php" method="POST" id="mainForm">
		<div>
			Ваше имя: <p><input type="text" name="firstName">
		</div>
		
		<div>
			Ваша фамилия: <p><input type="text" name="lastName">
		</div>
		
		<div>
			Ваш пол: 
			<p><select name="sex">
				<option value="male">Мужской</option>
				<option value="female">Женский</option>
			</select>
		</div>
		
		<div>
			Любимый вид спорта: 
			<br>
			<input type="checkbox" name="hobbies[football]"> Футбол
			<br>
			<input type="checkbox" name="hobbies[volley]"> Волейбол
			<br>
			<input type="checkbox" name="hobbies[hockey]"> Хоккей
			<br>
			<input type="checkbox" name="hobbies[another]"> Другой
		</div>	
		
		<div>
			Занимались ли Вы профессионально спортом?:
			<br><input type="radio" name="pro" value="yes"> Да
			<br><input type="radio" name="pro" value="no"> Нет
		</div>
		
		<div>
			<input type="submit" value="Отправить">
		</div>
	</form>
</body>
</html>