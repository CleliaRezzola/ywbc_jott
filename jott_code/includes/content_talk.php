<div class="container">

	<div class="row contact">
		<div class="col-xs-12 col-md-12 contact_us">Contact Us</div>
	</div>

	<div class="row contact_info">
		<div class="col-xs-12 col-md-4 col-md-offset-1 address">
			<p><h5>Addr. 1070 City View<br>Auckland<br>1001</h5></p>
			<p><h5>Call 0800 CREATE</h5></p>
			<p><h5>eMail create@jott.com</h5></p>
		</div>
		<div class="col-xs-12 col-md-6 map">
			<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
			<div style="height:200px;width:480px;">
				<div id="gmap_canvas" style="height:200px;width:480px;"></div>
				<style>#gmap_canvas img{max-width:none!important;background:none!important;}span{font-size:10px;font-family:muli;}span a{text-decoration:none;}</style>
			</div>
			<script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(-36.8484597,174.76333150000005),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-36.8484597, 174.76333150000005)});infowindow = new google.maps.InfoWindow({content:"<b></b><br/><br/> auckland" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
		</div>
	</div>

	<div class="row form"> 
		<form class="contact_form" method="post" action="index.php?page=success">
			<div class="col-md-3 col-md-offset-1">
				<label for="firstName">First Name: </label><br>
				<input type="text" id="firstName" name="firstName"><br><br>
				<label for="lastName">Last Name: </label><br>
				<input type="text" id="lastName" name="lastName">
			</div>
			<div class="col-md-3 col-md-offset-1">
				<label for="email">eMail: </label><br>
				<input type="text" id="email" name="email"><br><br>
				<label for="subject">Subject: </label><br>
				<input type="text" id="subject" name="subject">
			</div>
			<div class="col-md-3 col-md-offset-1">
				<label for="message">Message: </label><br>
				<input type="text" id="message" name="message"><br><br><br>
				<input type="submit" value="submit" name="submit">
			</div>		
		</form>
	</div>

	<div class="row footer contact_footer">
		<div class="col-md-2 col-md-offset-3">
			<a href="index.php?page=journals"><h6>Journals</h6></a>
		</div>
		<div class="col-md-2">
			<a href="index.php?page=story"><h6>Our story</h6></a>
		</div>
		<div class="col-md-2">
			<a href="index.php?page=talk"><h6>Lets talk</h6></a>
		</div>
	</div>

	<div class="row celebrate">
		<div class="col-xs-2 col-xs-offset-2"><img src="images/jott.jpg" alt=" "></div>
	</div>

</div>