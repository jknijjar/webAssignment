<html>
	<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="style.css">
		<title>Welcome</title>
	</head>
	<?php
		if(!empty($_POST['Submit']))
		{
			if(empty($_POST['email']))
			{
				$err[0]="Fill every required field";
			}
			if(empty($_POST['phone']))
			{
				$err[1]="Fill every required field";
			}
			if(empty($_POST['address']))
			{
				$err[2]="Fill every required field";
			}
			if(empty($err))
			{	
							?>
					<script>
						alert("Data Enter Sucessfully");
					</script>
					<?php
			}
		}
	?>
	<body>
		<div class="nav" id="nav">
			<div class="wraper">
				<ul>
					<li><a href="index.htm">Home</a></li>
					<li><a href="football.htm">Football</a></li>
					<li><a href="series.htm">Series</a></li>
					<li><a href="resume.htm">Resume</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
				<div class="clear"></div>
			</div>
		</div>
		<div class="wraper">
			<div class="contact_form">
				<p>Contact Me</p>
			<form name="contact" method="POST">
				<div style="color:red">
					<?php if(!empty($err)) echo "Field is Empty"?><br /><br />
					</div>
				<label for="email">Enter Your Mail*:</label><br /><input type="text" name="email" 
				value=""/><br />
				<label for="phone">Enter Your Number*:</label><br /><input type="number" name="phone" value=""/><br />
				<label for="address">Enter Your Address*:</label><br /><input type="text" name="address" 
				value=""/><br />
				<label for="feedback">Give Your Feedback:</label><br /><input type="textarea" name="feedback" value=""/><br />
				<input type="submit" name="Submit" value="Submit"/>
				</form>
			
		</div>
		</div>
		<div style="padding-top:200px;"></div>
			<!--
			<div class="gototop">
		<a href="#nav">	Go to top</a>
		</div>
		<div class="clear"></div>
</div>
	<div class="footer-background">
<div class="wraper">
<div class="footer ">
<div class="footer-boxex footer-padding">
<h2>Quick Links</h2>
<p class="text-size-16">
	<a class="footer-link" href="#">Visit our Home Page</a><br/>
	<a class="footer-link" href="football.htm">Know about football</a><br/>
			<a class="footer-link" href="series.htm">Watch latest Series </a><br/>
			<a class="footer-link" href="resume.htm">Resume</a><br/>
			<a class="footer-link" href="contact.php">Contact us</a></p>

</div>

	<div class="footer-boxex footer-padding"  >
  	
			<h2>How to Reach us</h2>
			<p>
		Sco-333 Sector-20 Panipat <br/>India,<br/>
		7489512149<br/>
		9638123874<br/>
			<a class="footer-link" href="#"><img src="image/ig.png" alt="image not found" height="30" width="30"/><a><br/> 
		<a class="footer-link" href="#"><img src="image/twitter.png" alt="image not found" height="30" width="30"/></a><br/>
		<a class="footer-link" href="#"><img src="image/fb.png" alt="image not found" height="30" width="30"/></a>
		</p>
</div>


</div>
</div>

-->
<div class="clear"></div>
<?php 

include("footer.php");
?>
</body>
</html>