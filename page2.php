<?php
$mydate=getdate(date("U"));
?>
<html>
<head>
<title>Template 1</title>
<link href="css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="style.css?v=1.1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="js/bootstrap.min.js"></script>
</head>
<!--The script that finds rows in the table-->
<script>
$(document).ready(function(){
    $('.filterable .btn-filter').click(function(){
        var $panel = $(this).parents('.filterable'),
        $filters = $panel.find('.filters input'),
        $tbody = $panel.find('.table tbody');
        if ($filters.prop('disabled') == true) {
            $filters.prop('disabled', false);
            $filters.first().focus();
        } else {
            $filters.val('').prop('disabled', true);
            $tbody.find('.no-result').remove();
            $tbody.find('tr').show();
        }
    });

    $('.filterable .filters input').keyup(function(e){
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var $input = $(this),
        inputContent = $input.val().toLowerCase(),
        $panel = $input.parents('.filterable'),
        column = $panel.find('.filters th').index($input.parents('th')),
        $table = $panel.find('.table'),
        $rows = $table.find('tbody tr');
        var $filteredRows = $rows.filter(function(){
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        $table.find('tbody .no-result').remove();
        /* Show all rows, hide filtered ones*/
        $rows.show();
        $filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if ($filteredRows.length === $rows.length) {
            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
        }
    });
});
</script>
<body>
<div class="container-fluid">

	<!--The header image-->
	<div class="row">
		 <div class="col-sm-12">
			<div class="top">
			
				    <div class="topbar">
						<div class="left"><a href="https://template1ro.000webhostapp.com" class="logo">LOGO</a></div>
						<div class="right">
						<span class="line"><a href="https://template1ro.000webhostapp.com" class="menu">Menu 1</a></span>
						<span class="line"><a href="https://template1ro.000webhostapp.com/page2.php" class="menu active">Menu 2</a></span>
						<span class="line"><a href="https://template1ro.000webhostapp.com/page3.php" class="menu">Menu 3</a></span>
						<span class="line"><a href="https://template1ro.000webhostapp.com/page4.php" class="menu">Menu 4</a></span>
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
	
	<!--The table-->
	<div class="row medium1">
	<center><b><h3>Lorem Ipsum</h3></b></center>
	
			<div class="panel panel-primary filterable">
				<div class="panel-heading">
					<h3 class="panel-title"><center><b>Data table informations</b></center></h3>
					<div class="pull-right">
						<button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
					</div>
				</div>
				<table class="table">
					<thead>
						<tr class="filters">
							<th><input type="text" class="form-control" placeholder="#" disabled></th>
							<th><input type="text" class="form-control" placeholder="First Name" disabled></th>
							<th><input type="text" class="form-control" placeholder="Last Name" disabled></th>
							<th><input type="text" class="form-control" placeholder="Username" disabled></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Larry</td>
							<td>the Bird</td>
							<td>@bo$$</td>
						</tr>
						<tr>
							<td>4</td>
							<td>Mike</td>
							<td>Love</td>
							<td>@<3</td>
						</tr>
						<tr>
							<td>5</td>
							<td>Morgan</td>
							<td>Grany</td>
							<td>@cat</td>
						</tr>
						<tr>
							<td>6</td>
							<td>Ted</td>
							<td>Martin</td>
							<td>@Ted</td>
						</tr>
					</tbody>
				</table>
			</div>
		
	</div>
	
	<div class="row">
	
		<div class="col-sm-12 legend"><b><center>Legend:</center></b></div>
		
	</div>
	
	<div class="row">
	
		<div class="col-sm-2 legend1 col-sm-offset-2">
			<center>Legend1:</center>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		</div>
		<div class="col-sm-2 legend1">
			<center>Legend2:</center>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		</div>
		<div class="col-sm-2 legend1">
			<center>Legend3:</center>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		</div>
		<div class="col-sm-2 legend1">
			<center>Legend4:</center>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		</div>
		
	</div>
	
	<!--The footer-->

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