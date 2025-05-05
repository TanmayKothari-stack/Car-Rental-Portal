<?php include 'connection.php' ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/image-x" href="images/car.ico">
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


	<!---------------------------Code For Header------------------------------>

<div class="main-header">
 <div class="header">
	<div class="content">
		<img src="images/car.png" width="30px"><br>Car Rental Portal
	</div>
	<div class="content">
		<img src="images/email.png" width="30px"><br><span style="font-size: 13px; text-transform: uppercase; ">For Support Email Us:</span><br><p style="font-size: 12px;">info@example.com</p>
	</div>
	<div class="content" style="width: 250px;">
		<img src="images/phone.png" width="30px"><br><span style="font-size: 13px; text-transform: uppercase; ">Service Helpline Call Us:</span><br><p style="font-size: 12px;">+91 12345 56789</p>
	</div>
	<div class="social" style="display: flex; align-items: center; justify-content: space-between; ">
		<a href=''><img src="images/facebook.png" width="20px"></a>
		<a href=''><img src="images/twitter.png" width="20px"></a>
		<a href=''><img src="images/instagram.png" width="20px"></a>
		<a href=''><img src="images/google.png" width="20px"></a>
		<a href=''><img src="images/linkedin.png" width="20px"></a>
	</div>
	<div class="content" style=" display:flex; align-items: center; justify-content:center;
	">
		<button style="cursor: pointer; width: 150px; height: 30px; border-radius: 5px; background: orangered; color: white; border: none; text-transform: uppercase; padding: 5px; font-weight: bold; font-size: 12px; " id="loginbtn">Login/Register</button>
	</div>
</div>

<nav class="navigation">
	<div class="content">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="">About Us</a></li>
			<li><a href="">Car Listing</a></li>
			<li><a href="">FAQS</a></li>
			<li><a href="#contact">Contact Us</a></li>
		</ul>
	<img src="images/profile.png" width="30px" style="border-radius: 50%;">

	<form action="" method="post">
		<input type="text" name="searchbox" placeholder="Search..." style="outline: none; width: 250px; margin-right: 50px; padding: 5px; font-size: 15px; border-radius: 5px; border: none; ">

		<img src="images/search.png" width="17px" style="position: absolute; right: 60px; margin-top: 5px; ">
	</form>

</div>
</nav>
</div>


<div class="login" id="login">
	<div class="content">
		<img src="images/remove.png" width="20px" style="position: absolute; right: 20px; " id="removebtn">
		<form action="" method="post" autocomplete="off">
			<h3 style="padding: 10px 0;">Login Form</h3>
			<hr size="1">
			<input type="text" name="email" placeholder="Email Address*">
			<input type="password" name="password" placeholder="Password*">
			<input type="submit" name="submit" value="Login">
		</form>
		<div class="register" style="margin-top: 30px; text-align: center; ">
			<p>Don't have an account? <span><a href='register.php' style="color:orangered;" >Signup Here</a></span></p>
			<br>
			<span style=" cursor: pointer; color: orangered; "><span style=" cursor: pointer; color: orangered; "><span><a href='forget_password.php' style="color:orangered;" >Forgot Password?</a></span></span>
		</div>
	</div>
</div>

	<!---------------------------Code For Header------------------------------>


<div class="banner" id="banner">
	<div class="content">
		<p style="padding: 10px 0px; line-height: 1.5; ">Find The Right <br> Car For You.</p>
		<span style="font-size: 18px; font-weight: normal; text-transform: none; ">We have more than thousands cars <br> for you to choose.</span>

		<br><br>

		<button style="cursor: pointer; width: 150px; height: 30px; border-radius: 5px; background: orangered; color: white; border: none; text-transform: uppercase; padding: 5px; font-weight: bold; font-size: 12px; ">Read More</button>
	</div>
</div>


<div class="main-container">

 <div class="cars">
	<div class="heading">
		<h2 align="center" style="font-size: 25px; font-family: sans-serif; " >Find the Best <span style=" text-align: center; padding:0 10px; font-size: 25px; font-family: sans-serif; font-style: italic; font-weight: normal; ">Car for you</span></h2>

		<br><br>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
	<div class="container">
		<!-- <div class="content"></div>
		<div class="content"></div>
		<div class="content"></div>
		<div class="content"></div>

		<div class="content"></div>
		<div class="content"></div>
		<div class="content"></div>
		<div class="content"></div>
 -->
		 <?php

		$data = mysqli_query($conn,"select * from cars_data ");
		while($result = mysqli_fetch_array($data))
		{
			$price = $result[2];

			echo "<div class='content'>

			<a href='view_car_details.php?id=$result[0]'><img src='$result[8]' width='100%'></a>

			<div class='data'>

			<p><img src='images/car_icon.png' width='20px' class='icon'> <sup style='font-size:15px;'>$result[4]</sup></p>
			<p><img src='images/calendar.png' width='20px' class='icon'> <span style='font-size:15px; position: relative; top: -3px; '>$result[3]</span></p>
			<p><img src='images/user.png' width='20px' class='icon'> <span style='font-size:15px; position: relative; top: -3px; '>$result[5]</span></p>

			</div>

			<br><br>

			<div style='display: flex; align-items: center; justify-content: space-between; padding: 0 10px; '>

			<h3>$result[1]</h3> <p>Price - $price/Day<p>

			</div>

			</div> <br>";
		}

		 ?>
	</div>
</div>

	<!---------------------------Code For Footer------------------------------>

<div class="footer">

	<div class="content">
		<div class="experience">
			<div class="box"><span><img src="images/calendar1.png" width="30%"><h3>40+</h3><br><p>Years in Business</p></span></div>
			<div class="box"><span><img src="images/car1.png" width="30%"><h3>1200+</h3><br><p>New Cars for Sale</p></span></div>
			<div class="box"><span><img src="images/car1.png" width="30%"><h3>1000+</h3><br><p>Used Cars for Sale</p></span></div>
			<div class="box"><span><img src="images/user1.png" width="35%" style="position:relative; left: -3px;"><h3>600+</h3><br><p>Satisfied Customers</p></span></div>
		</div>

	<div class="contact" id="contact">

		<div class="box">
			<h3>Contact Info</h3>
			<ul>
				<li><img src="images/call.png" width="40px"><p>+91 7850373649</p></li>
				<li><img src="images/call.png" width="40px"><p>+91 9852363599</p></li>
				<li><img src="images/envelope.png" width="40px"><a href="mailto:carrental@portal.com"><p style="padding-left: 30px;">carrental@portal.com</a></p></li>
				<li><img src="images/location.png" width="40px"><p style="position:relative; left: 12%; "><a style="color: white;" href="https://www.google.com/maps/place/East+Mumbai+Suburban+Bharat+Scouts+%26+Guides+District+Association/@19.0893517,72.8708966,14z/data=!3m1!4b1!4m6!3m5!1s0x3be7c7d2dfc8aab7:0x45ed151829ea0dc1!8m2!3d19.0893148!4d72.9078057!16s%2Fg%2F11dyqrk9f6?entry=ttu">East Mumbai, Mumbai, India <br> <p style="padding-top: 10px;"> Pincode - 400069</p> </a> </p></li>
			</ul>
		</div>
		<div class="box">
			<a style="color: white;" href="https://www.google.com/maps/place/East+Mumbai+Suburban+Bharat+Scouts+%26+Guides+District+Association/@19.0893517,72.8708966,14z/data=!3m1!4b1!4m6!3m5!1s0x3be7c7d2dfc8aab7:0x45ed151829ea0dc1!8m2!3d19.0893148!4d72.9078057!16s%2Fg%2F11dyqrk9f6?entry=ttu"><img class="map-image" src="images/map.png" style="position: relative; top: -1%; left: 0.1px; "></a>
		</div>
		<div class="box" style="padding: 30px 0px;">
			<h3>Feedback</h3>
			<ul>
				<form action="" method="post" class="feedback">
					<li><input type="text" name="title" placeholder="Title" maxlength="50"></li>
					<li><input type="text" name="subject" placeholder="Subject" maxlength="200"></li>
					<li><textarea name="feedback" placeholder="Feedback"></textarea></li>
					<li><input type="submit" name="" value="Send Feedback"></li>
				</form>
			</ul>
		</div>
		<div class="box">
			<h3>News Letter</h3>
			<ul>
				<li style="padding: 20px 0;"><p>Subscribe For Latest Updates</p></li>
			<form action="" method="post" class="newsletter">
				<li><input type="text" name="" placeholder="Your Email"></li>
				<li><input type="submit" name="subscribe" value="Subscribe"></li>
				<li style="margin-left: 100px;">
					<img src="images/card1.png" width="20%"><img src="images/card2.png" width="20%"><img src="images/card3.png" width="20%"></li>
			</form>
			</ul>
		</div>
		
		</div>

	</div>
</div>

	<!---------------------------Code For Footer------------------------------>


<!--End of Main Division-->

</div>

<script type="text/javascript">
	let i = 1
	let banner = document.getElementById("banner");
	function changeImg()
	{
	banner.style.background = `url('images/car home${i}.png')`;
	banner.style.backgroundPosition = 'center';
	banner.style.backgroundSize = 'cover';
	i = i%5;
	i++;

}
changeImg();
setInterval(changeImg,5000);
</script>

<!---------------------Header Java Script ---------------->

<script type="text/javascript">
	let logindata = document.getElementById("login");
	let body = document.body;
	let loginbtn = document.getElementById("loginbtn");
	let removebtn = document.getElementById("removebtn");
	loginbtn.addEventListener("click",function(){
		logindata.classList.toggle("active");
		//document.body.style.display = 'none';
	});

	removebtn.addEventListener("click",function(){
		logindata.classList.remove("active");
		//document.body.style.display = 'none';
	});
</script>

<!---------------------Header Java Script ---------------->

</body>
</html>