<?php
	include ('layout_manager.php');
	include ('content_function.php');
?>
<html>
<head><title>Geeks Diva Prototype</title>
<style>
h2 {
  padding-top: 270px;
  padding-right: 30px;
}
ul{
	padding-bottom: 30px;
}

</style>
</head>
<link href="/forum-tutorial/styles/main.css" type="text/css" rel="stylesheet" />
<body>
	<div class="pane">
		<div class="header"><h1><a href="/forum-tutorial"> <b style="font-size:50;">Secret BestFriend</b></a></h1></div>
		<div class="loginpane" style="font-size:160%;">
			<?php
				session_start();
				if (isset($_SESSION['username'])) {
					logout();
				} else {
					if (isset($_GET['status'])) {
						if ($_GET['status'] == 'reg_success') {
							echo "<h1 style='color: green;'>new user registered successfully!</h1>";
						} else if ($_GET['status'] == 'login_fail') {
							echo "<h1 style='color: red;'>invalid username and/or password!</h1>";
						}
					}
					loginform();
				}
			?>
		</div>
		<div class="forumdesc">
			<p style="font-size:160%;">Welcome!!This is the place where you can find all your answers</p></br>
			<p style="font-size:160%;">Here are some videos which are useful for building your confidence</p>
			<object width="100" height="100" data="https://www.youtube.com/v/9Ds_N1cPaeY" type="application/x-shockwave-flash"><param name="src" value="https://www.youtube.com/v/9Ds_N1cPaeY" /></object>
			<object width="100" height="100" data="https://www.youtube.com/v/uDhw_aGrKi8" type="application/x-shockwave-flash"><param name="src" value="https://www.youtube.com/v/uDhw_aGrKi8" /></object>
		</div>
		<h2 style="font-size:160%;color:#FF0000;" > <b>QUOTES </b></h2>
		<ul >
		
		<li style="font-size:130%;">"A gender-equal society would be one where the word 'gender' does not exist: where everyone can be themselves."</li><br>
		<li style="font-size:130%;">"I'm a girl,i'am smart and i'am strong and i can do anything"</li>
		</ul>
<script src="https://widget.flowxo.com/embed.js" data-fxo-widget="eyJ0aGVtZSI6IiMxMWRlY2QiLCJ3ZWIiOnsiYm90SWQiOiI1YzdkMzllYjUwMmQwZTAwNWQyY2Y4N2YiLCJ0aGVtZSI6IiMxMWRlY2QifSwid2VsY29tZVRleHQiOiJoZXl5eSEhIn0=" async defer></script>
		<div class="content">
			<?php dispcategories(); ?>
		</div>
	</div>
</body>
</html>