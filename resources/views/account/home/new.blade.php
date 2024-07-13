@include('includes.userdashboardhead')

  	<body class="menuclose-right" style="position: relative; min-height: 100%; top: 0px;">
  		@include('includes.userheader')

		<div class="wrapper-content">
		<!-- <div class="container" style="max-width:1300px"> -->
			<div class="container" style="max-width:1400px">
				<div class="row  align-items-center justify-content-between" style="margin-top:10px">
					<div class="col-16 col-sm-16">
					<p style="color:white"> <b>Username :</b> {{ Auth::user()->username }}  </p></div>
				</div>
			
	
				<!-- TradingView Widget BEGIN -->
				<div class="tradingview-widget-container" style="width: 100%; height: 46px;">
					<iframe scrolling="no" allowtransparency="true" frameborder="0" style="user-select: none; box-sizing: border-box; display: block; height: 46px; width: 100%;" src="https://www.tradingview-widget.com/embed-widget/ticker-tape/?locale=en#%7B%22symbols%22%3A%5B%7B%22proName%22%3A%22FOREXCOM%3ASPXUSD%22%2C%22title%22%3A%22S%26P%20500%22%7D%2C%7B%22proName%22%3A%22FOREXCOM%3ANSXUSD%22%2C%22title%22%3A%22Nasdaq%20100%22%7D%2C%7B%22proName%22%3A%22FX_IDC%3AEURUSD%22%2C%22title%22%3A%22EUR%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3ABTCUSD%22%2C%22title%22%3A%22BTC%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3AETHUSD%22%2C%22title%22%3A%22ETH%2FUSD%22%7D%5D%2C%22showSymbolLogo%22%3Atrue%2C%22colorTheme%22%3A%22dark%22%2C%22isTransparent%22%3Afalse%2C%22displayMode%22%3A%22relative%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A46%2C%22utm_source%22%3A%22boommarketing24optiontrade.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22ticker-tape%22%2C%22page-uri%22%3A%22boommarketing24optiontrade.com%2Faccount%2Fdash%2Fhome%22%7D" title="ticker tape TradingView widget" lang="en"></iframe>
					
					<style>
						.tradingview-widget-copyright {
							font-size: 13px !important;
							line-height: 32px !important;
							text-align: center !important;
							vertical-align: middle !important;
							/* @mixin sf-pro-display-font; */
							font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
							color: #B2B5BE !important;
						}
					
						.tradingview-widget-copyright .blue-text {
							color: #2962FF !important;
						}
					
						.tradingview-widget-copyright a {
							text-decoration: none !important;
							color: #B2B5BE !important;
						}
					
						.tradingview-widget-copyright a:visited {
							color: #B2B5BE !important;
						}
					
						.tradingview-widget-copyright a:hover .blue-text {
							color: #1E53E5 !important;
						}
					
						.tradingview-widget-copyright a:active .blue-text {
							color: #1848CC !important;
						}
					
						.tradingview-widget-copyright a:visited .blue-text {
							color: #2962FF !important;
						}
					</style>
		
				</div>
				<!-- TradingView Widget END -->
	
	
				<div class="row mgt5">
					<div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-4">
					<div class="activity-block danger">
						<div class="media">
						<div class="media-body">
							<h5 class="font-weight-bold">{{ Auth::user()->currency }} {{ number_format($totalInvestment->sum('paid_amount'), 2) }}</span></h5>
							<p>Investment</p>
						</div>
						<i class="fas fa-chart-bar"></i>
						</div>
						<div class="row">
						<div class="progress ">
							<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 86%;"><span class="trackerball"></span></div>
						</div>
						</div>
						<i style="margin-top:-12px;" class="bg-icon text-center fas fa-chart-bar"></i>
					</div>
					</div>
					<div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-4">
					<div class="activity-block danger">
						<div class="media">
						<div class="media-body">
							<h5 class="font-weight-bold">{{ Auth::user()->currency }}<span class=""> {{ number_format(Auth::user()->trades->sum('profit') + Auth::user()->trades->sum('bunus') + Auth::user()->balance, 2) }}</span></h5>
							<p>Total Balance</p>
						</div>
						<i class="fas fa-chart-bar"></i>
						</div>
						<div class="row">
						<div class="progress ">
							<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="trackerball"></span></div>
						</div>
						</div>
						<i style="margin-top:-12px;" class="bg-icon text-center fas fa-chart-bar"></i>
					</div>
					</div>
					<div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-4">
					<div class="activity-block danger">
						<div class="media">
						<div class="media-body">
							<h5 class="font-weight-bold">{{ Auth::user()->currency }}<span class="">{{ number_format(Auth::user()->trades->sum('bonus'), 2) }}</span></h5>
							<p>Total Bonus</p>
						</div>
						<i class="fas fa-users"></i>
						</div>
						<div class="row">
						<div class="progress ">
							<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"><span class="trackerball"></span></div>
						</div>
						</div>
						<i style="margin-top:-12px;" class="bg-icon text-center fas fa-users"></i>
					</div>
					</div>
					<div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-4">
					<div class="activity-block danger">
						<div class="media">
						<div class="media-body">
							<h5 class="font-weight-bold"><span class=""><i style="color:#0f0;font-size:20px" class="fas fa-check-circle blink_me"> Verified</i></span></h5>
							<p>Account Status</p>
						</div>
						<i class="fas fa-address-card"></i>
						</div>
						<div class="row">
						<div class="progress ">
							<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="trackerball"></span></div>
						</div>
						</div>
						<i style="margin-top:-12px;" class="bg-icon text-center fas fa-address-card"></i>
					</div>
					</div>
				</div>
	
				<div class="row  align-items-center justify-content-between" style="margin-top:10px">
					<div class="col-16 col-sm-16">
					<div class="btn-group pull-right">
						<a href="{{ route('dashboard') }}"><button class="btn btn-success btn-outline-light"><span class="">Account</span> <span class="text"><i class="fas fa-tachometer-alt ml-2"></i></span></button></a>
						<a href="{{ route('deposit.create') }}"><button class="btn btn-success btn-outline-light"><span class="">Make Deposit</span> <span class="text"><i class="fas fa-coins ml-2"></i></span></button></a>
						<a href="{{ route('purchase.create') }}"><button class="btn btn-success btn-outline-light"><span class="">Signal Purchase</span> <span class="text"><i class="fa fa-signal"></i></span></button></a>
						<a ref="{{ route('withdraw.index') }}"><button class="btn btn-success btn-outline-light"><span class="">Withdraw Funds</span> <span class="text"><i class="fas fa-wallet ml-2"></i></span></button></a>
						<a href="{{ route('trade.create') }}"><button class="btn btn-success btn-outline-light"><span class="">Trade</span> <i class="fa fa-cog fa-money ml-2"></i></button></a>
						<a href="{{ route('settings') }}"><button class="btn btn-danger btn-outline-danger"><span class="">Settings</span> <i class="fa fa-cog fa-spin ml-2"></i></button></a>
					</div>
					</div>
				</div>
				<hr>
	
				<div class="row">
					<div class="col-md-16 col-lg-16 col-xl-16">
					<div class="card full-screen-container">
						<div class="card-header align-items-start justify-content-between flex" style="">
						<h5 class="card-title  pull-left" style="color:white"><b>Live Trading Chart</b></h5>
						<ul class="nav nav-pills card-header-pills pull-right">
							<!-- <li class="nav-item">
							<button type="" class="btn btn-sm btn-outline-primary btn-round" id="livechart"><i class="fa fa-print"></i> <span class="">Get Pdf</span></button>
							</li> -->
							<li class="nav-item">
							<button class="btn btn-sm btn-link btn-round fullscreen-btn"><i class="fa fa-arrows-alt"></i></button>
							</li>
							<li class="nav-item">
							<button class="btn btn-sm btn-link btn-round" data-toggle="collapse" data-target="#demo"><i class="fa fa-chevron-down"></i></button>
							</li>
						</ul>
						</div>
						<div id="tablelivechart">
						<!-- chart -->
						<div class="tradingview-widget-container" id="demo">
							<div id="tradingview_e705a" style="height:550px"><div id="tradingview_40266-wrapper" style="position: relative; box-sizing: content-box; margin: 0px auto !important; padding: 0px !important; font-family: -apple-system, BlinkMacSystemFont, &quot;Trebuchet MS&quot;, Roboto, Ubuntu, sans-serif; width: 100%; height: 100%;"><iframe title="advanced chart TradingView widget" lang="en" id="tradingview_40266" style="width: 100%; height: 100%; margin: 0px !important; padding: 0px !important;" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen="true" src="https://s.tradingview.com/widgetembed/?hideideas=1&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=en#%7B%22symbol%22%3A%22NASDAQ%3AAMZN%22%2C%22frameElementId%22%3A%22tradingview_40266%22%2C%22interval%22%3A%221%22%2C%22hide_side_toolbar%22%3A%220%22%2C%22allow_symbol_change%22%3A%221%22%2C%22save_image%22%3A%221%22%2C%22details%22%3A%221%22%2C%22studies%22%3A%22AwesomeOscillator%40tv-basicstudies%5Cu001fMACD%40tv-basicstudies%22%2C%22theme%22%3A%22dark%22%2C%22style%22%3A%221%22%2C%22timezone%22%3A%22America%2FLos_Angeles%22%2C%22studies_overrides%22%3A%22%7B%7D%22%2C%22utm_source%22%3A%22boommarketing24optiontrade.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22chart%22%2C%22utm_term%22%3A%22NASDAQ%3AAMZN%22%2C%22page-uri%22%3A%22boommarketing24optiontrade.com%2Faccount%2Fdash%2Fhome%22%7D"></iframe></div></div>
							<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
							<script type="text/javascript">
							new TradingView.widget({
								"autosize": true,
								// "width": 1200,
								// "height": 610,
								"symbol": "NASDAQ:AMZN",
								"interval": "1",
								"timezone": "America/Los_Angeles",
								"theme": "dark",
								"style": "1",
								"locale": "en",
								"toolbar_bg": "#f1f3f6",
								"enable_publishing": false,
								"hide_side_toolbar": false,
								"allow_symbol_change": true,
								"details": true,
								"studies": [
								"AwesomeOscillator@tv-basicstudies",
								"MACD@tv-basicstudies"
								],
								"container_id": "tradingview_e705a"
							});
							</script>
						</div>
						<!-- chart end -->
						</div>
					</div>
					</div>
				</div>
	
	
				<div class="row">
					<div class="col-md-16 col-lg-8 col-xl-8">
					<div class="card full-screen-container">
						<div class="card-header align-items-start justify-content-between flex">
						<h5 class="card-title  pull-left"><b>Cryptocurrency Market</b></h5>
						<ul class="nav nav-pills card-header-pills pull-right">
							<!-- <li class="nav-item">
							<button type="" class="btn btn-sm btn-outline-primary btn-round" id="chart1"><i class="fa fa-print"></i> <span class="">Get Pdf</span></button>
							</li> -->
							<li class="nav-item">
							<button class="btn btn-sm btn-link btn-round fullscreen-btn"><i class="fa fa-arrows-alt"></i></button>
							</li>
							<li class="nav-item">
							<button class="btn btn-sm btn-link btn-round" data-toggle="collapse" data-target="#demo3"><i class="fa fa-chevron-down"></i></button>
							</li>
						</ul>
						</div>
						<div id="tablechart1">
						<div id="demo3" class="">
							<!-- TradingView Widget BEGIN -->
							<div class="tradingview-widget-container" style="width: 100%; height: 350px;">
							<iframe allowtransparency="true" frameborder="0" style="user-select: none; box-sizing: border-box; display: block; height: 100%; width: 100%;" src="https://www.tradingview-widget.com/embed-widget/crypto-mkt-screener/?locale=en#%7B%22width%22%3A%22100%25%22%2C%22height%22%3A350%2C%22defaultColumn%22%3A%22overview%22%2C%22screener_type%22%3A%22crypto_mkt%22%2C%22displayCurrency%22%3A%22USD%22%2C%22colorTheme%22%3A%22dark%22%2C%22market%22%3A%22crypto%22%2C%22enableScrolling%22%3Atrue%2C%22utm_source%22%3A%22boommarketing24optiontrade.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22cryptomktscreener%22%2C%22page-uri%22%3A%22boommarketing24optiontrade.com%2Faccount%2Fdash%2Fhome%22%7D" title="crypto mkt-screener TradingView widget" lang="en"></iframe>
							<!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text">Cryptocurrency Markets</span></a> by TradingView</div> -->
							
							<style>
						.tradingview-widget-copyright {
							font-size: 13px !important;
							line-height: 32px !important;
							text-align: center !important;
							vertical-align: middle !important;
							/* @mixin sf-pro-display-font; */
							font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
							color: #B2B5BE !important;
						}
					
						.tradingview-widget-copyright .blue-text {
							color: #2962FF !important;
						}
					
						.tradingview-widget-copyright a {
							text-decoration: none !important;
							color: #B2B5BE !important;
						}
					
						.tradingview-widget-copyright a:visited {
							color: #B2B5BE !important;
						}
					
						.tradingview-widget-copyright a:hover .blue-text {
							color: #1E53E5 !important;
						}
					
						.tradingview-widget-copyright a:active .blue-text {
							color: #1848CC !important;
						}
					
						.tradingview-widget-copyright a:visited .blue-text {
							color: #2962FF !important;
						}
					</style>
					</div>
							<!-- TradingView Widget END -->
						</div>
				
						</div>
					</div>
					</div>
					<!-- </div> -->
				
				
					<!-- <div class="row"> -->
					<div class="col-md-16 col-lg-8 col-xl-8">
					<div class="card full-screen-container">
						<div class="card-header align-items-start justify-content-between flex">
						<h5 class="card-title  pull-left"><b>Stock Market Data</b></h5>
						<ul class="nav nav-pills card-header-pills pull-right">
							<!-- <li class="nav-item">
							<button type="" class="btn btn-sm btn-outline-primary btn-round" id="chart2"><i class="fa fa-print"></i> <span class="">Get Pdf</span></button>
							</li> -->
							<li class="nav-item">
							<button class="btn btn-sm btn-link btn-round fullscreen-btn"><i class="fa fa-arrows-alt"></i></button>
							</li>
							<li class="nav-item">
							<button class="btn btn-sm btn-link btn-round" data-toggle="collapse" data-target="#demo1"><i class="fa fa-chevron-down"></i></button>
							</li>
						</ul>
						</div>
						<div id="tablechart2">
						<div id="demo1" class="">
							<div class="tradingview-widget-container" style="width: 100%; height: 350px;">
							<!-- TradingView Widget BEGIN -->
							<!-- <div class="tradingview-widget-container"> -->
							<iframe scrolling="no" allowtransparency="true" frameborder="0" style="user-select: none; box-sizing: border-box; display: block; height: 100%; width: 100%;" src="https://www.tradingview-widget.com/embed-widget/market-quotes/?locale=en#%7B%22width%22%3A%22100%25%22%2C%22height%22%3A350%2C%22symbolsGroups%22%3A%5B%7B%22name%22%3A%22stock%22%2C%22symbols%22%3A%5B%7B%22name%22%3A%22NASDAQ%3ANDAQ%22%2C%22displayName%22%3A%22NASDAQ%22%7D%2C%7B%22name%22%3A%22NASDAQ%3AAAPL%22%2C%22displayName%22%3A%22APPLE%20STOCK%22%7D%2C%7B%22name%22%3A%22NASDAQ%3AGOOGL%22%2C%22displayName%22%3A%22GOOGL%22%7D%2C%7B%22name%22%3A%22NASDAQ%3ANVAX%22%2C%22displayName%22%3A%22NVAX%20NA%22%7D%2C%7B%22name%22%3A%22NASDAQ%3AAMZN%22%2C%22displayName%22%3A%22AMZN%22%7D%2C%7B%22name%22%3A%22NASDAQ%3AFB%22%2C%22displayName%22%3A%22FACEB%22%7D%2C%7B%22name%22%3A%22NASDAQ%3ATLSA%22%2C%22displayName%22%3A%22TLSA%22%7D%5D%7D%2C%7B%22name%22%3A%22Indices%22%2C%22originalName%22%3A%22Indices%22%2C%22symbols%22%3A%5B%7B%22name%22%3A%22FOREXCOM%3ASPXUSD%22%2C%22displayName%22%3A%22S%26P%20500%22%7D%2C%7B%22name%22%3A%22FOREXCOM%3ANSXUSD%22%2C%22displayName%22%3A%22Nasdaq%20100%22%7D%2C%7B%22name%22%3A%22FOREXCOM%3ADJI%22%2C%22displayName%22%3A%22Dow%2030%22%7D%2C%7B%22name%22%3A%22INDEX%3ANKY%22%2C%22displayName%22%3A%22Nikkei%20225%22%7D%2C%7B%22name%22%3A%22INDEX%3ADEU30%22%2C%22displayName%22%3A%22DAX%20Index%22%7D%2C%7B%22name%22%3A%22FOREXCOM%3AUKXGBP%22%2C%22displayName%22%3A%22UK%20100%22%7D%5D%7D%2C%7B%22name%22%3A%22Commodities%22%2C%22originalName%22%3A%22Commodities%22%2C%22symbols%22%3A%5B%7B%22name%22%3A%22CME_MINI%3AES1!%22%2C%22displayName%22%3A%22S%26P%20500%22%7D%2C%7B%22name%22%3A%22CME%3A6E1!%22%2C%22displayName%22%3A%22Euro%22%7D%2C%7B%22name%22%3A%22COMEX%3AGC1!%22%2C%22displayName%22%3A%22Gold%22%7D%2C%7B%22name%22%3A%22NYMEX%3ACL1!%22%2C%22displayName%22%3A%22Crude%20Oil%22%7D%2C%7B%22name%22%3A%22NYMEX%3ANG1!%22%2C%22displayName%22%3A%22Natural%20Gas%22%7D%2C%7B%22name%22%3A%22CBOT%3AZC1!%22%2C%22displayName%22%3A%22Corn%22%7D%5D%7D%2C%7B%22name%22%3A%22Bonds%22%2C%22originalName%22%3A%22Bonds%22%2C%22symbols%22%3A%5B%7B%22name%22%3A%22CME%3AGE1!%22%2C%22displayName%22%3A%22Eurodollar%22%7D%2C%7B%22name%22%3A%22CBOT%3AZB1!%22%2C%22displayName%22%3A%22T-Bond%22%7D%2C%7B%22name%22%3A%22CBOT%3AUB1!%22%2C%22displayName%22%3A%22Ultra%20T-Bond%22%7D%2C%7B%22name%22%3A%22EUREX%3AFGBL1!%22%2C%22displayName%22%3A%22Euro%20Bund%22%7D%2C%7B%22name%22%3A%22EUREX%3AFBTP1!%22%2C%22displayName%22%3A%22Euro%20BTP%22%7D%2C%7B%22name%22%3A%22EUREX%3AFGBM1!%22%2C%22displayName%22%3A%22Euro%20BOBL%22%7D%5D%7D%2C%7B%22name%22%3A%22Forex%22%2C%22originalName%22%3A%22Forex%22%2C%22symbols%22%3A%5B%7B%22name%22%3A%22FX%3AEURUSD%22%7D%2C%7B%22name%22%3A%22FX%3AGBPUSD%22%7D%2C%7B%22name%22%3A%22FX%3AUSDJPY%22%7D%2C%7B%22name%22%3A%22FX%3AUSDCHF%22%7D%2C%7B%22name%22%3A%22FX%3AAUDUSD%22%7D%2C%7B%22name%22%3A%22FX%3AUSDCAD%22%7D%5D%7D%5D%2C%22showSymbolLogo%22%3Atrue%2C%22colorTheme%22%3A%22dark%22%2C%22isTransparent%22%3Afalse%2C%22utm_source%22%3A%22boommarketing24optiontrade.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22market-quotes%22%2C%22page-uri%22%3A%22boommarketing24optiontrade.com%2Faccount%2Fdash%2Fhome%22%7D" title="market quotes TradingView widget" lang="en"></iframe>
							<!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">stock</span></a> by TradingView</div> -->
							
							<style>
								.tradingview-widget-copyright {
									font-size: 13px !important;
									line-height: 32px !important;
									text-align: center !important;
									vertical-align: middle !important;
									/* @mixin sf-pro-display-font; */
									font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
									color: #B2B5BE !important;
								}
							
								.tradingview-widget-copyright .blue-text {
									color: #2962FF !important;
								}
							
								.tradingview-widget-copyright a {
									text-decoration: none !important;
									color: #B2B5BE !important;
								}
							
								.tradingview-widget-copyright a:visited {
									color: #B2B5BE !important;
								}
							
								.tradingview-widget-copyright a:hover .blue-text {
									color: #1E53E5 !important;
								}
							
								.tradingview-widget-copyright a:active .blue-text {
									color: #1848CC !important;
								}
							
								.tradingview-widget-copyright a:visited .blue-text {
									color: #2962FF !important;
								}
							</style>
							
						</div>
								</div>
								</div>
							</div>
							</div>
						</div>
						
				<br><br>
				
	
			</div>
  
			@include('includes.userfooter')
  		</div>
		<style>.tradingview-widget-copyright {font-size: 13px !important; line-height: 32px !important; text-align: center !important; vertical-align: middle !important; font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important; color: #B2B5BE !important;} .tradingview-widget-copyright .blue-text {color: #2962FF !important;} .tradingview-widget-copyright a {text-decoration: none !important; color: #B2B5BE !important;} .tradingview-widget-copyright a:visited {color: #B2B5BE !important;} .tradingview-widget-copyright a:hover .blue-text {color: #1E53E5 !important;} .tradingview-widget-copyright a:active .blue-text {color: #1848CC !important;} .tradingview-widget-copyright a:visited .blue-text {color: #2962FF !important;}</style>
  
  
  
	@include('includes.usermodal')
  
  
  
  
	@include('includes.userscripts')
  
 

                            
</div></div></body></html>