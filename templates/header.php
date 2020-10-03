<?php 

session_start();



$name = $_SESSION['name'] ?? 'Guest';

//get cookie
$gender = $_COOKIE['gender'] ?? 'Unknown';

 ?>

<head>
 <title>Ninja Pizza</title>
<style type="text/css">
.btn{
  background: #cbb09c;
}
.logo{
	color:  #cbb09c;
}
form{
max-width: 460px;
margin: 20px auto;
padding: 20px;

}
.img{
	width: 100px;
	margin: 40px auto -30px;
	display: block;
	position: relative;
	top: -30px;
}
</style>
 </head>

 <body class = "grey">
 <nav class = "navigation">
 <div class = "container">
<a href="index.php" class="logo">Ninja Pizza</a>
<ul id="mobile" class="down">
  <button>
  	<li>Hello <?php echo htmlspecialchars($name); ?></li>
  	<li>(<?php echo htmlspecialchars($gender); ?>)</li>
<li><a href="add.php" class="btn">Add a Pizza</a> </li>
</button>
</ul>
 </div>
 </nav>
