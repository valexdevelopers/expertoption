@include('includes.userdashboardhead')

  <body class="menuclose-right" style="position: relative; min-height: 100%; top: 0px;">

    @include('includes.userheader')
    <div class="wrapper-content">
      <!-- <div class="container" style="max-width:1300px"> -->
      <div class="container" style="max-width:1400px">
  
  
  
		<div class="row  align-items-center justify-content-between" style="margin-top:10px">
			<div class="col-16 col-sm-16">
			<p style="color:white"><b>Trade</b></p>
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
			
			<div class="col-sm-12 col-md-12">
				<div class="card">
					<div class="card-header align-items-start justify-content-between flex">
						<h4 class="pull-left">Account Upgrade</h4>
						<ul class="nav nav-pills card-header-pills pull-right">
							<li class="nav-item">
								<button class="btn btn-sm btn-link btn-round" data-toggle="collapse" data-target="#upgrade_deposit"><i class="fa fa-chevron-down"></i></button>
							</li>
						</ul>
					</div>
					<div class="card-body" id="upgrade_deposit">
						@if(Session::has('message'))
							<div class="alert {{ Session::get('message-color') }} alert-dismissible fade show " role="alert">
								<strong>{{ Session::get('message') }}</strong>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
							</div>
						@endif
						<div class="modal-body">
							<form method="POST" action="{{ route('purchase.upgrade') }}">
								@csrf
								<div class="form-group">
									<label for="recipient-name" class="form-control-label">Full Name:</label>
									<input type="text" name="name" style="color:black" value="{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}" class="form-control" id="recipient-name" readonly>
								</div>
								<div class="form-group">
									<label for="recipient-name" class="form-control-label">Current Package:</label>
									<input type="email" name="package" style="color:black" value="{{ $plan }}" class="form-control" id="recipient-name" readonly>
								</div>
								<div class="form-group">
									<label for="recipient-name" class="form-control-label">Package Type:</label>
									<select name="plan" style="border:1px solid grey" class="form-control" id="recipient-name" required>
										<option selected disabled value>-- select package type --</option>
										@if($allplans->count() > 0)
											@foreach($allplans as $allplan)
												@if($allplan->id === $userPlan->id)
												{{--  don't display current user plan --}}
												@else
													<option value="{{ $allplan->id }}">{{ $allplan->plan_name }}  {{ Auth::user()->currency }}{{ $allplan->min_trade_amount }} - {{ Auth::user()->currency }}{{ $allplan->max_trade_amount }}</option>
												@endif
												
											@endforeach
											
											
										@endif
									</select>
								</div>
								<div class="form-group">
									<label for="recipient-name" class="form-control-label">Investment Type:</label>
									<select name="type[]" style="border:1px solid grey" class="form-control" id="recipient-name" required multiple>
										<option selected disabled value>-- select package type --</option>
										<option value="Forex Trading">Forex Trading</option>
										<option value="Stock Trading">Stock Trading</option>
										<option value="Binary Option Trading">Binary Option Trading</option>
										<option value="CryptoCurrency Investment">CryptoCurrency Investment</option>
										<option value="Bitcoin Mining">Bitcoin Mining</option>
									</select>
								</div>
								<div class="form-group">
									<label for="recipient-name" class="form-control-label">Trade Amount:</label>
									<input type="number" min="100" name="trade_amount"  value="Mia Malvern" class="form-control" id="recipient-name" >
								</div>
								<button type="submit" name="upgrade" class="btn btn-primary">Proceed to</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			 <!-- <div class="col-sm-16 col-md-8"> -->
			<div class="col-sm-16 col-md-16">
				<div class="card">
					<div class="card-header align-items-start justify-content-between flex">
						<h4 class="pull-left">Purchase Signal</h4>
						<ul class="nav nav-pills card-header-pills pull-right">
							<li class="nav-item">
								<button class="btn btn-sm btn-link btn-round" data-toggle="collapse" data-target="#signal_deposit"><i class="fa fa-chevron-down"></i></button>
							</li>
						</ul>
					</div>
					<div class="card-body" id="signal_deposit">
						<div class="modal-body">
							<form method="POST" action="{{ route('purchase.signal') }}">
								@csrf
								<div class="form-group">
									<label for="recipient-name" class="form-control-label">Full Name:</label>
									<input type="text" name="name" style="color:black" value="{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}" class="form-control" id="recipient-name" readonly>
								</div>
								<div class="form-group">
									<label for="recipient-name" class="form-control-label">Email:</label>
									<input type="email" name="email" style="color:black" value="{{ Auth::user()->email }}" class="form-control" id="recipient-name" readonly>
								</div>
								<div class="form-group">
									<label for="recipient-name" class="form-control-label">Account Type:</label>
									<select name="signal" style="border:1px solid grey" class="form-control" id="recipient-name" required>
										<option selected disabled value>-- select signal type --</option>
										<option value="1000">Momentum Signals $1,000 - 15 Trading Signals</option>
										<option value="2000">Breakout Signals $2,000 - 36 Trading Signals</option>
										<option value="3000">Trend Signal $3,000 - 78 Trading Signals</option>
										
									</select>
								</div>
								<button type="submit"  class="btn btn-primary">Buy Signal</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		 </div>
			
	
	
	
	
	
	
	
	
	
	<br><br>
	
  
  </div>
  
  @include('includes.userfooter')
  </div>
  
  
  
  @include('includes.usermodal')
  <!-- Modal Close -->
  
  
  @include('includes.userscripts')

</div></div></body>