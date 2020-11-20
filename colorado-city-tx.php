<?php
$title = 'Housing in Colorado City, Texas';
$description = 'Iron Guard Housing proudly provides the best in corporate housing for the communities of Odessa, Pecos, and Colorado City.';
include 'header.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/json.js"></script>
<script>var facility_number = 2;</script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script src="js/map-single.js"></script>

<div id="wrapper">
<h1>Colorado City, Texas <font class="facilityAddress">1900 S. Scott St.</font></h1>
<div id="content">

<div id="rightSide">
	<div id="utilitiesBg">All Utilities Included</div>
    <div id="slideshow">
    	<img src="images/img-inside-unit.jpg" alt="Inside Unit" width="493" height="334">
    </div>
</div><!-- End Right Side -->

<div id="serviceList">
	<h3>Services:</h3>
    <ul>
    	<li> Linen Service</li>
        <li> Housekeeping</li>
        <li> Truck Parking</li>
        <li> 120x70 Shop, available for rent</li>
        <li> All Utilities Free</li>
	</ul>
    <h3>Amenities:</h3>
    <ul>
        <li> Fully Furnished Units</li>
        <li> Heating and Air Conditioning</li>
        <li> Private Bathrooms</li>
        <li> Internet Access</li>
        <li> Flat Screen TV/DVD</li>
        <li> Full Size Washer/Dryer</li>
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