<!DOCTYPE html>
<html>

<head>
	<title>Corona Project</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no
          , user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />

	<link rel="stylesheet" type="text/css" href="style.css">
	<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>


	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="undefined" crossorigin="anonymous">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>



	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



	<script src="https://cdn.jsdelivr.net/npm/waypoints@4.0.1/gulpfile.js" integrity="sha256-ww/pOF+UCdlmfh7hZdo6ZsaM3R+suzvl1/Wtah/rGPs=" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>




</head>

<body>

	<!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg fixed-top nav_style">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-virus virus-icon"></i> COVID-19 Tracker
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon">
                    <i class="fas fa-bars" style="color: white; font-size: 28px;"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#symptoms">Symptoms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#prevention">Prevention</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

	<div class="main-header">
    <div class="row w-100 h-100">
        <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
            <div class="left-side w-100 h-100 d-flex justify-content-center align-items-center">
                <img src="img/corona.png" class="main-img" alt="Corona Virus">
            </div>
        </div>

        <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
            <div class="right-side w-100 h-100 d-flex justify-content-center align-items-center">
                <div class="header-content text-center">
                    <h1 class="main-heading">Let's Stay Safe & Fight Together Against</h1>
                    <div class="covid-heading">
                        <span class="covid-text">C</span>
                        <img src="img/corona_sm.png" class="covid-icon" alt="O">
                        <span class="covid-text">VID-19</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
  

		<!-------Corona Latest Updates------>

<section class="corona_update container-fluid">
    <div class="mb-5">
        <h3 class="text-uppercase text-center text-danger mt-5">covid-19 World wide cases update</h3>
    </div>

    <div class="table-responsive mx-4 mb-5">
        <table id="countrywisetable" class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th class="px-3 py-3">S.No.</th>
                    <th class="px-3 py-3">Country</th>
                    <th class="px-3 py-3">New Confirmed</th>
                    <th class="px-3 py-3">New Deaths</th>
                    <th class="px-3 py-3">New Recovered</th>
                    <th class="px-3 py-3">Total Confirmed</th>
                    <th class="px-3 py-3">Total Deaths</th>
                    <th class="px-3 py-3">Total Recovered</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once('fetch_covid_data.php');
                $data = fetchCovidData();
                
                if (isset($data['Countries'])) {
                    $sno = 1;
                    foreach ($data['Countries'] as $country) {
                        echo "<tr>
                            <td class='px-3 py-2'>{$sno}</td>
                            <td class='px-3 py-2'>{$country['Country']}</td>
                            <td class='px-3 py-2 alert-warning'>{$country['NewConfirmed']}</td>
                            <td class='px-3 py-2 alert-danger'>{$country['NewDeaths']}</td>
                            <td class='px-3 py-2 alert-success'>{$country['NewRecovered']}</td>
                            <td class='px-3 py-2 alert-warning'>{$country['TotalConfirmed']}</td>
                            <td class='px-3 py-2 alert-danger'>{$country['TotalDeaths']}</td>
                            <td class='px-3 py-2 alert-success'>{$country['TotalRecovered']}</td>
                        </tr>";
                        $sno++;
                    }
                } else {
                    echo "<tr><td colspan='8' class='text-center p-3'>Unable to fetch data</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</section>

		<!----------- About Section-->

		<div class="container-fluid sub_section py-5 mt-5" id="about">
			<div class="section_header text-center my-3">
				<h1>About Covid-19</h1>
			</div>

			<div class="row pt-5">
				<div class="col-lg-5 col-md-6 col-12">
					<img src="img/OIP.jpg" class="img-fluid ml-5 img_res">
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
									<img src="img/handwash.jpg" class="img-fluid" width="90" height="90">
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
									<img src="img/mask1.jpg" class="img-fluid" width="90" height="90">
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
									<img src="img/doctor.jpg" class="img-fluid" width="90" height="90">
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
									<img src="img/home.jpg" class="img-fluid" width="90" height="90">
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
									<img src="img/Social.jpg" class="img-fluid" width="90" height="90">
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
									<img src="img/vc.jpg" class="img-fluid" width="90" height="90">
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


<?php
if(isset($_POST['submit'])) {
    require_once('db.php');
    
    $username = mysqli_real_escape_string($con, $_POST['uname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $symptoms = isset($_POST['coronasym']) ? implode(", ", $_POST['coronasym']) : '';
    $message = mysqli_real_escape_string($con, $_POST['msg']);
    
    $sql = "INSERT INTO contacts (username, email, mobile, symptoms, message) 
            VALUES ('$username', '$email', '$mobile', '$symptoms', '$message')";
            
    if(mysqli_query($con, $sql)) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Thank you for contacting us. We will get back to you soon!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
              </div>';
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Sorry, there was an error. Please try again later.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
              </div>';
    }
    mysqli_close($con);
}
?>

<div class="container-fluid py-5" id="contact">
    <div class="section_header text-center mb-5">
        <h1>Contact Us</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="uname" placeholder="Enter your name" autocomplete="off" required />
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="off" required />
                    </div>

                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="tel" class="form-control" name="mobile" placeholder="Enter mobile number" pattern="[0-9]{10}" title="Please enter valid 10-digit mobile number" autocomplete="off" required />
                    </div>

                    <div class="form-group">
                        <label>Select Symptoms</label><br>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="symptom1" name="coronasym[]" value="Cough">
                            <label class="custom-control-label" for="symptom1">Cough</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="symptom2" name="coronasym[]" value="Fever">
                            <label class="custom-control-label" for="symptom2">Fever</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="symptom3" name="coronasym[]" value="Short Breathing">
                            <label class="custom-control-label" for="symptom3">Short Breathing</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="symptom4" name="coronasym[]" value="Headache">
                            <label class="custom-control-label" for="symptom4">Headache</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Describe Your Condition</label>
                        <textarea class="form-control" name="msg" rows="3" placeholder="Describe how you are feeling..."></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
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
<footer class="footer_style">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p class="developer-info">Designed & Developed by <span class="developer-name">Ashish Gupta</span></p>
                <div class="social-links">
                    <a href="https://github.com/yourusername" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://linkedin.com/in/yourusername" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="mailto:your.email@example.com"><i class="fas fa-envelope"></i></a>
                </div>
                <p class="mt-3">&copy; <?php echo date('Y'); ?> Corona Virus Information. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>



		<script>
			$(document).ready(function() {
				$('.counter').each(function() {
					$(this).prop('counter', 0).animate({
						Counter: $(this).text()
					}, {
						duration: 3500,
						easing: 'swing',
						step: function(now) {
							$(this).text(Math.ceil(now));
						}
					});
				});
			});


			mybutton = document.getElementById("myBtn");

			// When the user scroll down 20px from the top of the document , show the button..

			window.onscroll = function() {
				scrollFunction()
			};

			function scrollFunction() {
				if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
					mybutton.style.display = "block";
				} else {
					mybutton.style.display = "none";

				}
			}

			//when the user clicks on the button , scroll to the top of the document

			function topFunction() {
				document.body.scrollTop = 0; // for safari
				document.documentElement.scrollTop = 0; // For chrome , fitrefox , IE and Opera
			}

			// fetch API

			$(document).ready(function() {
				function fetchfromApi() {
					$.ajax({
						url: "https://api.covid19api.com/summary",
						type: "GET",
						dataType: "JSON",
						success: function(data) {
							if (data) {
								console.log(data.Countries);
								$("#globaltable tbody").html(`
                         <tr>
              <td >
               ${data.Global.NewConfirmed}
              </td>
              <td >
                ${data.Global.NewDeaths}
              </td>
              <td >
                ${data.Global.NewRecovered}
              </td>
              <td >
                ${data.Global.TotalConfirmed} 
              </td>
              <td >
                ${data.Global.TotalDeaths} 
              </td>
              <td>
                ${data.Global.TotalRecovered} 
              </td>
          </tr>`);
								$("#Indiatable tbody").html(`
                         <tr>
              <td class="alert-warning">
                ${data.Countries[76].NewConfirmed}
              </td>
              <td class="alert-danger">
                ${data.Countries[76].NewDeaths}
              </td>
              <td class="alert-success">
                ${data.Countries[76].NewRecovered} 
              </td>
              <td class="alert-warning">
                ${data.Countries[76].TotalConfirmed} 
              </td>
              <td class="alert-danger">
                ${data.Countries[76].TotalDeaths} 
              </td>
              <td class="alert-success">
                ${data.Countries[76].TotalRecovered} 
              </td>
          </tr>`);
								var sno = 1;
								$("#countrywisetable tbody tr").remove();
								$.each(data.Countries, function(key, value) {

									$("#countrywisetable tbody").append(`
              <tr>
                <td>
               ${sno}
              </td>
              <td>
                ${value.Country}
              </td>
              <td class="alert-warning">
                ${value.NewConfirmed}
              </td>
              <td class="alert-danger">
                ${value.NewDeaths}
              </td>
              <td class="alert-success">
                ${value.NewRecovered}
              </td>
              <td class="alert-warning">
                ${value.TotalConfirmed} 
              </td>
              <td class="alert-danger">
                ${value.TotalDeaths} 
              </td>
              <td class="alert-success">
                ${value.TotalRecovered} 
              </td>
          </tr>
              `);
									sno++;
								});
							} else {}
						},
					});
				}
				fetchfromApi();
				setInterval(() => {
					fetchfromApi();
				}, 1000);

			});
		</script>
</body>

</html>