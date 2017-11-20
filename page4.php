<?php
$mydate=getdate(date("U"));
?>
<html>
<head>
<title>Template 1</title>
<link href="css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="style.css?v=1.1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">

	<!--Header-->
	
	<div class="row">
		 <div class="col-sm-12">
			<div class="top">
			
				    <div class="topbar">
						<div class="left"><a href="https://template1ro.000webhostapp.com" class="logo">LOGO</a></div>
						<div class="right">
						<span class="line"><a href="https://template1ro.000webhostapp.com" class="menu">Menu 1</a></span>
						<span class="line"><a href="https://template1ro.000webhostapp.com/page2.php" class="menu">Menu 2</a></span>
						<span class="line"><a href="https://template1ro.000webhostapp.com/page3.php" class="menu">Menu 3</a></span>
						<span class="line"><a href="https://template1ro.000webhostapp.com/page4.php" class="menu active">Menu 4</a></span>
						</div>
					</div>
					
				<div class="imgwrite">
					Lorem Ipsum
					<div class="imgwrite2">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vestibulum cursus turpis facilisis auctor.
					</div>
				</div>
				
				<div class="bosom-none"><img src="1.jpg" class="img-responsive" width="100%"></div>
			</div>
		 </div>
	</div>
	
	<!--Contact page-->
	
	<div class="row medium">
	
		<!--The mapp-->
		
		<div class="col-sm-7 contact">
			<div id="map" style="width:70%;height:80%;background:white"></div>
			<script>
			function myMap() {
        var myLatLng = {lat: 47.36, lng: 8.53};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Mountain Hotel'
        });
      }

			</script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8tZCu7DFkJLf_aXY0LlgKMXNc-y9yrQc&callback=myMap"></script>
		</div>
		
		<!--Contact info-->
		
		<div class="col-sm-5">
			<center><b><h3>Contact</h3></b></center><br><br>
			<i class="fa fa-envelope-open" aria-hidden="true"></i> Our e-mails:<br>
			<ul>
			  <li>hotel1@domain.com</li>
			  <li>hotel2@domain.com</li>
			</ul>  
			<i class="fa fa-phone" aria-hidden="true"></i> Our phones:<br>
			<ul>
			  <li>+41 023 990 41 22</li>
			  <li>+41 024 990 41 22</li>
			</ul> 
			<i class="fa fa-address-book" aria-hidden="true"></i> Our address:<br>
			<ul>
			  <li>Zürichbergstrasse 221, 8044 Zürich, Switzerland</li>
			</ul> 
			<i class="fa fa-bus" aria-hidden="true"></i> How can you reach us:<br>
			<ul>
			  <li>21</li>
			  <li>23</li>
			  <li>32</li>
			</ul> 
		</div>
	</div>
	
	<hr class="style14">
	
	<!--Contact us panel-->
	
	<div class="row">
			<div class="col-sm-3"></div>
            <div class="col-sm-6 formcomplete">
				
                    <div class="panel panel-default">
                        <div class="panel-heading" >
                            <div class="contactus">Contact us</div>
                        </div>
						
                    <form action="" method="POST">
					
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user blue"></i></span>
                                <input type="text" name="InputName" placeholder="Name" class="form-control" required>
                            </div>
                        </div>
						
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope blue"></i></span>
                                <input type="email" name="InputEmail" placeholder="Email" class="form-control" required>
                            </div>
                        </div>
						
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone blue"></i></span>
                                <input type="text" name="InputCno" placeholder="Phone" class="form-control" required>
                            </div>
                        </div>
						
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-comment blue"></i></span>
                                <textarea name="InputMessage" rows="6" class="form-control" type="text" required></textarea>
                            </div>
                        </div>
						
                        <div class="">
                        <button type="submit" class="btn btn-info pull-right">Send <span class="glyphicon glyphicon-send"></span></button>
                            <button type="reset" value="Reset" name="reset" class="btn">Reset <span class="glyphicon glyphicon-refresh"></span></button>
                        </div>
						
                    </div>
                    </form>
					</div>
			</div>
	</div>
	
	<!--Footer-->

	<div class="row">
		 <div class="col-sm-12">
			<div class="jos">
			<footer id="footer-Section">
			  <div class="footer-top-layout">
				<div class="container">
				  <div class="row">
				  
					<div class="OurBlog">
					  <h4>Lorem Ipsum</h4>
					  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
					  <div class="post-blog-date">
						<?php 
								if($mydate["mday"]==1)echo "$mydate[mday]st $mydate[month] $mydate[year]";
								else if($mydate["mday"]==2)echo "$mydate[mday]nd $mydate[month] $mydate[year]";
								else if($mydate["mday"]==3)echo "$mydate[mday]rd $mydate[month] $mydate[year]";
								else echo "$mydate[mday]th $mydate[month] $mydate[year]";
						?>
					  </div>
					</div>
					
					<div class=" col-lg-8 col-lg-offset-2">
					  <div class="col-sm-4">
						<div class="footer-col-item">
						  <h4>Company Name</h4>
						  <address>
						  501,507 your company address<br>
						  400015 Maharashtra, UK
						  </address>
						</div>
					  </div>
					  
					  <div class="col-sm-4">
						<div class="footer-col-item">
						  <h4>Reach Us</h4>
						  <div class="item-contact"> <a href="tel:630-885-9200"><span class="link-id">P</span>:<span>630-885-9200</span></a> <a href="tel:630-839.2006"><span class="link-id">F</span>:<span>630-839.2006</span></a> <a href="mailto:info@brandcatmedia.com"><span class="link-id">E</span>:<span>info@brandcatmedia.com</span></a> </div>
						</div>
					  </div>
					  
					  <div class="col-sm-4">
						<div class="footer-col-item">
						  <h4>Sign up for Newsletter</h4>
						  <form class="signUpNewsletter" action="" method="get">
							<input name="" class="gt-email form-control" placeholder="You@youremail.com" type="text">
							<input name="" class="btn-go" value="Go" type="button">
						  </form>
						</div>
					  </div>
					  
					</div>
				  </div>
				</div>
			  </div>
			  
			  <div class="footer-bottom-layout">
				<div class="socialMedia-footer"> <a href=""><img src="socialMedia_01.png" width="42px" height="42px"></a> <a href=""><img src="socialMedia_02.png" width="35px" height="35px"></a> <a href=""><img src="socialMedia_03.png" width="35px" height="35px"></a> <a href=""><img src="socialMedia_04.png" width="33px" height="33px"></a> <a href=""><img src="socialMedia_05.png" width="37px" height="37px"></a> </div>
				<div class="copyright-tag"><p style="color:white;">Copyright © 2017 company name. All Rights Reserved.</p></div>
			  </div>
			  
			</footer>
			</div>
		 </div>
	</div>

</div>
</body>
</html>