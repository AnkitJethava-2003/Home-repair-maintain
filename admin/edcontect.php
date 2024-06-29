<?php

  include("connection.php");
  
  $id =$_GET['ed'];

  if(isset($_POST['sub']))
  {

    $name     =$_POST["name"];
    $email    =$_POST["email"];
    $subject  =$_POST["subject"];
    $message  =$_POST["message"];
  
    $query ="UPDATE contact SET id=$id, name='$name', email='$email', subject='$subject', message='$message' WHERE id='$id'";
    echo $query;
    $data =mysqli_query($conn,$query);
    if($data)
    {
      header("Location:descontect.php");
    }
    else
    {
      echo "NOOOOOO";
    }
  }
?>

<?php
	include("head.php");
?>

<?php

  $id =$_GET['ed'];

  $query ="SELECT *FROM contact WHERE id='$id'";
  $data=mysqli_query($conn,$query);
  $row=mysqli_fetch_assoc($data);

    $name     =$row["name"];
    $email    =$row["email"];
    $subject  =$row["subject"];
    $message  =$row["message"];
   
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
                        <h4 style="margin-bottom: 40px;"><b>Edit Contect</b></h4>
                      </center>
                  </div>
                </div>
            <div class="contact-form">
              <form id="contact" action="" method="POST">
                <div class="row">
                  <div class="col-lg-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" value="<?php echo"$name" ?>" required="">
                    </fieldset>
                  </div>
                 
                   <div class="col-lg-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" value="<?php echo"$email" ?>"  required="">
                    </fieldset>
                  </div>
                  
                  <div class="col-lg-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="subject" value="<?php echo"$subject" ?>"  required="">
                    </fieldset>
                  </div>

                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message" required=""><?php echo"$message" ?></textarea>
                    </fieldset>
                  </div>

                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" name="sub" id="form-submit" class="filled-button" style="width: 100%;">Edit Contect now</button>
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
