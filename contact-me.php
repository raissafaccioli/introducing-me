<?php include 'header.php' ?>

<link rel="stylesheet" href="css/contact-me.css">
<link rel="stylesheet" href="css/common.css">

<section class="form">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="contact-title">Send me a message!</h1>
				<p>I will be happy to talk to you :)</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<form action="contact-me.php" method="post">
					Your name:<br>
					<input type="text" name="name" required><br>
					Your e-mail:<br>
					<input type="email" name="email" required><br><br>
					Your message: <br>
					<textarea rows="4" cols="50" name="message" placeholder="Tell me something..." required></textarea>
					<br><br>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</div>

	<?php 
		
		// Function responsible for cleaning variables values 
		function clear_input($input) {
			$input = trim($input);
			$input = stripslashes($input);
			$input = htmlspecialchars($input);
			return $input;
		}

		// Recieve form inputs, clean it and send it to database
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			
			$name = clear_input($name);
			$email = clear_input($email);
			$message = clear_input($message);

			include 'connection.php';
			$sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

			if ($connection->query($sql)) {
				include('success-template.html');
			} else {
				echo 'Errrrrrrouuuu';
				echo '<br>';
				echo mysqli_error($connection);
			}
		}
	?>
</section>

<?php include 'footer.php'; ?>