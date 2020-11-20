<?php
$title = 'Housing in Odesa, Pecos, and Colorado City, Texas';
$description = 'Iron Guard Housing proudly provides the best in corporate housing for the communities of Odessa, Pecos, and Colorado City.';
include 'header.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!---<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script> --><script language="javascript" src="https://maps.googleapis.com/maps/api/js?v=3"></script><script src="js/json.js"></script>
<script src="js/map-multiple.js"></script>
<script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key=AIzaSyDK0GzKHHVr2oHCz1Qrj4SCyeJJxtfw56Y"></script>
<!--- Home Page -->
<div id="homeTopBg"><div id="homeTop">
	<div id="utilitiesText">
    	All Utilities<br />
    	<font style="font-size: 85px; font-weight: bold;">Included</font>
        <select name="mydropdown" class="styled" onChange="document.location = this.value" value="GO">
                <option value="">--Select Your City--</option>
                <option value="odessa-tx.php">Odessa, TX</option>
                <option value="pecos-tx.php">Pecos, TX</option>
                <option value="big-lake-tx.php">Big Lake, TX</option>
        </select>
    </div>
</div></div><!-- End Home Top BG -->

<div id="wrapper">
<div id="intro">
	<h2>Welcome to Iron Guard Housing</h2>
    Iron Guard Housing proudly provides the best in corporate housing for the communities of Odessa, Pecos, Ozona, and San Angelo. We strive to provide our tenants with safe, comfortable, convenient living quarters. Our fully furnished 2 bedroom/2 bath and 3 bedroom/3 bath units feature amenities such as full-size refrigerators, heating and air conditioning, and full-size washer/dryers.
    <br /><br />
	We value our customers, and we’re committed to serving their needs. We offer our tenants linen service and housekeeping, and all utilities are included!
    <br /><br />
    <strong>Our amenities include:</strong>
    <ul>
    	<li> Private Bathrooms</li>
        <li> Internet Access</li>
        <li> Flat Screen TV</li>
        <li> Full-size washer and dryers</li>
        <li> Fully furnished homes</li>
        <li> Linen service</li>
        <li> House Keeping</li>
    </ul>
    <strong>Leasing now! Contact Iron Guard Housing today for availability or to schedule a tour!</strong>
    
</div><!-- End Intro -->

<div id="facilityMap">
	<div id="map_home"></div>
	<a href="odessa-tx.php" class="facilityDiv">
    	<div class="letter">A</div>
        <div class="location">
        	<img src="images/btn-visit-facility.jpg" alt="Visit Odessa, TX" align="right" />
        	Odessa, Texas<br />
            <font class="address">9420 W. Westridge Dr.</font>
        </div>
        <div class="clearFloat"></div>
    </a>
	<a href="pecos-tx.php" class="facilityDiv">
    	<div class="letter">B</div>
        <div class="location">
        	<img src="images/btn-visit-facility.jpg" alt="Visit Pecos, TX" align="right" />
        	Pecos, Texas<br />
            <font class="address">1900 S. Scott St.</font>
        </div>
        <div class="clearFloat"></div>
    </a>
	<a href="big-lake-tx.php" class="facilityDiv">
    	<div class="letter">C</div>
        <div class="location">
        	<img src="images/btn-visit-facility.jpg" alt="Visit Big Lake, TX" align="right" />
        	Big Lake, Texas<br />
            <font class="address">903 E 3rd St.</font>
        </div>
        <div class="clearFloat"></div>
    </a>
</div><!-- End Facility Map Side -->

<div class="clearFloat"></div><div id="lineBreak"></div>

<div id="weeklyHousing">Weekly Housekeeping</div>
<div id="flatScreen">Flat Screen TV</div>
<div id="acConditioning">Heating and Air Conditioning</div>
<div class="clearFloat"></div>

</div><!-- End Wrapper -->

<?php include 'footer.php' ?>