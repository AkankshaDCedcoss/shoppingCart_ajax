<?php
session_start();
// session_destroy();
?>



<!DOCTYPE html>
<html>

<head>
	<title>
		Products
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
$("#display").append("<table><tr><th>Id</th><th>Image</th><th>Name</th><th>Price</th></tr></table>");


			$("#addtocart0").click(function() {
				console.log("In add to cart 1");
				$.ajax({
					url: 'function.php',
					type: 'POST',
					data: {
						id: '101',
						name: 'Basket Ball',
						image: 'basketball.png',
						price: '150',
						action: 'add'
					},
					dataType: 'JSON',
					success: function(data) {
						
						$.each(data, function(key, value) {
							$("#display").append("<tr><td>" + value[0] + "</td><td>" + value[1] + "</td><td>" + value[2] + "</td><td>" + value[3] + "</td></tr>");
						})

					}
				});
			}); //add function





			$("#addtocart1").click(function() {

				$.ajax({
					url: "function.php",

					type: "post",

					data: {
						id: 102,
						name: 'football',
						image: 'football.png',
						price: '120 ',
						action: 'add'

					},
					dataType: 'JSON',
					success: function(data) {
						
						$.each(data, function(key, value) {
							$("#display").append("<tr><td>" + value[0] + "</td><td>" + value[1] + "</td><td>" + value[2] + "</td><td>" + value[3] + "</td></tr>");
						})

					}
				});
			}); //add function


			$("#addtocart2").click(function() {

				$.ajax({
					url: "function.php",

					type: "post",

					data: {
						id: 103,
						name: 'soccer',
						image: 'soccer.png',
						price: '110',
						action: 'add'

					},
					dataType: 'JSON',
					success: function(data) {
						
						$.each(data, function(key, value) {
							$("#display").append("<tr><td>" + value[0] + "</td><td>" + value[1] + "</td><td>" + value[2] + "</td><td>" + value[3] + "</td></tr>");
						})

					}
				});
			}); //add function


			$("#addtocart3").click(function() {

				$.ajax({
					url: "function.php",

					type: "post",

					data: {
						id: 104,
						name: 'table-tennis',
						image: 'table-tennis.png',
						price: '150',
						action: 'add'

					},
					dataType: 'JSON',
					success: function(data) {
						
						$.each(data, function(key, value) {
							$("#display").append("<tr><td>" + value[0] + "</td><td>" + value[1] + "</td><td>" + value[2] + "</td><td>" + value[3] + "</td></tr>");
						})

					}
				});
			}); //add function


			$("#addtocart4").click(function() {

				$.ajax({
					url: "function.php",
					type: "post",
					data: {
						id: 105,
						name: 'tennis',
						image: 'tennis.png',
						price: '130',
						action: 'add'
					},
					dataType: 'JSON',
					success: function(data) {
						
						$.each(data, function(key, value) {
							$("#display").append("<tr><td>" + value[0] + "</td><td>" + value[1] + "</td><td>" + value[2] + "</td><td>" + value[3] + "</td></tr>");
						})

					}
				});
			}); //add function



		}); //ready function
	</script>




</head>

<body>
	<div id="result">

	</div>
	<?php
	include 'header.php';
	?>



	<?php
	include 'config.php';

	echo "<div id='main'>";


	$j = 0;
	foreach ($products as $key => $value) {
		echo "<div id='div2' class='productList'>
    <img src='images/" . $value['image'] . " width='20px'>
    <h3 class='title'><a href='#'>Product" . $value["id"] . "</a></h3>
    <span>Price : $ " . $value['price'] . "</span>
    <input type='submit' value='add to cart' id='addtocart" . $j . "' name='addtocart" . $j . "'>
    
    
    </div>
    ";
		$j++;
	}










	?>

	</div>

	<div id="display">

	</div>
	<?php
	include 'footer.php';
	?>
	<!-- <script>

// function display(m)
// 	  {
// 		  html='<table><tr><th>id</th><th>image</th><th>id</th><th>price</th><th>quantity</th></tr>';
// for(var i=0;i <m.length;i++)
// {
// html+='<tr><td>'+m[i].id+'</td><td>'+m[i].image+'</td><td>'+m[i].name+'</td><td>'+m[i].price+'</td><td><input type="text" name="text1" value=""></td><td><input type="submit" name="edit" value="Edit"></td><td><input type="submit" name="delet" value="Delete"></td></tr>';
// }
// html+="</table>";
// document.getElementById("display").innerHTML=html;



// 	  }






// 	</script> -->

</body>

</html>