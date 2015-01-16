<?php include 'includes/header.php'; ?>
<section class="main-content">
	<section>
	<h2>Membership</h2>
		<p>Please fill out the membership information below. Regular Membership is $35.00 (USD).Subscription period: 1 year. No recurring payments</p>
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
		</form>
	</section>
</section>

<aside>
	<h3>Join today!</h3>
	<p>Member of the PS SIGCHI receive these opportunities:</p>
	<ul>
		<li>Access to complete PS SIGCHI event presentation slides and videos in the For Members section</li>
		<li>Networking with other UX professionals in the For Members section</li>
		<li>Discounted or free workshop and tutorial pricing</li>
		<li>Online Profile</li>
		<li>Member Directory</li>
		<li>Discussion Forum</li>
		<li>Members' library of videos, conference proceedings, and workbooks</li>
		<li>The Puget Sound SIGCHI LinkedIn Group</li>
	</ul>
	
</aside>



<?php include 'includes/footer.php'; ?>