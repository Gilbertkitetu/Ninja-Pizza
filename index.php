<?php
include('config/db_connect.php');
//Querying
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

//make quey and get results
$result = mysqli_query($conn, $sql);

//fetch the resulting rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free results from memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);
//print_r($pizzas);

 ?>

 <!DOCTYPE html>
 <html>



 <?php include('templates/header.php'); ?>

 <h4 class="pizza">Pizzas!</h4>
 <div class="container">
 	<div class="row">
 		<?php foreach ($pizzas as $pizza) : ?>
 			<div class="columns">
 				<div class="card">
 					<img src="#" class="img">
 					<div class="cardc">
 						<h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
 						<ul>
 							<?php foreach (explode(',', $pizza['ingredients']) as $ing): ?>
 								<li><?php echo htmlspecialchars(
 									$ing); ?></li>
 								<?php endforeach; ?>
 						</ul>
 						<!--<div><?php #echo htmlspecialchars($pizza['ingredients']); ?></div>
 					</div>-->
 					<div class="cardAction">
 						<a href="details.php?id=<?php echo $pizza['id'] ?>">More info</a>
 					</div>
 				</div>
 			</div>
 		
 		<?php endforeach; ?>

<?php if(count($pizzas) >= 3){ ?>
<p>There are 2 or more pizzas</p>
<?php }else{ ?>
<p>There are less than 3 pizza</p>
<?php } ?>

 	</div>
 </div>
 
 <?php include('templates/footer.php'); ?>
 
 </html>
