<?php
	include("header.php")
?>
<HTML>
<head>
	
</head>
<body>			
			<section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          APPLIY NOW
        </h2>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form method="POST">
            <div>
              <input name="name" style=" border:1px solid #007bff; color:black;" type="text"  placeholder="Full Name" required="">
            </div>
            <div>
			 <textarea name="address" style="width:100%; height:100px; padding-left:20px; padding-top:30px; border:1px solid #007bff; " placeholder="Your Address" required=""></textarea>
            </div>
            <div>
              <input name="qualification" style=" border:1px solid #007bff; color:black;" type="text" placeholder="Your Ditel Qualification" required="">
            </div>
            <div>
			  <input name="dob" style=" border:1px solid #007bff; color:black;" type="date" placeholder="Enter DOB" required="">
            </div>
			<div>
              <input name="mobile" style=" border:1px solid #007bff; color:black;" type="text" placeholder="Enter Mobile" required="">
            </div>
            <div>
			  <input name="email" style=" border:1px solid #007bff; color:black;" type="text" placeholder="Enter Email" required="">
            </div>
			<div>
              <input name="experience" style=" border:1px solid #007bff; color:black;" type="text" placeholder="Enter Your Experience" required="">
            </div>
            <div>
			  <input name="skill" style=" border:1px solid #007bff; color:black;" type="text" placeholder="Enter Your Skill" required="">
            </div>
			<div>
              <input name="applyfor" style=" border:1px solid #007bff; color:black;" type="text" placeholder="Apply for Detail" required="">
            </div>
            <div class="col-lg-12">
                      <select name="time" style=" border:1px solid #007bff; margin-left:-15px; width:1140px; height:50px; color:black;">
                        <option value="">--Select Timeng--</option>
                        <option value="10:00 AM TO 7:00PM">10:00 AM TO 7:00PM</option>
                        <option value="10:00 AM TO 1:00PM">10:00 AM TO 1:00PM</option>
                        <option value="01:00 PM TO 7:00PM">01:00 PM TO 7:00PM</option>
                      </select>
			</div>
            <div class="d-flex ">
              <button name="sub">
                APPLICATION SEND NOW
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>			  
</html>
			  
<?php

    include("connection.php");
    
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
		
        $query ="INSERT INTO career(name, address, qualification, dob, mobile, email, experience, skill, applyfor, time) 
		VALUES('$name','$address','$qualification','$dob','$mobile','$email','$experience','$skill','$applyfor','$time')";
        $data =mysqli_query($conn,$query);
        if($data)
        {
            //echo"OK DATA INSERT INTO DATABASE";
        }
    }
?>  			  