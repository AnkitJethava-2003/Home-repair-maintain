<?php
  include("connection.php");
  $id =$_GET['ed'];

  if(isset($_POST['sub']))
  {
		$name       	=$_POST["name"];
        $address		=$_POST["address"];
		$qualification	=$_POST["qualification"];
		$dob      		=$_POST["dob"];
		$mobile			=$_POST["mobile"];
		$email      	=$_POST["email"];
		$experience		=$_POST["experience"];
        $skill        	=$_POST["skill"];
        $applyfor   	=$_POST["applyfor"];
		$time			=$_POST["time"];
		
    $query ="UPDATE career SET id=$id, name='$name', address='$address', qualification='$qualification', dob='$dob', mobile='$mobile', email='$email', experience='$experience', skill='$skill', applyfor='$applyfor', time='$time' WHERE id='$id'";
    echo $query;
	$data =mysqli_query($conn,$query);
    if($data)
    {
      header("Location:desapply.php");
    }
  }
?>

<?php
	include("head.php");
?>

<?php

  $id =$_GET['ed'];

  $query ="SELECT *FROM career WHERE id='$id'";
  $data=mysqli_query($conn,$query);
  $row=mysqli_fetch_assoc($data);

		$name       	=$row["name"];
        $address		=$row["address"];
		$qualification	=$row["qualification"];
		$dob      		=$row["dob"];
		$mobile			=$row["mobile"];
		$email      	=$row["email"];
		$experience		=$row["experience"];
        $skill        	=$row["skill"];
        $applyfor   	=$row["applyfor"];
		$time			=$row["time"];

?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Finance Business - Contact Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-finance-business.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

Finance Business TemplateMo

https://templatemo.com/tm-545-finance-business

-->
  </head>
  <body>
    <div class="callback-form contact-us" style="margin-top: -75px;">
          <div class="col-md-12">
               <div class="row">
                  <div class="col-lg-12">
                      <center>
                        <h4 style="margin-bottom: 40px;"><b>Edit Applyform</b></h4>
                      </center>
                  </div>
                </div>
            <div class="contact-form">
              <form id="contact" method="POST">
                <div class="row">
                  
				  <div class="col-lg-12">
                    <fieldset>
                      <input name="name" value="<?php echo $name; ?>" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="address" rows="6" class="form-control" id="message" placeholder="Your Address" required=""><?php echo $address; ?></textarea>
                    </fieldset>
                  </div>

                  <div class="col-lg-12">
                    <fieldset>
                      <input name="qualification" value="<?php echo $qualification; ?>" type="text" class="form-control" id="name" placeholder="Qualification" required="">
                    </fieldset>
                  </div>

                  <div class="col-lg-12">
                    <fieldset>
                      <input name="dob" type="text" value="<?php echo $dob; ?>" class="form-control" id="name" placeholder="Enter Date Of Birth" required="">
                    </fieldset>
                  </div>

                  <div class="col-lg-12">
                    <fieldset>
                      <input name="mobile" type="text" value="<?php echo $mobile; ?>" class="form-control" id="subject" placeholder="Mobile No" required="">
                    </fieldset>
                  </div>

                  <div class="col-lg-12">
                    <fieldset>
                      <input name="email" type="text" value="<?php echo $email; ?>" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  
                  <div class="col-lg-12">
                    <fieldset>
                      <input name="experience" type="text" value="<?php echo $experience; ?>" class="form-control" id="name" placeholder="Experience" required="">
                    </fieldset>
                  </div>

                  <div class="col-lg-12">
                    <fieldset>
                      <input name="skill" type="text" value="<?php echo $skill; ?>" class="form-control" id="name" placeholder="Skil" required="">
                    </fieldset>
                  </div>

                  <div class="col-lg-12">
                    <fieldset>
                      <input name="applyfor" type="text" value="<?php echo $applyfor; ?>" class="form-control" id="name" placeholder="Apply For" required="">
                    </fieldset>
                  </div>

                  <div class="col-lg-12">
                    <fieldset>
                      <select name="time" class="form-control" style="border-radius: 15px; border:none; color: grey; margin-top:-7px; margin-bottom:40px;">
                        <option value="">--Select Timeng--</option>
                        <option value="10:00 AM TO 7:00PM" <?php if($time == '10:00 AM TO 7:00PM'){ echo"SELECTED"; } ?> >10:00 AM TO 7:00PM</option>
                        <option value="10:00 AM TO 1:00PM" <?php if($time == '10:00 AM TO 1:00PM'){ echo"SELECTED"; } ?> >10:00 AM TO 1:00PM</option>
                        <option value="01:00 PM TO 7:00PM" <?php if($time == '01:00 PM TO 7:00PM'){ echo"SELECTED"; } ?> >01:00 PM TO 7:00PM</option>
                      </select>
                    </fieldset>
                  </div>
				  
				  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" name="sub" id="form-submit" class="filled-button" style="width: 100%;">Edit Applay now</button>
				    </fieldset>
                  </div>
				  
                </div>
              </form>
            </div>
          </div>
    </div>

<?php
	include("footer.php");
?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>
