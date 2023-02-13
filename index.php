<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>responsive navbar</title>
	<meta name="viewport" content="width=device-width, initial- scale=1.0">
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script>
		$(document).ready(function(){
			$('#icon').click(function(){
				$('ul').toggleClass('show');
			});
		});

	</script>
</head>
<body>

	<nav>

		<label class="logo">designx</label>
		<ul>
			<li><a class="active" href="home.php">Home</a></li>
			<li><a href="info.php">info</a></li>
			<li><a href="login.php">login</a></li>
		</ul>
		<label id="icon">
			<i class="fas fa-bars"></i>
		</label>
	</nav>



	<img src="save.jpg" class="img-fluid" height="672" width="1440">

</body>
</html>