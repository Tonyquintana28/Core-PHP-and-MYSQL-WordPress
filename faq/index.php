<?php

$title = 'Man Camp FAQs | Iron Guard Housing';

$description = 'Would you like to learn more about our corporate and temporary housing? Check out our workforce housing FAQs to find the solutions your workforce needs.';

include '../header.php';

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script src="../js/json.js"></script>

<script>var facility_number = 0;</script>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

<script src="../js/map-single.js"></script>

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

<!-- <h1>Odessa, Texas <font class="facilityAddress">9420 W. Westridge Dr.</font></h1> -->
  <h1>Iron Guard Housing FAQs

</h1>

<div id="content">

<p>Providing workforce housing requires significant commitment. Ensure your workers are in the best hands with Iron Guard Housing’s Pecos and Odessa housing.</p>



  <h3>What is Iron Guard Housing?</h3>

<p>Iron Guard Housing provides short-term house rentals and mobile home parks for workforces in construction, the oilfield industry and disaster relief. Our indoor lodging allows remote workers a place to stay in their home away from home with a number of amenities, allowing them to relax and recover during their off-hours. Additional services are available to help them maintain a superior quality of life during their stay in our Pecos, TX, lodging and Odessa housing. </p>


<h3>Where are you located?</h3>

<p>For those searching ‘mobile home parks near me,’ Iron Guard Housing offers two man camp locations. We offer: </p>

  <ul>
<li>Housing in Pecos, TX</li>
<li>Man camps in Odessa, TX</li>
  </ul>

<p>Our locations are dynamically situated near popular oilfield, construction and solar field sites, allowing workforces a shorter commute to the job. </p>


<h3>How do I get started? </h3>

<p>It’s as easy as contacting us! If you have a headcount of your workers, know the project duration and know your employees’ accommodation needs, give us a call or reach out via our Contact Us form. We’ll be able to send you all of the information and leasing agreements once we have the required details. </p>



<h3> What other amenities do you provide? </h3>
<p>Our Odessa and Pecos camp rentals, we provide standardized and streamlined amenities despite the location, including: 
  </p>
<ul>
  <li>Weekly housekeeping
  </li>
  <li>Linen services
  </li>
  <li>Private bathrooms
  </li>
  <li>Internet access
  </li>
  <li>Full-sized washers and dryers (in unit)
  </li>
  <li>Fully-furnished indoor lodging
  </li>
  <li>Flat-screen TVs
  </li>
  <li>Heating and air conditioning
  </li>
</ul>
<p>For more information on our amenities, please contact us today!</p>
<h3>How long are your leasing terms?</h3>
<p> Our housing in Pecos, TX, and Odessa homes for rent offer two lengths of stay for your workforce: 
  </p>
<ul>
  <li>Yearly leases
  </li>
  <li>6-month leases</li>
</ul>
<p> Depending on how long your project will take or the season of your employment, additional lengths of stay may be provided. For more information, fill out our contact form or speak to a representative to check out our options. 
  </p>
<!-- <h3>How many workers can you house?</h3> -->
<h3> What services do you offer? 
</h3>
<p>We offer a full line of amenities, including: 
  </p>
<ul>
  <li>Weekly housekeeping
  </li>
  <li>Linen services
  </li>
  <li>Private bathrooms
  </li>
  <li>Internet access
  </li>
  <li>Full-sized washers and dryers (in unit)</li>
  <li> Fully-furnished indoor lodging</li>
  <li> Flat-screen TVs
  </li>
  <li>Heating and air conditioning
  </li>
</ul>
<p>Our services also include...
  </p>
<ul>
  <li>Paid utilities
  </li>
  <li>Lease term negotiations
  </li>
  <li>Cable/satellite services for the residential TVs
  </li>
  <li>Full-sized appliances
  </li>
  <li>Complete kitchenware in all units
  </li>
</ul>
<!-- h3>What options do you offer to enterprises? </h3> -->
<h3>Are your man camps mobile? 
</h3>
<p>Iron Guard Housing in Texas is proud to provide mobile homes for rent in Odessa, TX, as well as other areas throughout the state, including Pecos and Big Lake. While our man camps are not mobile, they are strategically placed near work sites for convenience and ease of accessibility. 
  
  With our services, amenities and comfortable corporate housing, team leaders just like you will choose us every time when searching ‘mobile home parks near me.’ See why the oilfield and construction industries choose IGH today!</p>
<div style="margin: 10px 0; border: thick #2B3990 solid; background-color: #FAB817; padding: 10px; font-size: 28px; text-align: center;" id="call-now">Call Now! 432-315-2995
  or Email chad@rossmgt.com</div>


<div id="map_canvas"></div>



<div id="weeklyHousing">Weekly Housekeeping</div>

<div id="flatScreen">Flat Screen TV</div>

<div id="acConditioning">Heating and Air Conditioning</div>

<div class="clearFloat"></div>



</div><!-- End Content -->



</div><!-- End Wrapper -->



<?php include '../footer.php' ?>