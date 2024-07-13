<!doctype html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,shrink-to-fit=no, user-scalable=0"/> <!--320-->

        <meta charset="utf-8">
        
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../favicon.html" type="image/x-icon">
        <title>Register | Expert Option </title> 
        <link rel="stylesheet" href="{{ asset('vendor/font-awesome-4.7.0/css/font-awesome.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap-4.1.1/css/bootstrap.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/light_adminux.css') }}" type="text/css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

   </head> 

    <!-- g-hide -->
    <style type="text/css">iframe.goog-te-banner-frame{ display: none !important;}</style>
    <style type="text/css">body {position: static !important; top:0px !important;}</style>
    <!-- end-g-hide -->

<body oncut="return false" class="menuclose menuclose-right" style="background:gray">
  <!-- <figure class="background"> <img src="img/kk7.gif" alt="Expert Option"> </figure> -->

    <figure class="background">
		<video autoplay muted="muted" loop id="myVideo">
			<source src="{{asset('img/bg.mp4')}}" type="video/mp4">
		</video>
    </figure>
    <style>
      #myVideo {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        z-index: -1;
      }
    </style>

	<header class="navbar-fixed">
		<nav class="navbar navbar-toggleable-md sign-in-header">
			<div class="sidebar-left"> <a class="navbar-brand imglogo" href="{{ route('site.home') }}"></a> </div>
			<div class="col"></div>
			<div class="sidebar-right pull-right">
				<ul class="navbar-nav  justify-content-end">
					<li style="margin:4px"><a href="#" class="btn btn-link text-white"></a></li>
					<li style="margin:4px"><a href="{{ route('site.home') }}" style="background:#3f48cc;color:white" class="btn btn-primary">Home</a></li>
					<li style="margin:4px"><a href="{{ route('site.account.login') }}" style="background:#3f48cc;color:white" class="btn btn-primary">Login</a></li>
					<li style="margin:4px"><a href="{{ route('site.account.register') }}" style="background:#3f48cc;color:white" class="btn btn-primary">Register</a></li>
				</ul>
			</div>
		</nav>
	</header>
  	<div class="wrapper-content-sign-in p-0">
		<div class="col-md-8 offset-md-8 text-left side_signing_full">
			
			<form class="form-signin1 full_side text-white" action="{{ route('site.register.store') }}" method="POST">
				@csrf
				@if($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
						
					</div>
				
				@endif
				@if(Session::has('message'))
					<div class="alert {{ Session::get('message-color') }} alert-dismissible fade show " role="alert">
						<strong>{{ Session::get('message') }}</strong>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
					</div>
				@endif
				<img style="width:60%;height:10%" src="img/logo.png"> 
				<span>
					<h3 style="color:crimson;text-align:center"></h3>
				</span>
				<span>
					<h3 style="color:green;text-align:center"></h3>
				</span>
				<h2 class="tex-black mb-4">Register</h2>
				<label style="color:black" class="font-weight-bold">First Name</label>
				<input type="text" style="color:black"  class="form-control @error('firstname')  is-invalid @enderror" name="firstname" placeholder="First Name" value="" required>
				@error('firstname')
					<span style="color:crimson">{{ $message }}</span>
				@enderror
				<br>

				<label style="color:black" class="font-weight-bold">Last Name</label>
				<input type="text" style="color:black"  class="form-control @error('lastname')  is-invalid @enderror" name="lastname" placeholder="Last Name" value="" required>
				@error('lastname')
					<span style="color:crimson">{{ $message }}</span>
				@enderror
				<br>
				<label style="color:black" class="font-weight-bold">Username</label>
				<input type="text" style="color:black"  class="form-control @error('username')  is-invalid @enderror" name="username" placeholder="Username" value="" required>
				@error('username')
					<span style="color:crimson">{{ $message }}</span>
				@enderror
				<br>
				<label style="color:black" class="font-weight-bold">Email address</label>
				<input type="text" style="color:black"  class="form-control @error('email')  is-invalid @enderror" name="email" placeholder="Email address" value="" required>
				@error('email')
					<span style="color:crimson">{{ $message }}</span>
				@enderror
				<br>
				<label style="color:black" class="font-weight-bold">Password</label>
				<input type="password" style="color:black"  class="form-control @error('password')  is-invalid @enderror" name="password" placeholder="Confirm Password" value="" required>
				@error('password')
					<span style="color:crimson">{{ $message }}</span>
				@enderror
				<br>
				<label style="color:black" class="font-weight-bold">Retype Password</label>
				<input type="password" style="color:black"  class="form-control @error('password_confirmation')  is-invalid @enderror" name="password_confirmation" placeholder="Retype Password" value="" required>
				@error('password_confirmation')
					<span style="color:crimson">{{ $message }}</span>
				@enderror
				<br>
				<label style="color:black" class="font-weight-bold">Phone Number</label>
				<input type="text" style="color:black"  class="form-control @error('phone')  is-invalid @enderror" name="phone" placeholder="example:+1234567890" value="" required>
				@error('phone')
					<span style="color:crimson">{{ $message }}</span>
				@enderror
				<br>
				<label style="color:black" class="font-weight-bold">Country</label>
				<select style="color:#252d47" class="form-control @error('country')  is-invalid @enderror " name="country" data-live-search="true" tabindex="-1" aria-hidden="true" required>

					<option value="">Your Country</option>
					<option>Afghanistan</option>
					<option>Albania</option>
					<option>Algeria</option>
					<option>American Samoa</option>
					<option>Andorra</option>
					<option>Angola</option>
					<option>Anguilla</option>
					<option>Antarctica</option>
					<option>Antigua and Barbuda</option>
					<option>Argentina</option>
					<option>Armenia</option>
					<option>Aruba</option>
					<option>Australia</option>
					<option>Austria</option>
					<option>Azerbaidjan</option>
					<option>Bahamas</option>
					<option>Bahrain</option>
					<option>Bangladesh</option>
					<option>Barbados</option>
					<option>Belarus</option>
					<option>Belgium</option>
					<option>Belize</option>
					<option>Benin</option>
					<option>Bermuda</option>
					<option>Bhutan</option>
					<option>Bolivia</option>
					<option>Bosnia-Herzegovina</option>
					<option>Botswana</option>
					<option>Bouvet Island</option>
					<option>Brazil</option>
					<option>British Indian Ocean Territory</option>
					<option>Brunei Darussalam</option>
					<option>Bulgaria</option>
					<option>Burkina Faso</option>
					<option>Burundi</option>
					<option>Cambodia</option>
					<option>Cameroon</option>
					<option>Canada</option>
					<option>Cape Verde</option>
					<option>Cayman Islands</option>
					<option>Central African Republic</option>
					<option>Chad</option>
					<option>Chile</option>
					<option>China</option>
					<option>Christmas Island</option>
					<option>Cocos (Keeling) Islands</option>
					<option>Colombia</option>
					<option>Comoros</option>
					<option>Congo</option>
					<option>Congo (Democratic Republic)</option>
					<option>Cook Islands</option>
					<option>Costa Rica</option>
					<option>Croatia</option>
					<option>Cuba</option>
					<option>Cyprus</option>
					<option>Czech Republic</option>
					<option>Denmark</option>
					<option>Djibouti</option>
					<option>Dominica</option>
					<option>Dominican Republic</option>
					<option>East Timor</option>
					<option>Ecuador</option>
					<option>Egypt</option>
					<option>El Salvador</option>
					<option>Equatorial Guinea</option>
					<option>Eritrea</option>
					<option>Estonia</option>
					<option>Ethiopia</option>
					<option>Falkland Islands</option>
					<option>Faroe Islands</option>
					<option>Fiji</option>
					<option>Finland</option>
					<option>France</option>
					<option>France (European Territory)</option>
					<option>French Guiana</option>
					<option>French Southern Territories</option>
					<option>Gabon</option>
					<option>Gambia</option>
					<option>Georgia</option>
					<option>Germany</option>
					<option>Ghana</option>
					<option>Gibraltar</option>
					<option>Great Britain</option>
					<option>Greece</option>
					<option>Greenland</option>
					<option>Grenada</option>
					<option>Guadeloupe</option>
					<option>Guam</option>
					<option>Guatemala</option>
					<option>Guinea</option>
					<option>Guinea Bissau</option>
					<option>Guyana</option>
					<option>Haiti</option>
					<option>Heard and McDonald Islands</option>
					<option>Holy See (Vatican City State)</option>
					<option>Honduras</option>
					<option>Hong Kong</option>
					<option>Hungary</option>
					<option>Iceland</option>
					<option>India</option>
					<option>Indonesia</option>
					<option>Iran</option>
					<option>Iraq</option>
					<option>Ireland</option>
					<option>Israel</option>
					<option>Italy</option>
					<option>Ivory Coast (Cote D`Ivoire)</option>
					<option>Jamaica</option>
					<option>Japan</option>
					<option>Jordan</option>
					<option>Kazakhstan</option>
					<option>Kenya</option>
					<option>Kiribati</option>
					<option>Kuwait</option>
					<option>Kyrgyz Republic (Kyrgyzstan)</option>
					<option>Laos</option>
					<option>Latvia</option>
					<option>Lebanon</option>
					<option>Lesotho</option>
					<option>Liberia</option>
					<option>Libya</option>
					<option>Liechtenstein</option>
					<option>Lithuania</option>
					<option>Luxembourg</option>
					<option>Macau</option>
					<option>Macedonia</option>
					<option>Madagascar</option>
					<option>Malawi</option>
					<option>Malaysia</option>
					<option>Maldives</option>
					<option>Mali</option>
					<option>Malta</option>
					<option>Marshall Islands</option>
					<option>Martinique</option>
					<option>Mauritania</option>
					<option>Mauritius</option>
					<option>Mayotte</option>
					<option>Mexico</option>
					<option>Micronesia</option>
					<option>Moldavia</option>
					<option>Monaco</option>
					<option>Mongolia</option>
					<option>Montserrat</option>
					<option>Morocco</option>
					<option>Mozambique</option>
					<option>Myanmar</option>
					<option>Namibia</option>
					<option>Nauru</option>
					<option>Nepal</option>
					<option>Netherlands</option>
					<option>Netherlands Antilles</option>
					<option>New Caledonia</option>
					<option>New Zealand</option>
					<option>Nicaragua</option>
					<option>Niger</option>
					<option>Nigeria</option>
					<option>Niue</option>
					<option>Norfolk Island</option>
					<option>North Korea</option>
					<option>Northern Mariana Islands</option>
					<option>Norway</option>
					<option>Oman</option>
					<option>Pakistan</option>
					<option>Palau</option>
					<option>Panama</option>
					<option>Papua New Guinea</option>
					<option>Paraguay</option>
					<option>Peru</option>
					<option>Philippines</option>
					<option>Pitcairn Island</option>
					<option>Poland</option>
					<option>Polynesia</option>
					<option>Portugal</option>
					<option>Puerto Rico</option>
					<option>Qatar</option>
					<option>Reunion</option>
					<option>Romania</option>
					<option>Russian Federation</option>
					<option>Rwanda</option>
					<option>S. Georgia & S. Sandwich Isls.</option>
					<option>Saint Helena</option>
					<option>Saint Kitts & Nevis Anguilla</option>
					<option>Saint Lucia</option>
					<option>Saint Pierre and Miquelon</option>
					<option>Saint Vincent & Grenadines</option>
					<option>Samoa</option>
					<option>San Marino</option>
					<option>Sao Tome and Principe</option>
					<option>Saudi Arabia</option>
					<option>Serbia</option>
					<option>Senegal</option>
					<option>Seychelles</option>
					<option>Sierra Leone</option>
					<option>Singapore</option>
					<option>Slovak Republic</option>
					<option>Slovenia</option>
					<option>Solomon Islands</option>
					<option>Somalia</option>
					<option>South Africa</option>
					<option>South Korea</option>
					<option>Spain</option>
					<option>Sri Lanka</option>
					<option>Sudan</option>
					<option>Suriname</option>
					<option>Svalbard and Jan Mayen Islands</option>
					<option>Swaziland</option>
					<option>Sweden</option>
					<option>Switzerland</option>
					<option>Syria</option>
					<option>Taiwan</option>
					<option>Tajikistan</option>
					<option>Tanzania</option>
					<option>Thailand</option>
					<option>Togo</option>
					<option>Tokelau</option>
					<option>Tonga</option>
					<option>Trinidad and Tobago</option>
					<option>Tunisia</option>
					<option>Turkey</option>
					<option>Turkmenistan</option>
					<option>Turks and Caicos Islands</option>
					<option>Tuvalu</option>
					<option>USA Minor Outlying Islands</option>
					<option>Uganda</option>
					<option>Ukraine</option>
					<option>United Arab Emirates</option>
					<option>United Kingdom</option>
					<option>United States</option>
					<option>Uruguay</option>
					<option>Uzbekistan</option>
					<option>Vanuatu</option>
					<option>Venezuela</option>
					<option>Vietnam</option>
					<option>Virgin Islands (British)</option>
					<option>Virgin Islands (USA)</option>
					<option>Wallis and Futuna Islands</option>
					<option>Weather Stations</option>
					<option>Western Sahara</option>
					<option>Yemen</option>
					<option>Yugoslavia</option>
					<option>Zaire</option>
					<option>Zambia</option>
					<option>Zimbabwe</option>
				</select>
				@error('country')
					<span style="color:crimson">{{ $message }}</span>
				@enderror
				<br>
				<label style="color:black" class="font-weight-bold">State</label>
				<input type="text" style="color:black"  class="form-control @error('state')  is-invalid @enderror" name="state" placeholder="State" value="" required>
				@error('state')
					<span style="color:crimson">{{ $message }}</span>
				@enderror
				<br>
				<label  style="color:black" class="font-weight-bold">Address</label>
				<input type="text" style="color:black"  class="form-control @error('address')  is-invalid @enderror"  name="address" placeholder="Address"  value="" required>
				@error('address')
					<span style="color:crimson">{{ $message }}</span>
				@enderror
				
				<br>
				<label style="color:black" class="font-weight-bold">Currency Type</label>
				<select style="color:#252d47" class="form-control @error('currency')  is-invalid @enderror" name="currency"  data-live-search="true" tabindex="-1" aria-hidden="true" required >
				<option value="&#x24;">DOLLAR &#x24;</option>
				<option value="&#x20AC;">EURO &#x20AC;</option>
				<option value="&#xA3;">POUNDS &#xA3;</option>
				<option value="R">RAND R</option>
				<option value="&#x20BD;">RUSSIAN RUBLE &#x20BD;</option>
				<option value="&#x20BA;">TURKISH LIRA &#x20BA;</option>
				<option value="N$">NAMIBIA DOLLAR N$</option>
				</select>
				@error('currency')
					<span style="color:crimson">{{ $message }}</span>
				@enderror
				<br>
				<label style="color:black" class="font-weight-bold">Account Type</label>
				<select style="color:#252d47" class="form-control @error('type')  is-invalid @enderror" name="type[]"  data-live-search="true" tabindex="-1" aria-hidden="true" required multiple >
					<option value="Forex Trading">Forex Trading</option>
					<option value="Stock Trading">Stock Trading</option>
					<option value="Binary Option Trading">Binary Option Trading</option>
					<option value="CryptoCurrency Investment">CryptoCurrency Investment</option>
					<option value="Bitcoin Mining">Bitcoin Mining</option>
				</select>
				@error('type')
					<span style="color:crimson">{{ $message }}</span>
				@enderror
				<br>
				<div class="g-recaptcha"  data-sitekey="6LfAohokAAAAAMVZqvnCnDeodh7Zjmgef0UJGDDm"></div>
				<br> 
					<br>
					
					<div class="checkbox">
					<input type="checkbox" name="agree" class="form-check-input" checked required>
					<i class="fa fa-pencil"></i>
					<b style="color:black">You agree to our <a style="color:blue" href="{{ route('site.terms') }}">Terms and Conditions</a></b><br>
					
					</div>
					<input type="submit" name="" class="btn btn-lg btn-primary btn-round" style="background:#3f48cc;color:white" value="Register"><br>
			</form>
			<br>
		</div>  
	</div>






	<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
	<script src="ajax/libs/popper.js/1.11.0/umd/popper.min.html" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="vendor/bootstrap4beta/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="vendor/cookie/jquery.cookie.js" type="text/javascript"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>
	<script>
		"use strict";
		$('input[type="checkbox"]').on('change', function() {
		$(this).parent().toggleClass("active")
		$(this).closest(".media").toggleClass("active");
		});
		$(window).on("load", function() {
		/* loading screen */
		$(".loader_wrapper").fadeOut("slow");
		});
	</script>

  	<script src="//code.tidio.co/ot9cireyjhx5wez5nocutk9s76qjbssu.js" async></script>

	<style>
		.mgm {
			border-radius: 7px;
			border: 4px solid #3f48cc;
			position: fixed;
			z-index: 90;
			bottom: 80px;
			right: 20px;
			// bottom: 4px;
			// left: 30px;
			background: #fff;
			padding: 10px 27px;
			box-shadow: 0px 5px 13px 0px rgba(0, 0, 0, .3);
		}

		.mgm a {
			font-weight: 700;
			display: block;
			color: #3f48cc;
		}

		.mgm a,
		.mgm a:active {
			transition: all .2s ease;
			color: #3f48cc;
		}
	</style>
    <div class="mgm" style="display: none;">
        <div class="txt" style="color:black;"></div>
    </div>

    <script data-cfasync="false" src="#"></script>
    <script type="text/javascript">
        var listCountries = ['South Africa', 'USA', 'Germany', 'France', 'Italy', 'Turkey', 'Australia', 'Brazil', 'Canada', 'Argentina', 'Saudi Arabia', 'Mexico', 'China', 'Mexico', 'Venezuela', 'USA', 'Sweden', 'Italy', 'South Africa', 'Italy', 'USA', 'United Kingdom', 'Italy', 'Greece', 'Cuba', 'USA', 'Portugal', 'Austria', 'Spain', 'Panama', 'South Africa', 'China', 'Netherlands', 'Switzerland', 'Belgium', 'Israel', 'Cyprus'];
        var listPlans = ['$51,000', '$14,500', '$40,000', '$41,000', '$10,000', '$50,000', '$52,300', '$9,700', '$10,000', '$4,500', '$9,500', '$34,000', '$42,000', '$4,600', '$3,700', '$27,500','$58,623','$31,600'];
        var transarray = ['just <b>invested</b>', 'has <b>withdrawn</b>', 'is <b>trading with</b>'];

        /*var listCountries = ['UK', 'UK', 'Germany', 'France', 'Italy', 'UK', 'South Africa', 'UK', 'Canada', 'Argentina', 'Saudi Arabia', 'Mexico', 'UK', 'UK', 'UK', 'UK', 'Sweden', 'South Africa', 'UK', 'Italy', 'UK', 'United Kingdom', 'UK', 'Greece', 'Cuba', 'UK', 'Portugal', 'Austria', 'South Africa', 'Panama', 'UK', 'UK', 'Netherlands', 'Switzerland', 'Belgium', 'Israel', 'Cyprus'];
        var listPlans = ['£51,000', '£14,500', '£40,000', '£41,000', '£10,000', '£50,000', '£52,300', '£9,700', '£10,000', '£4,500', '£9,500', '£34,000', '£42,000', '£4,600', '£3,700', '£27,500','£58,623','£31,600'];
        var transarray = ['just <b>invested</b>', 'has <b>withdrawn</b>', 'is <b>trading with</b>'];*/
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var run = setInterval(request, interval);

        function request() {
            clearInterval(run);
            interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
            var country = listCountries[Math.floor(Math.random() * listCountries.length)];
            var transtype = transarray[Math.floor(Math.random() * transarray.length)];
            var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
            var msg = 'Someone from <b>' + country + '</b> ' + transtype + ' <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + '</a>';
            $(".mgm .txt").html(msg);
            $(".mgm").stop(true).fadeIn(300);
            window.setTimeout(function() {
                $(".mgm").stop(true).fadeOut(300);
            }, 10000);
            run = setInterval(request, interval);
        }
    </script>


    <script>
        let dPwd = false;
        function vPwd(){
          let gPwd = $("#pwd");
            if(dPwd === false){
                $("#eye").removeClass("fa-eye-slash")
                $("#eye").addClass("fa-eye")
                gPwd.attr("type", "text");
                dPwd = true;
            }else if(dPwd === true){
                $("#eye").removeClass("fa-eye")
                $("#eye").addClass("fa-eye-slash")
                gPwd.attr("type", "password");
                dPwd = false;
            }
        }

    </script>
    <script>
          // $(document).ready(function(){
            // $("body").bind("cut copy paste",function(e){
            //   e.preventDefault();
            // })
            // $("body").on("contextmenu",function(e){
            //   return false;
            // });
          // }) 
            </script>

        <!-- <body 
        oncut="return false" oncopy="return false" onpaste="return false"
        > -->
	<!-- <script>
			$(document).keydown(function(event){
			if(event.keyCode == 123){
				return false;
			}else if(event.ctrlKey && event.shiftKey && event.keyCode == 73){
				return false;
			}
			})
			document.addEventListener('contextmenu',event => event.preventDefault())
	</script> -->

</body>


</html>