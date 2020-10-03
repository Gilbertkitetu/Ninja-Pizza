<?php 
//Ternany operators
//$score = 20;
// if($score > 40){
// 	echo 'high speed';
// } else{echo 'low speed';}
// 
// $val = $score > 40 ? 'high score' : 'low score';
// echo $val;


//Super globals
// echo $_SERVER['SERVER_NAME'] . '<br />';
// echo $_SERVER['REQUEST_METHOD'];
// echo $_SERVER['SCRIPT_FILENAME'];
// echo $_SERVER['PHP_SELF'];

//$_SESSION
if(isset($_POST['submit'])){
	
 //cookie for gender
	setcookie('gender', $_POST['gender'], time() + 86400);

	session_start();

	$_SESSION['name'] = $_POST['name'];
	//echo $_SESSION['name'];
	header('Location: index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>php tuts</title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method = "post">
	<input type="text" name="name">
	<select name="gender">
		<option value="male">Male</option>
		<option value="female">female</option>
	</select>
	<input type="submit" name="submit" value="submit">
</form>

</body>
</html>