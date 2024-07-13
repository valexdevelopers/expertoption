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
				
				<form class="form-signin1 full_side text-white" action="{{ route('verification.send') }}" method="POST">
					@csrf
					
					@if(session('status') == 'verification-link-sent')
						<div class="alert alert-success alert-dismissible fade show " role="alert">
							<strong>A new verification link has been sent to the email address you provided during registration.</strong>
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
						</div>
			@else
			<div class="alert alert-success alert-dismissible fade show " role="alert">
			<strong> Thanks for signing up! Before you can coninue, you need to verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, click resend email.'
			</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
			</div>
					@endif
					
					<input type="submit" name="" class="btn btn-lg btn-primary btn-round" style="background:#3f48cc;color:white" value="Resend Verification Email"><br>
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
