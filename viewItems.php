 <?php
	include 'src/config.php';
?>
<!DOCTYPE html>


<html>
	<head>
		<!--add a title (a)-->
		<title>My Shopping Cart</title>
		
		<link rel="stylesheet" href="src/styles/styles.css"/>
		
	</head>
	
	<body>
		<!--add a logo (b)-->
		<img class="logo" src="src/images/cart.png" width="200" height="200">
		
		<!--add a header (c)-->
		<h1 id="head1"><center>Shopping Cart</center></h1>
			
		<!--add a sub-header (c)-->
		<h2 id="head2"><center>The online shopping store</center></h2>
		
		<!--add a horizontal line (d)-->
		<hr>
		
		<!--add a horizontal menu (e)-->
		<ul class="menu">
			<li class="menuli"><a href="#"> Home </a></li>
			<li class="menuli"><a href="News.html">News</a></li>
			<li class="menuli"><a href="register.html">Contact</a></li>
			<li class="menuli"><a href="about.php">About</a></li>
		</ul>
		
		<!--add a table (f)-->
		<button  onclick="location.href='addItems.html'"> Add New</button>
		<div class="productData" style="margin:5px 50px 5px 50px;">
		<table border="1" cellpadding="4" cellspacing="0" width="100%">
			<tr>
				<th class="pname">Item Name</th>
				<th >Description</th>
				<th> Price</th>
				
			</tr>
			<?php
			
			$sql="SELECT * FROM item";
			$result=$conn->query($sql);
			
			if($result->num_rows>0){
				
				while($r=$result->fetch_assoc()){
					
					$edit="'editRecord.php?id=".$r['Item_id']."'";
					$delete="'deleteRecord.php?id=".$r['Item_id']."'";
					echo '
							<tr>
								<td class="pname">'.$r['Item_name'].'</td>
								<td >'.$r['Item_description'].'</td>
								<td >'.$r['price'].'</td>';
								if($r['image']!=null ){
									echo'
								<td><img src="itemImages/'.$r['image'].'" width="200" height="200"></td>
							';
								}else{
									echo '<td></td>';
								}
					echo '		</tr>';
					
				}
				
			}
			
			?>
			
			
			
		</table>
		</div>
		<!--add a horizontal line (d)-->
		<hr>
		<!--add a footer (g)-->
		
			<p class="footer">Created by : Supun Manchanayaka</p>
		<center>	<a href="https://courseweb.sliit.lk/" target="_blank">Visit to our course</a>
		</center>
	</body>

</html>