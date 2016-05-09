<?php
	require_once 'connect.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Clockwise</title>
		<link rel="stylesheet" type="text/css" href="style/index.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,600italic,600' rel='stylesheet' type='text/css'>
	</head>
	<body>

		<div id="pagehead">
			<div id="titletext">Clockwise. Time management on point.</div>
			<div id="registerform">
				<img src="assets/Logo.svg"/>
				<form action="php/register.php" method="post">
					<ul>
						<li><input type="text" 		placeholder="Username" 	name="username"	class="textinput" /></li>
						<li><input type="password" 	placeholder="Password" 	name="password"	class="textinput"/></li>
						<li><input type="text" 		placeholder="E-Mail" 	name="e-mail"		class="textinput" /></li>
						<li><input type="submit"	value="Register Now"	name="register"/></li>
						<li><a href="#pagebody">  <!--TODO add action for script to show pop up -->
							Already have an account?
						</a></li>
					</ul>
				</form>
			</div>
			<div class="experiencemore">
				<a>Experience more!</a>
				<img src="assets/Arrow_Down.svg"/>
			</div>
		</div>

		<div id="pagebody">

			<div class="cards">
  				<div class="card">
    				<div class="card-image">
      					<img src="assets/Garbiel.jpg" alt="">
    				</div>
    				<div class="card-copy">
      					<p>Work on collaborative projects wherever you are with cloud based services.</p>
    				</div>
  				</div>

  				<div class="card">
    				<div class="card-image">
      					<img src="assets/Garbiel.jpg" alt="">
    				</div>
    				<div class="card-copy">
      					<p>Manage you time effectively and share the work with your team members.</p>
    				</div>
  				</div>

				<div class="card">
					<div class="card-image">
						<img src="assets/Garbiel.jpg" alt="">
					</div>
					<div class="card-copy">
				    	<p>Never miss out on the things that need to be done with collaborative task management.</p>
					</div>
				</div>

				<div class="card">
    				<div class="card-image">
      					<img src="assets/Garbiel.jpg" alt="">
    				</div>
    				<div class="card-copy">
      					<p>Get an overview of all the work that you and you team have accomblished to do.</p>
    				</div>
  				</div>

  				<div class="card">
    				<div class="card-image">
      					<img src="assets/Garbiel.jpg" alt="">
    				</div>
    				<div class="card-copy">
      					<p>Access Clockwise from any device you want. Everyhing is done in your browser.</p>
    				</div>
  				</div>

				<div class="card">
					<div class="card-image">
						<img src="assets/Garbiel.jpg" alt="">
					</div>
					<div class="card-copy">
				    	<p>Powered by young developers that are always pushing for new features.</p>
					</div>
				</div>
			</div>
			<div class="experiencemore">
				<a>See who made all of this!</a>
				<img src="assets/Arrow_Down.svg"/>
			</div>
		</div>

		<div id="footer">
			<div id="profiles">
				<div class="profile">
					<img src="assets/Garbiel.jpg">
					<p>Gabriel Asherov</p>
				</div>
				<div class="profile">
					<img src="assets/Bart.jpg">
					<p>Michael Bart</p>
				</div>
				<div class="profile">
					<img src="assets/Max.jpg">
					<p>Maximilian<br>Meyer-Mölleringhof</p>
				</div>
				<div class="profile">
					<img src="assets/Jonas.jpg">
					<p>Jonas Neumair</p>
				</div>
			</div>
			<!--<div>Icons made by <a href="http://www.flaticon.com/authors/dave-gandy" title="Dave Gandy">Dave Gandy</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>-->
		</div>

		<script type="text/javascript" src="js/jquery-2.2.3.min.js"/>
		<script type="text/javascript" src="js/style.js"/>
	</body>
</html>