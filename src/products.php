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
	

</body>
<script>
		$(document).ready(function() {

var arr1=[];
			function display(arr) {
			console.log(arr);



			html = "<table><tr><th>ID</th><th>Image</th><th>Name</th><th>Price</th><th>Quantity</th></tr>";

			for (var i = 0; i < arr.length; i++) {
				html += "<tr><td>" + arr[i][0] + "</td><td>" + arr[i][1] + "</td><td>" + arr[i][2] + "</td><td>" + arr[i][3] + "</td><td>" + arr[i][4] + "</td><td><input type='text' id='text" + i + "'></td><td><input type='button' value='Edit' onclick='edit1(" + i + ")'></td><td><input type='button'  value='delete'  onclick='deleteData1(" + i + ")'></td></tr>";


			}
			html += "</table>";
			document.getElementById("display").innerHTML = html;


		}

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
						
						arr1=data;
						display(arr1);
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
						
						arr1=data;
						display(arr1);
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
						
						arr1=data;
						display(arr1);
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
						
						arr1=data;
						display(arr1);
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
						arr1=data;
						display(arr1);
					}
				});
			}); //add function



		}); //ready function
	</script>

</html>