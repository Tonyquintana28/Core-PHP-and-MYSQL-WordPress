<?php
$title = 'Carlsbad, New Mexico';
$description = 'Iron Guard Housing proudly provides the best in corporate housing for the communities of Odessa, Pecos, Carlsbad, and Colorado City.';
include 'header.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/json.js"></script>
<script>var facility_number = 3;</script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script src="js/map-single.js"></script>
<style>
#slideshow > img {position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px;}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script>
		$(function() {
			$("#slideshow > img:gt(0)").hide();
	
			setInterval(function() { 
			  $("#slideshow > img:first")
			    .fadeOut(1000)
			    .next()
			    .fadeIn(1000)
			    .end()
			    .appendTo("#slideshow");
			},  5000);	
		});
	</script>

<div id="wrapper">
<h1>Carlsbad, New Mexico <font class="facilityAddress">2412 Harding St.</font></h1>
<div id="content">

<div id="rightSide">
	<div id="utilitiesBg">All Utilities Included</div>
    <div id="slideshow">
    	<img src="images/img-sanA-2.jpg" alt="Odessa House" width="493" height="334">
    	<img src="images/img-gen-1.jpg" alt="Odessa Lot" width="493" height="334">
        <img src="images/img-gen-2.jpg" alt="Odessa Lot" width="493" height="334">
        <img src="images/img-gen-3.jpg" alt="Odessa Lot" width="493" height="334">
    </div>
</div><!-- End Right Side -->

<div id="serviceList">
	<h3>Services:</h3>
    <ul>
    	<li> Linen Service</li>
        <li> Housekeeping</li>
        <li> All Utilities Free</li>
	</ul>
    <h3>Amenities:</h3>
    <ul>
        <li>Fully Furnished Units</li>
        <li>Heating and Air Conditioning</li>
        <li>Private Bathrooms</li>
        <li>Internet Access</li>
        <li>Flat Screen TV / DVD/ Dish Network</li>
        <li>Full Size Washer/Dryer</li>
        <li>Linens</li>
        <li>Glasses</li>
        <li>Plates</li>
        <li>Silverware</li>
        <li>House Hold Cookware</li>

    </ul>
    <h3>Pricing:</h3>
    <ul>
    	<li> Available upon request</li>
    </ul>
</div><!-- End Left Side -->

<div class="clearFloat" style="padding: 10px;"></div>

<div id="map_canvas"></div>

<div id="weeklyHousing">Weekly Housekeeping</div>
<div id="flatScreen">Flat Screen TV</div>
<div id="acConditioning">Heating and Air Conditioning</div>
<div class="clearFloat"></div>

</div><!-- End Content -->

</div><!-- End Wrapper -->

<?php include 'footer.php' ?>