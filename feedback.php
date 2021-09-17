<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Feedback</title>
		<!-- Fac Icon -->
		<link rel="icon" type="text/css" href="assets/img/logo.png">
		<!-- Bootstrap v4.5.3 CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<!-- fontawesome v4.7.0 CSS -->
		<link rel="stylesheet" type="text/css" href="assets/icon/css/font-awesome.min.css">
		<!-- Custom CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<style type="text/css">
			
			.text{
				/*text-align: center;*/
				font-weight: bold;
			}
			
			body{
				background-image: url(assets/img/pexels-pixabay-264547.jpg);
			background-repeat: no-repeat;
			background-size: cover; /*contain*/
			background-attachment: fixed;
			}
			.pos{
				opacity: .8;
			}
		</style>
	</head>
	<body background="assets/img/product.jpg">


		<?php


			include 'databasecon.php';

			if(isset($_POST['submit']))
			{

					$name = $_POST['username'];
					
					$email = $_POST['email'];
					$subject = $_POST['subject'];
					$feedback = $_POST['feedback'];


					$insertquery = "insert into feedback(name,email,subject,feedback) values('$name','$email','$subject','$feedback')";
						$iquery =mysqli_query ($con, $insertquery);

						if($iquery){
							?>
						<script>
							alert("Feedback is been stroed");
							location.replace("index.php");
						</script>
						<?php
					}else{
						?>
						<script>
							alert("Feedback is not been stroed");
						</script>
						<?php
					}
				}
		
					
			


			?>





		<!-- <div class="container-fluid">
								img src="" height="70%" width="100%" alt=""
		</div> -->
		<div class="container my-5 pos">
			<div class="row">
				<div class="col-md-5 offset-md-3">
					<!-- ekahane offset mane hocce se 3 ta column ke skip korbe tai from ta middle e ace -->
					<div class="card bg-info">
						<div class="card-header">
							<h2 class="text-danger text-center"> Feedback</h2>
						</div>
						<div class="card-body">
							
							<form action="#" method="post">
								<div class="form-group text-light font-weight-bold">
									<div class="form-group text-light font-weight-bold">
										<div class="form-group">
											<label for="username">Name <span class="text-danger">*</span></label>
											<input type="text" name="username" id="username" class="form-control" required placeholder="Enter Your Name">
										</div>
										<label for="email">Email Address <span class="text-danger">*</span></label>
										<input type="email" name="email" id="email"  class="form-control">
									</div>
									<div class="form-group">
										<label for="subject">Subject <span class="text-danger">*</span></label>
										<input type="text" name="subject" id="subject" class="form-control" required placeholder="Enter Your Subject">
									</div>
									<label for="address">Your Feedback <span class="text-danger">*</span></label>
									
									<textarea name="feedback" id="address" cols="30" rows="10" class="text"></textarea><br>
									
									<div class="card-footer">
										<div class="form-group">
											<button type="submit" name="submit" class="btn btn-success mx-5 my-3">Submit</button>
											<button type="reset" class="btn btn-danger mx-5 my-3">Reset</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- jquery v3.5.1 JS -->
			<script src="assets/js/jquery-3.5.1.slim.min.js"></script>
			<!-- Popper JS -->
			<script src="assets/js/popper.min.js"></script>
			<!-- Bootstrap v4.5.3 JS -->
			<script src="assets/js/bootstrap.min.js"></script>
			<!-- Main JS -->
			<script src="assets/js/main.js"></script>
		</body>
	</html>