@include('includes.userdashboardhead')

  <body class="menuclose-right" style="position: relative; min-height: 100%; top: 0px;">

    @include('includes.userheader')
    <div class="wrapper-content">
      <!-- <div class="container" style="max-width:1300px"> -->
      <div class="container" style="max-width:1400px">
  
  
  
		<div class="row  align-items-center justify-content-between" style="margin-top:10px">
			<div class="col-16 col-sm-16">
			<p style="color:white"><b>Buy Signal</b></p>
			</div>
		</div>
			
  
  
		<!-- TradingView Widget BEGIN -->
			<div class="tradingview-widget-container" style="width: 100%; height: 46px;">
				<iframe scrolling="no" allowtransparency="true" frameborder="0" style="user-select: none; box-sizing: border-box; display: block; height: 46px; width: 100%;" src="https://www.tradingview-widget.com/embed-widget/ticker-tape/?locale=en#%7B%22symbols%22%3A%5B%7B%22proName%22%3A%22FOREXCOM%3ASPXUSD%22%2C%22title%22%3A%22S%26P%20500%22%7D%2C%7B%22proName%22%3A%22FOREXCOM%3ANSXUSD%22%2C%22title%22%3A%22Nasdaq%20100%22%7D%2C%7B%22proName%22%3A%22FX_IDC%3AEURUSD%22%2C%22title%22%3A%22EUR%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3ABTCUSD%22%2C%22title%22%3A%22BTC%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3AETHUSD%22%2C%22title%22%3A%22ETH%2FUSD%22%7D%5D%2C%22showSymbolLogo%22%3Atrue%2C%22colorTheme%22%3A%22dark%22%2C%22isTransparent%22%3Afalse%2C%22displayMode%22%3A%22relative%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A46%2C%22utm_source%22%3A%22boommarketing24optiontrade.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22ticker-tape%22%2C%22page-uri%22%3A%22boommarketing24optiontrade.com%2Faccount%2Fdash%2Fwithdraw%22%7D" title="ticker tape TradingView widget" lang="en"></iframe>
			
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
		
  
		<div class="row  align-items-center justify-content-between" style="margin-top:10px">
			<div class="col-16 col-sm-16">
				<div class="btn-group pull-right">
					<a href="home"><button class="btn btn-success btn-outline-light"><span class="">Account</span> <span class="text"><i class="fas fa-tachometer-alt ml-2"></i></span></button></a>
				
				<a href="{{ route('deposit.create') }}"><button class="btn btn-success btn-outline-light"><span class="">Make Deposit</span> <span class="text"><i class="fas fa-coins ml-2"></i></span></button></a>
				<a href="{{ route('purchase.create') }}"><button class="btn btn-success btn-outline-light"><span class="">Signal Purchase</span> <span class="text"><i class="fa fa-signal"></i></span></button></a>
				<a ref="{{ route('withdraw.index') }}"><button class="btn btn-success btn-outline-light"><span class="">Withdraw Funds</span> <span class="text"><i class="fas fa-wallet ml-2"></i></span></button></a>
				<a href="{{ route('trade.create') }}"><button class="btn btn-success btn-outline-light"><span class="">Trade</span> <i class="fa fa-cog fa-money ml-2"></i></button></a>
				<a href="{{ route('settings') }}"><button class="btn btn-danger btn-outline-danger"><span class="">Settings</span> <i class="fa fa-cog fa-spin ml-2"></i></button></a>
				</div>
			</div>
		</div>
		<hr>
		@if(Session::has('message'))
			<div class="alert {{ Session::get('message-color') }} alert-dismissible fade show " role="alert">
				<strong>{{ Session::get('message') }}</strong>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
			</div>
		@endif
		<div class="row">
			
			<div class="col-sm-16 col-md-8">
				<div class="card">
					<div class="card-header align-items-start justify-content-between flex">
					<h4 class="pull-left">Buy Signal Using Bitcoin/Ethereum</h4>
					<ul class="nav nav-pills card-header-pills pull-right">
						<li class="nav-item">
						<button class="btn btn-sm btn-link btn-round" data-toggle="collapse" data-target="#btc_deposit"><i class="fa fa-chevron-down"></i></button>
						</li>
					</ul>
					</div>
					<div class="card-body" id="btc_deposit">
					<div class="ncard small">
						<h6>Bitcoin Deposit Method</h6>
						<hr>
						<b>
						<span style="color:gold"> Please make sure you upload your payment proof for quick payment verification</span><br>
						<span style="color:#17a2b8 !important">On confirmation, our system will automatically convert your BTC or ETH to live value of POUND. Ensure
							that you deposit the actual Bitcoin to the address specified on the payment Page.
						</span>
						</b>
						<br>
						<hr>
						<button type="button" style="float:left" class="btn btn-primary" data-toggle="modal" data-target="#bitcoin_dpa_signal"> Make Ethereum Deposit </button>
						<button type="button" style="float:right" class="btn btn-primary" data-toggle="modal" data-target="#bitcoin_dp_signal"> Make Bitcoin Deposit </button>
						<br><br>
					</div>
					</div>
				</div>
			</div>
			<div class="col-sm-16 col-md-8">
			<div class="card">
				<div class="card-header align-items-start justify-content-between flex">
				<h4 class="pull-left">Other Buy Signal Options</h4>
				<ul class="nav nav-pills card-header-pills pull-right">
					<li class="nav-item">
					<button class="btn btn-sm btn-link btn-round" data-toggle="collapse" data-target="#order_depo"><i class="fa fa-chevron-down"></i></button>
					</li>
				</ul>
				</div>
				<div class="card-body" id="order_depo">
				<div class="ncard small">
					<h6>Request other available Deposit Method</h6>
					<hr>
					<b>
					<span style="color:gold"> Once payment is made using this method you are to send your payment
						proof to our support mail <a href="mailto:support@expertsoption.co">support@expertsoption.co</a></span><br>
					<span style="color:#17a2b8 !important">Once requested, you will receive the payment details via our support mail....
					</span>
					</b>
					<br>
					<hr>
					<button type="button" style="float:right" class="btn btn-primary" data-toggle="modal" data-target="#order_deposit"> Processed</button>
					<br><br>
				</div>
				</div>
			</div>
			</div>
	  	</div>
			
	
	
	
	
	
	
	
	
	
	<br><br>
	
  
  </div>
  
  @include('includes.userfooter')
  </div>
  
  
  @include('includes.usersignal')
  @include('includes.usermodal')
  <!-- Modal Close -->
  
  
  @include('includes.userscripts')

</div>
</div>
</body>