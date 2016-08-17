<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Do Space Tickets</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <div class="wrapper" id="wrapper">
    	<div class="header">
    		<h1 id="page-title"><img id="logo" src="http://iheartdospace.org/images/dospace-logo-footer.svg">   Tickets
	    		<ul class="nav nav-pills nav-pills-primary" role="tablist" id="navigation">
					<li>
						<a onclick="loadContent('container','newticket')" role="tab" data-toggle="tab">
						<i class="material-icons">bug_report</i>
						New Ticket
						</a>
					</li>
					<li class="active">
						<a onclick="loadContent('container','dashboard')" role="tab" data-toggle="tab">
						<i class="material-icons">dashboard</i>
						Dashboard
						</a>
					</li>
					<li>
						<a onclick="loadContent('container','menu')" role="tab" data-toggle="tab">
						<i class="material-icons">menu</i>
						Menu
						</a>
					</li>
					<li>
						<a onclick="loadContent('containter','handler','bacon')" role="tab" data-toggle="tab">
						<i class="material-icons">list</i>
						json
						</a>
					</li>
				</ul>
			</h1>
    	</div>
    	<div class="main-raised">
    		<div class="container" id="container">
				<!-- Content Goes Here -->
    		</div>
		</div>
	</div>	
	<!-- Assignment Modal -->
	<div class="modal fade" id="assignmentModal" tabindex="-1" role="dialog" aria-labelledby="assignmentModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <div class="dropdown">
				<h4 class="modal-title" id="editModalLabel">Assign to</h4>
				<a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Unassigned
				<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#">One</a></li>
					<li><a href="#">Of</a></li>
					<li><a href="#">Us</a></li>
					<li class="divider"></li>
					<li><a href="#">Michael</a></li>
					<li class="divider"></li>
					<li><a href="#">Unassigned</a></li>
				</ul>
			</div>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Edit Modal -->
	<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
	  <div class="modal-dialog" id="ticketModal">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="editModalLabel">Ticket</h4>
	      </div>
	      <div class="modal-body" id="ticketModalBody">
			<!-- Ticket Info Goes Here -->
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-info btn-simple">Save</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Confirmation Modal -->
	<div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3>Are you sure you want to close this ticket?</h3>
	      </div>
	      <div class="modal-body modal-center-btns">
	      	<button class="btn btn-danger btn-round">Yes</button>
	      	<button class="btn btn-success btn-round" data-dismiss="modal">Cancel</button>
	      </div>
	    </div>
	  </div>
	</div>
</body>

	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js" type="text/javascript"></script>
	
	 <!-- Page Specific JS -->
	<script type="text/javascript">
		// declare and set global variables
		var xhr = new XMLHttpRequest();
	
    	// AJAX request to dynamically load page content
    	function loadContent(id,content,dataOut) {
			xhr.onreadystatechange = function() {
	    		if (xhr.readyState == 4 && xhr.status == 200) {
	   				document.getElementById(id).innerHTML = xhr.responseText;
	   			}
			};
			if (content == "handler") {
				xhr.open("POST", "handler.php", true);
				xhr.send(dataOut);
			} if (content != null) {
				xhr.open("GET", content + ".php", true);
				xhr.send();	
			} else {
				return false;
			}
		}
		
		// Load default page content on load/refresh
		loadContent("container","dashboard");
		
		// tooltip helper
		$('[data-toggle="tooltip"]').tooltip();
		
    </script>
</html>