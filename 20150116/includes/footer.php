
<footer >

		<i class="fa fa-facebook fa-2x"></i>
		<i class="fa fa-twitter fa-2x"></i>
		<i class="fa fa-linkedin fa-2x"></i>
		<i class="fa fa-pinterest fa-2x"></i>	
		<p id="copy">&copy; <?php echo date("Y"); ?></p>
	
		<h2>Contact Us</h2>
		<form id="join-form" action="" method="post">
			<p>
				<label for="first-name">First Name:</label>
				<input type="text" id="first-name" name="first-name" required autofocus>
				<span class="error"></span>
			</p>
			<p>
				<label for="last-name">Last Name:</label>
				<input type="text" id="last-name" name="last-name" required>
				<span class="error"></span>
			</p>
			<p>
				<label for="email">Email Address:</label>
				<input type="email" id="email" name="email" required>
				<span class="error"></span>
			</p>
			<p>
				<label for="comments">Comments:</label>
				<textarea type="text" id="comments" name="comments" cols="25" rows="3" required></textarea>
				<span class="error"></span>
			</p>
		</form>
	
		<a href="index.php"> <img id="footer-img" src="images/logo_u80.png" alt="SigChi Logo"/></a>
		
		
	
</footer>

	
</body>
</html>