<script src="//code.tidio.co/ot9cireyjhx5wez5nocutk9s76qjbssu.js" async></script>

	<style>
		.mgm {
			border-radius: 7px;
			border: 4px solid #3f48cc;
			position: fixed;
			z-index: 90;
			bottom: 80px;
			right: 20px;
		/* bottom: 4px; */
		/* left: 30px; */
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