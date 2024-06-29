<?php
	include("header.php")
?>
 
<style>
.history{
	font-size:18px;
}
.box{
	border:5px solid Lavender;
	margin-top:40px;
	text-align:center;
	margin-left:50px;
	border-radius:15px;
	box-shadow:5px 5px 10px;
}
.n{
	margin-top:-25px;
	margin-bottom:10px;
	color:Lavender;
	background-color:#007bff;
	margin-left:60px;
	margin-right:50px;
	border-radius:10px;
	
}
.team{
	background-color:white;
}

.detail{
	margin-top:5px;
	font-size:20px;
	text-align:center;
	
}
.image{
	 height:200px;
	 width:80%;
	  transition: transform .2s; 
	border-radius:50%;

}
.main:hover{
	background-color:Orange;
}
.main{

	padding-top:5%;	
	text-align:center;
	border-radius:10%;
	margin-bottom:5%;
	padding-bottom:5%;
	box-shadow:3px 3px 10px;
}
.award{
	 height:200px;
	 width:100%;
}
.award-detail{
	margin-top:5px;
	font-size:25px;
	text-align:center;
}

</style>
 <!-- about section -->

	
  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6">
          <div class="detail-box">
            <h2>
              About us
            </h2>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomisedThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised
            </p>
           
          </div>
        </div>
        <div class="col-lg-7 col-md-6">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
	<div class="row">
		<div class="col-lg-6">
		<img src="images/Maintenance.png" alt="" height="100%" width="100%">
		</div>
		<div class="col-lg-6" align="justify">
			<h2 align="center">Our History</h2>
		<p class="history">&nbsp &nbsp &nbsp &nbsp &nbsp ABC Maintenance Company was founded in 2005 by John Doe. Initially starting with a small team and a limited client base, the company rapidly expanded over time. ABC Maintenance Company specialized particularly in areas such as HVAC systems, electrical maintenance, and facility management in its early years.</p>
		<p class="history">&nbsp &nbsp &nbsp &nbsp &nbspThe company established its reputation in the industry through its customer-centric approach and the delivery of high-quality services. ABC Maintenance Company began to focus on sustainability and environmental awareness, offering green energy solutions.
		</p>
		</div>
	
	</div>
	</div>
	<br><br>
  <div class="container">
<div class="row" align="justify">
	
	<div class="col-lg-4" align="justify">
		<div class="box">
		<h2 class="n">Vision</h3>
		
		<p >To be the premier provider of maintenance services, recognized for our commitment to excellence, innovation, and sustainability in every project we undertake.</p>
		</div>
	</div>
	
	<div class="col-lg-4" align="justify">
		<div class="box">
		<h2 class="n">Mission</h3>
		<p>Our mission is to deliver superior maintenance solutions that exceed our clients' expectations, uphold the highest standards of quality and safety, and contribute to the long-term success and efficiency of their operations. </p>
		</div>
	</div>
	
	<div class="col-lg-4" align="justify">
		<div class="box">
		<h2 class="n">Goal</h3>
		
		<ul>
		
		<li>Innovate with cutting-edge technology for efficiency.</li>
		
		<li>Enhancing sponsor relations</li>
		<li>Optimizing  budgets</li>
		<li>Streamlining the planning process</li>
		<li>Improving time management </li>
		<ul>
		</div>
	</div>

</div>
</div>

<div class="container" style="margin-top:5%;">
<h1 align="center">Our Awards</h1>
<br>
<div class="row" style="text-align:center;">



	<div class="col-lg-3">
		<div class="">
		<img src="images/trophy2.jpeg" alt="" align="center" class="award">
		<div class="award-detail">
			In 2017 Winner..
		</div>
		</div>
	</div>

<div class="col-lg-5">
		<div class="">
		<img src="images/award2.jpg" alt=""  align="center"class="award">
		<div class="award-detail">
			This award is provided from best maintenance in they compny  
		</div>
		</div>
	</div>
	

	
	<div class="col-lg-4" >
		
			<div class="">
			<img src="images/tropy2.jpg" alt=""   align="center" class="award">
		<div class="award-detail">
			fcwetwrttcw wtwtet
		</div>
		</div>
		
	</div>
	
</div>


</div>


<div class="container" style="margin-top:5%;">
<h1 align="center">Our Team</h1>
<br>
<div class="row">

	<div class="col-lg-3">
		<div class="main">
		<img src="images/owner.jpeg" alt=""align="center" class="image">
		<div class="detail">
			Arjun Patel<br>
			<b>Owner</b>
		</div>
		</div>
	</div>

<div class="col-lg-3">
		<div class="main">
		<img src="images/manager.jpeg" alt=""  align="center"class="image">
		<div class="detail">
			Rahul Singh<br>
			<b>Manager</b>
		</div>
		</div>
	</div>

	
	<div class="col-lg-3" >
		
			<div class="main">
			<img src="images/enginer.jpeg" alt=""   align="center" class="image">
		<div class="detail">
			Siddharth Mehta<br>
			<b>Enginer</B>
		</div>
		</div>
		
	</div>
	<div class="col-lg-3">
	<div class="main">
	<img src="images/superwisor.jpeg" alt=""  align="center" class="image">
		<div class="detail">
			Vikram Sharma<br>
			<b>Enginer</b>
		</div>
		</div>
	
	</div>

</div>


</div>

  <!-- end about section -->

 <?php
	include("footer.php")
?>