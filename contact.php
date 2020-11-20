<?php

$title = "Contact Us";

$description = "Contact Iron Guard Houseing.";

require 'header.php';

?>



<style type="text/css">

	@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700italic);



	body{

		background: #fff;

	}

	.mobile{

		display: none;

	}



	#top{

		position: relative;

		width: 100%;

		height: 685px;

		background: url(images/bg-rvpark.jpg) center;

	}

	#topContent{

		font-family: 'Open Sans', sans-serif;

		position: relative;

		top: 130px;

		height: 420px;

		width: 90%;

		max-width: 955px;

		margin-right: auto;

		margin-left: auto;

		border: 1px solid #2B3990;

		border-radius: 10px;

		background: -webkit-linear-gradient(rgba(43,57,144,1), rgba(43,57,144,0) 66%); /* For Safari 5.1 to 6.0 */

		background: -o-linear-gradient(rgba(43,57,144,1), rgba(43,57,144,0) 66%); /* For Opera 11.1 to 12.0 */

		background: -moz-linear-gradient(rgba(43,57,144,1), rgba(43,57,144,0) 66%); /* For Firefox 3.6 to 15 */

		background: linear-gradient(rgba(43,57,144,1), rgba(43,57,144,0) 66%); /* Standard syntax */

	}

	#topLeft{

		box-sizing: border-box;

		display: inline-block;

		vertical-align: top;

		margin-bottom: 40px;

		border-top-left-radius: 10px;

		border-bottom-left-radius: 10px;

		text-align: center;

		background: #fff;

		background: -webkit-linear-gradient(left, #fff 85%, #aaabaf); /* For Safari 5.1 to 6.0 */

		background: -o-linear-gradient(right, #fff 85%, #aaabaf); /* For Opera 11.1 to 12.0 */

		background: -moz-linear-gradient(right, #fff 85%, #aaabaf); /* For Firefox 3.6 to 15 */

		background: linear-gradient(to right, #fff 85%, #aaabaf); /* Standard syntax */

		width: 60%;

		max-width: 515px;

		height: 420px;

		padding-top: 35px;

	}

	#topRight{

		box-sizing: border-box;

		display: inline-block;

		vertical-align: top;

		margin-bottom: 40px;

		width: 35%;

		max-width: 435px;

		height: 420px;

	}

	#topLeft img{

		width: 100%;

		max-width: 365px;

		box-shadow: 0px 3px 8px;

	}

	#topLeft h1{

		font-family: 'Open Sans', sans-serif;

		font-size: 45px;

		background: none;

		color: #2B3990;

	}

	#topLeft h3{

		font-family: 'Open Sans', sans-serif;

		font-size: 31px;

		color: #fff;

		height: 55px;

		width: 100%;

		max-width: 365px;

		padding-top: 15px;

		margin-right: auto;

		margin-left: auto;

		margin-bottom: 15px;

		border: 1px solid #2B3990;

		background: #2B3990;

		background: -webkit-radial-gradient(circle, #23a8e0, #2B3990); 

		background: -moz-radial-gradient(circle, #23a8e0, #2B3990); 

		background: -ms-radial-gradient(circle, #23a8e0, #2B3990);

	}

	#topLeft span{

		font-family: 'Open Sans', sans-serif;

		font-size: 29px;

		color: #2B3990;

		margin: 0;

	}

	#topRight h4{

		font-size: 20px;

		color: #F9D534;

		padding-top: 35px;

		text-align: center;

	}

	#topRight div{

		font-family: 'Open Sans', sans-serif;

		font-size: 17px;

		color: #fff;

		display: block;

		width: 100%;

		max-width: 225px;

		padding-left: 20px;

		margin-right: auto;

		margin-left: auto;

		padding-top: 30px;

	}

	#topRight ul{

		font-family: 'Open Sans', sans-serif;

		margin: 0;

		padding: 0;

		list-style: none;

	}

	#topRight li{

		font-family: 'Open Sans', sans-serif;

		color: #fff;

		font-size: 15px;

		list-style: none;

	}

	#topRight li:before {

		content: "- ";

	}

	#top #headWrap{

		position: absolute;

		box-sizing: border-box;

		z-index: 1;

		bottom: 20px;

		width: 100%;

		height: 75px;

		margin-right: auto;

		margin-left: auto;

	}

	#top h2{

		font-family: 'Open Sans', sans-serif;

		text-align: center;

		box-sizing: border-box;

		padding: 0;

		padding-top: 10px;

		width: 90%;

		max-width: 690px;

		height: 75px;

		font-size: 45px;

		margin-right: auto;

		margin-left: auto;

		color: #2B3990;

		background: #f0cf12;

		background: -webkit-radial-gradient(circle, #f0cf12, #fcb318); 

		background: -moz-radial-gradient(circle, #f0cf12, #fcb318); 

		background: -ms-radial-gradient(circle, #f0cf12, #fcb318);

	}

	#borderWrap{

		position: absolute;

		bottom: 0;

		width: 100%;

		height: 50px;

	}

	#border{

		width: 100%;

		max-width: 955px;

		height: 50px;

		box-shadow: 0px 3px 8px;

		background: #f0cf12;

		margin-right: auto;

		margin-left: auto;

		border-top-left-radius: 10px;

		border-top-right-radius: 10px;

		background: #f0cf12;

		background: -webkit-linear-gradient(#23a8e0, #2B3990); 

		background: -moz-linear-gradient(#23a8e0, #2B3990); 

		background: -ms-linear-gradient(#23a8e0, #2B3990);

	}

	#bottom{

		position: relative;

		top: -1px;

		background: #fff;

		box-sizing: border-box;

		width: 100%;

		max-width: 955px;

		box-shadow: 0 0 8px;

		margin-right: auto;

		margin-left: auto;

		margin-bottom: 50px;

		padding: 25px;

	}

	#bottomLeft{

		color: #2B3990;

		display: inline-block;

		vertical-align: top;

		background: #e9eaec;

		width: 100%;

		max-width: 365px;

		overflow: hidden;

		border: 1px solid #aaa;

		height: 655px;

		margin-right: 25px;

	}



	#bottomRight{

		display: inline-block;

		vertical-align: top;

		background: #e9eaec;

		width: 100%;

		max-width: 500px;

		border: 1px solid #aaa;

		height: 655px;

	}

	#contactInfo{

		font-family: 'Open Sans', sans-serif;

		text-align: center;

		color: #fff;

		height: 340px;

		width: 100%;

		max-width: 340px;

		background: #f0cf12;

		background: -webkit-linear-gradient(#23a8e0, #2B3990); 

		background: -moz-linear-gradient(#23a8e0, #2B3990); 

		background: -ms-linear-gradient(#23a8e0, #2B3990);

		margin-right: auto;

		margin-left: auto;

		margin-top: 15px;

		border: 1px solid #2B3990;

	}

	#contactInfo h3{

		font-family: 'Open Sans', sans-serif;

		box-sizing: border-box;

		font-size: 19px;

		color: #fff;

		height: 50px;

		width: 100%;

		padding-top: 15px;

		margin-top: 30px;

		margin-right: auto;

		margin-left: auto;

		margin-bottom: 15px;

		border: 1px solid #2B3990;

		background: #2B3990;

		background: -webkit-radial-gradient(circle, #146fb8, #2B3990); 

		background: -moz-radial-gradient(circle, #146fb8, #2B3990); 

		background: -ms-radial-gradient(circle, #146fb8, #2B3990);

	}

	#contactInfo #name{

		display: block;

		font-size: 23px;

		margin-bottom: 20px;

	}

	#contactInfo #email{

		display: block;

		font-size: 12px;

		margin-bottom: 10px;

	}

	#contactInfo #address{

		box-sizing: border-box;

		height: 85px;

		width: 100%;

		max-width: 295px;

		margin-right: auto;

		margin-left: auto;

		background: #2B3990;

		padding: 20px 40px 20px 40px;

		margin-bottom: 25px;

	}

	#contactInfo #call{

		font-size: 18px;

	}

	#bottomLeft p{

		font-family: 'Open Sans', sans-serif;

		margin: 30px;

	}

	#form{

		display: block;

		padding-top: 30px;

		margin-left: auto;

		margin-right: auto;

		width: 100%;

		max-width: 410px;

	}

	#form input{

		font-family: 'Open Sans', sans-serif;

		box-sizing: border-box;

		height: 35px;

		width: 100%;

		max-width: 410px;

		border-radius: 5px;

		margin-bottom: 15px;

		border: 1px solid #c9c9c9;

		padding: 10px;

	}

	#form #city{

		width: 100%;

		max-width: 260px;

	}

	#form #select{

		width: 100%;

		max-width: 410px;

		margin-right: auto;

		margin-left: auto;

		margin-bottom: 20px;

	}

	#form #select span{

		font-family: 'Open Sans', sans-serif;

		font-size: 13px;

		color: #777;

	}

	#form select{

		font-family: 'Open Sans', sans-serif;

		box-sizing: border-box;

		height: 35px;

		width: 100%;

		max-width: 115px;

		border-radius: 5px;

		border: 1px solid #eb1c24;

		padding: 5px;

		float: right;

		margin-left: 20px;

	}

	#form textarea{

		font-family: 'Open Sans', sans-serif;

		display: block;

		box-sizing: border-box;

		margin-left: auto;

		margin-right: auto;

		height: 100px;

		width: 100%;

		max-width: 410px;

		border: 1px solid #c9c9c9;

		padding: 5px;

		margin-bottom: 10px;

	}

	#form button{

		color: #fff;

		font-size: 20px;

		display: block;

		margin-right: auto;

		margin-left: auto;

		background: #fcb040;

		height: 50px;

		width: 100%;

		max-width: 245px;

		border: none;

		border-radius: 5px;

		border-bottom: 5px solid #f4c714;

		box-shadow: 0px 3px 4px #bbb;

	}

	#ajax-message {

		font-family: 'Open Sans', sans-serif;

		margin: 0;

		display: block;

	}

	#ajax-message span.success{

		color: green;

	} 

	#ajax-message span.error{

		color: red;

	} 

	.loading {

		background-image: url(../images/loading.gif);

		background-position: center center;

		background-repeat: no-repeat;

		padding: 5px 10px;

		width: 54px;

		height: 29px;

	}



	@media screen and (max-width:980px) {

		#top{

			height: 600px;

		}

		#topContent{

			top: 50px;

		}

		#topLeft h3{

			font-size: 24px;

		}

		#bottom{

			padding: 20px;

		}

		#bottomLeft{

			width: 45%;

			margin-right: 10px;

		}

		#bottomRight{

			width: 50%;

		}

		#contactInfo{

			width: 95%;

			margin-top: 10px;

		}

		#contactInfo #name{

			margin-bottom: 15px;

		}

		#bottomLeft p{

			margin: 15px;

		}

		#form input, #form #city, #form textarea{

			width: 90%;

			margin-right: 10px;

			margin-left: 10px;

			margin-bottom: 10px;

		}

		#form #select{

			text-align: center;

			width: 90%;

			margin-right: auto;

			margin-left: auto;

		}

		#form span{

			display: block;

			width: 100%;

		}

		#form select{

			margin: 0 10px 10px 10px;

			float: none;

		}

	}



	@media screen and (max-width:650px) {

		.mobile{

			display: block;

			font-size: 25px;

			text-align: center;

			text-decoration: underline;

			color: #fff;

			height: 50px;

			width: 100%;

			padding-top: 10px;

			margin-top: 0;

			border: 1px solid #2B3990;

			background: #2B3990;

			background: -webkit-radial-gradient(circle, #146fb8, #2B3990); 

			background: -moz-radial-gradient(circle, #146fb8, #2B3990); 

			background: -ms-radial-gradient(circle, #146fb8, #2B3990);

		}

		#top{

			height: auto;

			padding-bottom: 30px;

		}

		#topContent{

			background: none;

			border: none;

			top: 20px;

			height: auto;

			width: 100%;

		}

		#topLeft{

			display: block;

			margin: 0 auto 15px auto;

			width: 95%;

			height: auto;

			overflow: hidden;

			border-radius: 5px;

			padding-top: 15px;

			padding-bottom: 15px;

		}

		#topRight{

			display: block;

			display: none;

			margin: 0;

			max-width: none;

			width: 100%;

			height: auto;

			height: auto;

			padding-bottom: 15px;

			border: none;

			background: -webkit-linear-gradient(rgba(43,57,144,1), rgba(43,57,144,0) 66%); /* For Safari 5.1 to 6.0 */

			background: -o-linear-gradient(rgba(43,57,144,1), rgba(43,57,144,0) 66%); /* For Opera 11.1 to 12.0 */

			background: -moz-linear-gradient(rgba(43,57,144,1), rgba(43,57,144,0) 66%); /* For Firefox 3.6 to 15 */

			background: linear-gradient(rgba(43,57,144,1), rgba(43,57,144,0) 66%); /* Standard syntax */

		}

		#topLeft img{

			width: 90%;

			max-width: 300px;

		}

		#topLeft h1{

			font-size: 45px;

		}

		#topLeft h3{

			width: 100%;

			height: 30px;

			padding: 5px;

			margin-bottom: 10px;

		}

		#topLeft span{

			font-size: 20px;

		}

		#topRight h4{

			padding-top: 15px;

		}

		#topRight div{

			font-size: 15px;

			padding-top: 10px;

		}

		#top #headWrap{

			display: none;

		}

		#borderWrap{

			display: none;

		}

		#bottom{

			padding: 0;

			margin-bottom: 0;

		}

		#bottomLeft{

			display: none;

			width: 100%;

			max-width: none;

			margin: 0;

			height: auto;

			margin-bottom: 0;

		}

		#bottomRight{

			display: none;

			vertical-align: top;

			background: #e9eaec;

			width: 100%;

			max-width: none;

			border: 1px solid #aaa;

			height: auto;

			padding-bottom: 10px;

		}

		#contactInfo{

			margin-top: 10px;

			height: auto;

			padding-bottom: 15px;

		}

		#contactInfo h3{

			padding-top: 10px;

			margin-top: 10px;

			margin-bottom: 10px;

		}

		#contactInfo #name{

			margin-bottom: 10px;

		}

		#contactInfo #address{

			box-sizing: border-box;

			height: auto;

			padding: 10px;

			margin-bottom: 10px;

		}

		#bottomLeft p{

			margin: 10px;

		}



		#form{

			padding-top: 15px;

		}

		#form input, #form #city, #form textarea{

			width: 95%;

			margin-bottom: 15px;

			padding: 10px;

		}

	}

</style>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

<script type="text/javascript" src="js/scripts.js"></script>



<div id="top">

	<div id="topContent">

		<div id="topLeft">

			<img src="images/logo.png" alt="Iron Guard Housing Logo">

			<h1>RV PARK/HOUSING</h1>

			<h3>Now Serving Big Lake TX</h3>

			<span>903 E 3rd St. Big Lake, TX76932</span>

		</div>

		<div class="mobile">Services Available</div>

		<div id="topRight">

			<h4 >SERVICES AVAILABLE</h4>

			<div>

				Utilities - Paid by landlord

				<ul>

					<li>City Water</li>

					<li>City Sewer</li>

					<li>30 &amp; 50 Amp hook ups</li>

				</ul>

				Walking Distance from

				<ul>

					<li>Restaurants</li>

					<li>Groceries</li>

					<li>Downtown</li>

				</ul>

				New convenience store &amp; restaurant going in next to park.

			</div>

		</div>

	</div>

	<div id="headWrap">

		<h2>Call Now! 509-521-2015</h2>

	</div>

	<div id="borderWrap">

		<div id="border"></div>

	</div>

</div>

<div id="bottom">

	<div class="mobile">About Us</div>

	<div id="bottomLeft">

		<div id="contactInfo">

			<h3>CONTACT INFORMATION</h3>

			<span id="name">Chad Ross</span>

			<span id="email">Email: Chad@rossmgt.com</span>

			<div id="address">925 Fairgrounds Road Goldendale, WA. 98620</div>

			<span id="call">Call Now! 509-521-2015</span>

		</div>

		<p>Iron Guard Housing (IGH) is now offering RV spaces for rental on a monthly basis.</p>

		<p>OUR GOALS - IGH understands and is committed to servicing our customer's needs. We strive to provide our tenants with safe, comfortable living quarters which will help to provide a well-rested and more productive worker.</p>

	</div>

	<div class="mobile">Contact Us</div>

	<!-- <div id="bottomRight">

		<form id="form" action="">

			<input type="text" class="name" name="name" placeholder="Your Name" id="name">

			<input type="text" class="address" name="address" placeholder="Mailing Address" id="address">

			<input type="text" class="city" name="city" placeholder="City" id="city">

			<input type="text" class="phone" name="phone" placeholder="Phone" id="phone">

			<div id="select">

				<span>Best Time To Call</span>

				<select name="day" id="day" class="day">

					<option value="Any">Any Day</option>

					<option value="Sunday">Sunday</option>

					<option value="Monday">Monday</option>

					<option value="Tuesday">Tuesday</option>

					<option value="Wednesday">Wednesday</option>

					<option value="Thursday">Thursday</option>

					<option value="Friday">Friday</option>

					<option value="Saturday">Saturday</option>

				</select>

				<select name="time" id="time" class="time">

					<option value="Any">Any Time</option>

					<option value="Morning">Morning</option>

					<option value="Afternoon">Afternoon</option>

					<option value="Evening">Evening</option>

				</select>

			</div>

			<input type="text" class="email" id="email" name="email" placeholder="Email Address">

			<input type="text" class="when" id="when" name="when" placeholder="When Will you need space?">

			<input type="text" class="size" id="size" name="size" placeholder="What Size Space do you Need?">

			<textarea name="message" placeholder="Comments"></textarea>

			<p id="ajax-message"></p>

			<div class="formButton">

				<button type="submit" class="send">Submit</button>

			</div>

		</form>

	</div>-->

</div>



<?php require 'footer.php' ?>

