<?php
	include("header.php")
?>


  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Contact Us
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <form method="POST">
            <div>
              <input name="name" style=" border:1px solid #007bff; color:black;" type="text"  placeholder="Full Name" required="">
            </div>
            <div>
			 <input name="email" style=" border:1px solid #007bff; color:black;" type="text" placeholder="E-Mail Address" required="">
            </div>
            <div>
              <input name="subject" style=" border:1px solid #007bff; color:black;" type="text" placeholder="Subject" required="">
            </div>
            <div>
             <textarea name="message" style="width:100%; height:100px; padding-left:20px; padding-top:30px; border:1px solid #007bff; " placeholder="Your Message" required=""></textarea>
            </div>
            <div class="d-flex ">
              <button name="sub">
                SEND
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            <div class="map">
              <div id="googleMap" style="width:100%;height:100%;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

 <?php
	include("footer.php")
?>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

 <?php

	include("connection.php");
	
	if(isset($_POST['sub']))
	{
		$name		=$_POST["name"];
		$email 		=$_POST["email"];
		$subject		=$_POST["subject"];
		$message 	=$_POST["message"];
	
		$query ="INSERT INTO contact(name,email,subject,message) VALUES('$name','$email','$subject','$message')";
		$data =mysqli_query($conn,$query);
		if($data)
		{
			//echo"OK DATA INSERT INTO DATABASE";
		}
	}
?>
</body>

</html>