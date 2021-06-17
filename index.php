<!DOCTYPE html>
<html>
<head>
	<title>Corona Project</title>
	

	<?php include 'links.php'; ?>
	<?php include 'style.php'; ?>
	<?php include 'connection.php'; ?>
	
	
</head>
<body>

	<!-- NAVBAR -->
	<nav class="navbar navbar-expand-lg nav_style p-3">
		<a class="navbar-brand pl-5" href="#">COVID-19</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto pr-5 text-capitalize">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#about">About</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#symptoms">symptoms</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#prevention">Prevention</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#contact">Contact</a>
				</li>


			</ul>

		</div>
	</nav>

	<div class="main-header">
		<div class="row w-100 h-100">
			<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2 mb-sm-2  ">
				<div class="left-side w-100 h-100 d-flex justify-content-center align-items-center">
					<img src="coronavirus_PNG93680.png" height="300">

				</div>
			</div>

			<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
				<div class="right-side w-100 h-100 d-flex justify-content-center align-items-center">
					<h1>Let's Stay Safe & Fight Together Against Cor<span class="covid"><img src="coronavirus_PNG7.png" height="80"></span>na Virus</h1>
				</div>
			</div>
		</div>

		<!-------Corona Latest Updates------>

		<section class="corona_update">
			<div class="mb-4">
				<h3 class="text-uppercase text-center text-primary ">covid-19 Updates</h3>
			</div>

			<div class="d-flex justify-content-around align-items-center count_style">
				<div>
					<h1 class="counter">1699787</h1>
					<p>Confirmed</p>
				</div>

				<div>
					<h1 class="counter">150000</h1>
					<p>Recovered</p>
				</div>

				<div>
					<h1 class="counter">14000</h1>
					<p>Active</p>
				</div>

				<div>
					<h1 class="counter">5000</h1>
					<p>Death</p>
				</div>


			</div>
		</section>


		<!----------- About Section-->

		<div class="container-fluid sub_section py-5 mt-5" id="about">
			<div class="section_header text-center my-3">
				<h1>About Covid-19</h1>
			</div>

			<div class="row pt-5">
				<div class="col-lg-5 col-md-6 col-12">
					<img src="OIP.jpg" class="img-fluid ml-5 img_res">
				</div>

				<div class="col-lg-7 col-md-6 col-12 pr-5">
					<h2>What is Corona-Virus?</h2>
					<p>The Centers for Disease Control and Prevention (CDC) cannot attest to the accuracy of a non-federal website.</p>

					<p>Human coronaviruses can sometimes cause lower-respiratory tract illnesses, such as pneumonia or bronchitis. This is more common in people with cardiopulmonary disease, people with weakened immune systems, infants, and older adults.</p>
				</div>
			</div>
		</div>
		
		<!------------ Corona Virus Symptoms -->


		<div class="container-fluid  py-5" id="symptoms">
			<div class="section_header text-center my-3">
				<h1>Coronavirus Symptoms </h1>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<figure class="text-center">
							<img src="img/cough.jpg" class="img-fluid" width="120" height="120">
							<figcaption>Cough</figcaption>
						</figure>
					</div>

					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<figure class="text-center">
							<img src="img/Noisy.jpg" class="img-fluid" width="120" height="120">
							<figcaption>Runny Noise</figcaption>
						</figure>
					</div>

					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<figure class="text-center">
							<img src="img/fever.jpg" class="img-fluid" width="120" height="120">
							<figcaption>Fever</figcaption>
						</figure>
					</div>

					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<figure class="text-center">
							<img src="img/cold.jpg" class="img-fluid" width="120" height="120">
							<figcaption>Cold</figcaption>
						</figure>
					</div>

					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<figure class="text-center">
							<img src="img/tiredness.jpg" class="img-fluid" width="120" height="120">
							<figcaption>Tiredness</figcaption>
						</figure>
					</div>

					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<figure class="text-center">
							<img src="img/S_breath.jpg" class="img-fluid" width="120" height="120">
							<figcaption>Short Breathing</figcaption>
						</figure>
					</div>
				</div>
			</div>	
		</div>

		<!------ Prevention Against Coronavirus -->

		<div class="container-fluid sub_section py-5" id="prevention">
			<div class="section_header text-center my-4">
				<h1>How to Prevent with Coronavirus</h1>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
									<img src="img1/handwash.jpg" class="img-fluid" width="90" height="90">
								</figure>
							</div>

							<div class="col-lg-8 col-md-8 col-12">
								<p>Wash your hand regularly for 20 seconds ,with soap or alcohal based sanitizer.</p>
							</div>
							
						</div>
						
					</div>

					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
									<img src="img1/mask1.jpg" class="img-fluid" width="90" height="90">
								</figure>
							</div>

							<div class="col-lg-8 col-md-8 col-12">
								<p>Wear a mask In Public area and maintain a distance.</p>
							</div>
							
						</div>
						
					</div>

					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
									<img src="img1/doctor.jpg" class="img-fluid" width="90" height="90">
								</figure>
							</div>

							<div class="col-lg-8 col-md-8 col-12">
								<p>Consult a doctor, if u not feeling well.</p>
							</div>
							
						</div>
						
					</div>

					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
									<img src="img1/home.jpg" class="img-fluid" width="90" height="90">
								</figure>
							</div>

							<div class="col-lg-8 col-md-8 col-12">
								<p>Be safe in your home and Dont go anywhere accept emergency work.</p>
							</div>
							
						</div>
						
					</div>

					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
									<img src="img1/Social.jpg" class="img-fluid" width="90" height="90">
								</figure>
							</div>

							<div class="col-lg-8 col-md-8 col-12">
								<p>Keep maintain social distancing in public area and wear a mask properly.</p>
							</div>
							
						</div>
						
					</div>

					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<figure class="text-center">
									<img src="img1/vc.jpg" class="img-fluid" width="90" height="90">
								</figure>
							</div>

							<div class="col-lg-8 col-md-8 col-12">
								<p>Go for vaccination nearby your house.</p>
							</div>
							
						</div>
						
					</div>


					
				</div>
				
			</div>

		</div>


		<!------ Contact Us -->

		<div class="container-fluid py-5" id="contact">
			<div class="section_header text-center my-4">
				<h1>Contact Us</h1>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<form action="" method="POST">

							<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control" name="uname" placeholder="Name" autocomplete="off" required/>
							</div>

							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="off" required/>
							</div>

							<div class="form-group">
								<label>Mobile</label>
								<input type="number" class="form-control" name="mobile" placeholder="Mobile Number" autocomplete="off" required/>
							</div>

							<div class="form-group">
								<label>Select Symptoms</label><br>	
								<div class="form-check form-check-inline">

									<input class="form-check-input" type="checkbox" name="coronasym[]"  value="Cough">
									<label class="form-check-label">Cough</label>
								</div>

								<div class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" name="coronasym[]"  value="Fever">
									<label class="form-check-label">Fever</label>
								</div>

								<div class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" name="coronasym[]"   value="Short Breathing">
									<label class="form-check-label">Short Breathing</label>
								</div>

								<div class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" name="coronasym[]"  value="Headache">
									<label class="form-check-label">Headache</label>
								</div>
							</div>

							<div class="form-group">
								<label for="exampleFormControlTextarea1">Describe Your Condition</label>
								<textarea class="form-control" placeholder="Describe How u Feeling....."  rows="3" name="msg"></textarea>
							</div>

							<button type="submit" class="btn btn-success" name="submit">Submit</button>
						</form>

					</div>



				</div>

			</div>
		</div>

		<!-------Top Cursor -->

		<div class="container scrolltop float-right pr-5">
			<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"> </i>
			
		</div>


		<!------footer -->
		<footer class="mt-5">
			<div class="footer_style text-white text-center container-fluid ">
				<p>@Copyright By  Ashish Gupta 2021</p>
				
				
			</div>
			
		</footer>

		<script type="text/javascript">

		
 
$(document).ready(function(){
    $('.counter').each(function(){
        $(this).prop('counter',0).animate({
            Counter: $(this).text()
        },{
            duration: 3500,
            easing: 'swing',
            step: function (now){
                $(this).text(Math.ceil(now));
            }
        });
    });
});


			mybutton = document.getElementById("myBtn");

			// When the user scroll down 20px from the top of the document , show the button..

			window.onscroll =function() {scrollFunction()};
			function scrollFunction(){
				if(document.body.scrollTop > 100 || document.documentElement.scrollTop>100){
					mybutton.style.display ="block";
				}
				else{
					mybutton.style.display ="none";

				}
			}

			//when the user clicks on the button , scroll to the top of the document

			function topFunction(){
				document.body.scrollTop = 0; // for safari
				document.documentElement.scrollTop= 0;  // For chrome , fitrefox , IE and Opera
			}



			
		</script>
	</body>
	</html>


	<?php

	
	if(isset($_POST['submit'])){
		$uname = $_POST['uname'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$symp = $_POST['coronasym'];
		$msg = $_POST['msg'];

		$chk= "";

		foreach($symp as $chk1){
			$chk .= $chk1."," ;
		}

		$insertquery= "INSERT INTO  corona ( name ,  email ,  mobile ,  symp ,  message ) values('$uname' ,'$email', '$mobile', '$symp', '$msg')";



		$query =mysqli_query($con,$insertquery);

		if($query){
			?>
			<script>
				alert("inserted Successfully");
			</script>
			<?php
		} else{
			?>
			<script>
				alert("Not inserted");
			</script>
			<?php
		}
	}
	




	?>



