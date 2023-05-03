<?php
  
  if(isset($_POST['submit'])){

  	$name = $_POST['name'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
    $email = $_POST['email'];
		
	


    $to = "samuelajala123@gmail.com";
	
	  $sub = $subject;
	
	  echo $msg = "My name is ". $name . " and the purpose of my message is <br/>" . $message;
	
	  $from = $email;
	//we can slso collect the above from an input field of a form.
	 mail($to, $sub, $msg, $from);
	



	}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>ComingSoon - AGC TRAVELS & TOURS</title>
  <meta name="description" content="Unlock Your Dreams of Studying Abroad and or Working Abroad with AGC Travels & Tours - Your One-Stop Solution for all our services.">
  <meta name="author" content="Afolani Kole">

  <!-- Favicons -->
  <link href="assets/img/LOGO_ICON.png" rel="icon">
  <link href="assets/img/AGC_LOGO.png" rel="agc-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


  <!-- for alert-->
  <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="../../ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="../../cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="../../maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center">

      <?php
            if(isset($_POST['submit'])){
              echo "
              <div class='col-lg-7 info alert alert-info text-center'>
                <strong>Message Sent!</strong> Kindly check your mail for our feedback
              </div>
              ";
            }
      ?>
      
      <img src="assets/img/AGC LOGO3.png" alt="AGC LOGO" width="25%" height="15%">

      <h1 style="font-size:300%;">ComingSoon</h1>
      <h2 style="text-align:justify; margin: 10% 20% 10% 20% !important;">Exciting changes are coming! Our website is currently undergoing improvements to serve you better. Stay tuned for our relaunch, and in the meantime, our team is still here to assist you with your travel needs. Thank you for your continued support!</h2>
      <div class="countdown d-flex justify-content-center" data-count="2023/7/1">
        <div>
          <h3>%d</h3>
          <h4>Days</h4>
        </div>
        <div>
          <h3>%h</h3>
          <h4>Hours</h4>
        </div>
        <div>
          <h3>%m</h3>
          <h4>Minutes</h4>
        </div>
        <div>
          <h3>%s</h3>
          <h4>Seconds</h4>
        </div>
      </div>

      <div class="subscribe">
        <h4 style = "color:#ff0000 !important; background-color:#ffffff; padding-bottom:0px;">You can connect with us via the below handles!</h4>
      </div>
      <div class="social-links text-center">
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
      </div>

    </div>
  </header><!-- End #header -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>AGC ACADEMY & PREPARATORY TRAVELS <span style="font-size:20px;">(BN: 3047869)</span></h2>
            <p><b>Motto:</b> your ticket to quality education around the world (Travel & Educational agency in Nigeria) </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h4 style="text-align: justify;">
            Unlock Your Dreams of Studying Abroad and or Working Abroad with AGC Travels & Tours - Your One-Stop Solution for all services below.</h4>
            <ul>
              <li style="font-weight: bold;"><i class="bi bi-check"></i>Study Abroad Admission</li>
              <li><i class="bi"></i> UK, USA, Canada, Australia, China, etc</li>
             
              <li style="font-weight: bold;"><i class="bi bi-check"></i> Scholarships & Grants</li>
              <li><i class="bi"></i> Student Loan, Aids, Low Tuition, School fees </li>

              <li style="font-weight: bold;"><i class="bi bi-check"></i>  International Examinations</li>
              <li><i class="bi"></i> IELTS, SAT, TOEFL, GRE, PTE, DUOLINGO, USMLE.</li>

              <li style="font-weight: bold;"><i class="bi bi-check"></i>  Government Business Registration</li>
              <li><i class="bi"></i>Private / Public Limited Liability Company, NGO’s, Business Name, Annual Financial Returns, Trademark, FIRS, TIN, VAT, SCUML, NAFDAC, IPON, NEPC.</li>

              <li style="font-weight: bold;"><i class="bi bi-check"></i>  Travels & Tours Bookings </li>
              <li><i class="bi"></i> Airline Ticketing, Hotel Reservations, Holiday Liesure Cruise, Conferences.</li>

              <li style="font-weight: bold;"><i class="bi bi-check"></i> Mental & Healthcare Training</li>
              <li><i class="bi"></i> (Japa System Readiness) Carerers, Caregiver, Home Nurse, Home Health Aid (HHA).</li>

              <li style="font-weight: bold;"><i class="bi bi-check"></i>  Visa / Embassy Appointment</li>
              <li><i class="bi"></i>Biometric Capturing, VFS Submission, Passport.</li>

              <li style="font-weight: bold;"><i class="bi bi-check"></i> Funding and Payment System</li>
              <li><i class="bi"></i> School fees, Proof of fund, NMBI, NNAS, Documentation.</li>

              <li style="font-weight: bold;"><i class="bi bi-check"></i>  Professional Exams. Registration</li>
              <li><i class="bi"></i>NMC-UK, CBT, GMC-UK PLAB, CGFNS, OSCE, OET, NCLEXS, ECTAS/UK Naric, BMAT</li>
            
              <li style="font-weight: bold;"><i class="bi bi-check"></i>   Educational Credential Assessment</li>
              <li><i class="bi"></i>Certificate/transcript verification, WES, ICAS,IQAS, CES, ICES, MCC, PEBC</li>
              
            </ul>


            <p class="fst-italic">Ready to explore the world? AGC Travels & Tours is fully open for business and committed to making your travel dreams a reality! With our top-notch, you can trust us to take care of all your travel needs. Let us help you embark on an unforgettable journey today. Contact us and experience the AGC difference!</p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>E12 CRM Shopping Complex, Beside Redeemer’s Health Center, Redemption Camp, Mowe, Ogun State, Nigeria.</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@agctravelstours.com<br>ieltsmowe@gmail.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p><span class=" bi bi-whatsapp"> +23481-5401-4637</span><br><span class=" bi bi-whatsapp"> +23491-2454-3832</span><br> <span class=""> +23490-1825-5872</span></p>

                 
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row justify-content-center">
          <div class="col-lg-10">
            
                  <div class="section-title">
                    <h2>Send us a Message.</h2>
                  </div>

              <form action="" method="post" class="myform">
                  <input type="text" id="name" name="name" placeholder="name" required>
                  <input type="text" id="subject" name="subject" placeholder="subject" required>
                  <textarea id="message" name="message" placeholder="message" required></textarea>
                  <input type="email" id="email" name="email" placeholder="email" required>

                  <input type="submit" name="submit" value="Send Message">
              </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy;<strong><span>AGC ACADEMY  & PREPARATORY TRAVELS</span></strong> 
      </div>
    </div>
  </footer><!-- End #footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!--Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>







