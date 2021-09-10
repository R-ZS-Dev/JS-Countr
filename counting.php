<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Count Project</title>
</head>
<body class="container">
	<h1 class="text-center text-warning">Office Info</h1>
	<div class="row justify-content-center p-5">

		<div class="col-lg-4 border border-warning p-3 bg-light text-center"><img src="project.png" style="height: 50px; width: 50px;"> <b class="num" style="font-size: 40px;">100</b><br><b>Project</b></div>

		<div class="col-lg-4 border border-warning p-3 bg-secondary text-center"><img src="employee.jpg" style="height: 70px; width: 100px;"> <b class="num text-white" style="font-size: 40px;">200</b><br><b class="text-white">Employee</b></div>

		<div class="col-lg-4 border border-warning p-3 bg-info text-center"><img src="branch.png" style="height: 70px; width: 100px;"> <b class="num text-white" style="font-size: 40px;">350</b> <br><b>Branchies</b></div>

	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script>
		jQuery(document).ready(function($)
		{
		$('.num').counterUp({
   		 delay: 10,
   		 time: 1999
		});
			});
</script>
</body>
</html>