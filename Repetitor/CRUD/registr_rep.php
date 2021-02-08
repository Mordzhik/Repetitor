<?php
require_once ('connect.php');
if(isset($_POST) & !empty($_POST)){
	$fname = mysqli_real_escape_string($_POST['fname']);
	$lname = mysqli_real_escape_string($_POST['lname']);
	$email = mysqli_real_escape_string($_POST['email']);
	$gender = $_POST['gender'];
	$age = $_POST['age'];

	$CreateSql = "INSERT INTO `crud` (first_name, last_name, email_id, gender, age) VALUES ('$fname', '$lname', '$email', '$gender', '$age')";
	$res = mysqli_query($connection, $CreateSql) or die(mysqli_error($connection));
	if($res){
		$smsg = "Successfully inserted data, Insert New data.";
	}else{
		$fmsg = "Data not inserted, please try again later.";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Repetitor schedule</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
 
<link rel="stylesheet" href="styles.css" >
 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
		<form method="post" class="form-horizontal col-md-6 col-md-offset-3">
		<h2>Данные репетитора</h2>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Фамилия</label>
			    <div class="col-sm-10">
			      <input type="text" name="fname"  class="form-control" id="input1" placeholder="Фамилия" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Имя</label>
			    <div class="col-sm-10">
			      <input type="text" name="lname"  class="form-control" id="input1" placeholder="Имя" />
			    </div>
			</div>
			
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Отчество</label>
			    <div class="col-sm-10">
			      <input type="text" name="lname"  class="form-control" id="input1" placeholder="Отчество" />
			    </div>
			</div>
				<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Год рождения</label>
			    <div class="col-sm-10">
			      <input type="text" name="lname"  class="form-control" id="input1" placeholder="дд.мм.гг" />
			    </div>
			</div>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Область</label>
			    <div class="col-sm-10">
			      <input type="text" name="lname"  class="form-control" id="input1" placeholder="Область" />
			    </div>
			</div>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Уровень</label>
			    <div class="col-sm-10">
			      <input type="text" name="lname"  class="form-control" id="input1" placeholder="Уровень" />
			    </div>
			</div>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Группа</label>
			    <div class="col-sm-10">
			      <input type="text" name="lname"  class="form-control" id="input1" placeholder="Группа" />
			    </div>
			</div>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Вид занятия</label>
			    <div class="col-sm-10">
			      <input type="text" name="lname"  class="form-control" id="input1" placeholder="Вид занятия" />
			    </div>
			</div>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Курс</label>
			    <div class="col-sm-10">
			      <input type="text" name="lname"  class="form-control" id="input1" placeholder="Курс" />
			    </div>
			</div>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Образование</label>
			    <div class="col-sm-10">
			      <input type="text" name="lname"  class="form-control" id="input1" placeholder="Образование" />
			    </div>
			</div>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Опыт работы или о себе</label>
			    <div class="col-sm-10">
			      <input type="text" name="lname"  class="form-control" id="input1" placeholder="о себе" />
			    </div>
			</div>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Цена</label>
			    <div class="col-sm-10">
			      <input type="text" name="lname"  class="form-control" id="input1" placeholder="Цена" />
			    </div>
			</div>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Время и неделя</label>
			    <div class="col-sm-10">
			      <input type="text" name="lname"  class="form-control" id="input1" placeholder="Время и неделя" />
			    </div>
			</div>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">E-mail</label>
			    <div class="col-sm-10">
			      <input type="email" name="email"  class="form-control" id="input1" placeholder="E-Mail" />
			    </div>
			</div>

			<div class="form-group" class="radio">
			<label for="input1" class="col-sm-2 control-label">Пол</label>
			<div class="col-sm-10">
			  <label>
			    <input type="radio" name="gender" id="optionsRadios1" value="male" checked> Муж
			  </label>
			  	  <label>
			    <input type="radio" name="gender" id="optionsRadios1" value="female"> Жен
			  </label>
			</div>
			</div>

			<div class="form-group">
			<label for="input1" class="col-sm-2 control-label">Возраст</label>
			<div class="col-sm-10">
				<select name="age" class="form-control">
					<option>Выберите</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
				</select>
			</div>
			</div>
			<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="submit" />
		</form>
	</div>
</div>
</body>
</html>