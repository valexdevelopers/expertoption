@include('includes.userdashboardhead')

  <body class="menuclose-right" style="position: relative; min-height: 100%; top: 0px;">

    @include('includes.userheader')
    <div class="wrapper-content">
      <!-- <div class="container" style="max-width:1300px"> -->
      <div class="container" style="max-width:1400px">
  
  
  
		<div class="row  align-items-center justify-content-between" style="margin-top:10px">
			<div class="col-16 col-sm-16">
			<p style="color:white"><b>WITHDRAWAL</b></p>
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
  
  		<div class="card" id="hip">
			<div class="card-header">
				<h5 class="font-weight-bold">
					<span style="float:left">Request Withdrawal</span>
					<span style="float:right;font-size:15px">Balance : <span style="color:green">{{ Auth::user()->currency }} {{ number_format(Auth::user()->trades->sum('profit') + Auth::user()->trades->sum('bunus') + Auth::user()->balance, 2) }}</span></span>
				</h5>
			</div>
			<div class="card-body">
				<div class="container_wizard wizard-bordered">
					<div class="stepwizard">
						<div class="stepwizard-row setup-panel d-flex">
							<div class="stepwizard-step col"> <a href="#step-13" class="btn btn-primary success"><span class="btn-round fa fa-users"></span>
									<p>Step 1<small>Personal Information</small></p>
								</a> </div>
							<div class="stepwizard-step col"> <a href="#step-23" class="btn btn-secondary success disabled"><span class="btn-round fa fa-credit-card"></span>
									<p>Step 1<small>Payment Details</small></p>
								</a> </div>
							<div class="stepwizard-step col"> <a href="#step-33" class="btn btn-secondary warning disabled"><span class="btn-round fas fa-wallet"></span>
									<p>Step 3<small>Verification</small></p>
								</a>
							</div>
						</div>
					</div>
					
					
					<form id="adminnew" method="POST" action="{{ route('withdraw.store') }}" enctype="multipart/form-data">
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
						<div class="row">
							<div class="col-sm-16">
								<div class="row">
									<div class="col-sm-16">
										<h3 class="text-white mb-2">Personal Information</h3>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-sm-16 col-md-8 col-lg-6">
										<div class="form-group">
											<label class="form-control-label">Full Name</label>
											<input name="fullname" maxlength="100" type="text" required="" class="form-control @error('fullname') is-invalid @enderror" id="firstname" value="" placeholder="Enter Full Name">
											@error('fullname')
												<span style="color:crimson">{{ $message }}</span>
											@enderror
										</div>
										<div class="form-group">
											<label class="form-control-label">Email Address</label>
											<input name="email" maxlength="100" type="email" required="" class="form-control @error('email') is-invalid @enderror" id="email" value="" placeholder="Enter Email Address">
											@error('email')
												<span style="color:crimson">{{ $message }}</span>
											@enderror
										</div>
										<div class="form-group">
											<label class="form-control-label">Phone Number</label>
											<input name="phone" maxlength="15" type="text" required="" class="form-control @error('phone') is-invalid @enderror" id="phone" value="" placeholder="Enter Phone Number">
											@error('phone')
												<span style="color:crimson">{{ $message }}</span>
											@enderror
										</div>
										<div class="form-group">
											<label class="form-control-label">Country</label>
											<input name="country" maxlength="100" type="text" required="" class="form-control @error('country') is-invalid @enderror" id="country" value="" placeholder="Enter Country">
											@error('country')
												<span style="color:crimson">{{ $message }}</span>
											@enderror
										</div>
									</div>
									<div class="col-sm-16 col-md-8 col-lg-10">
										<div align="left" class="text hidden-sm-down hidden-md-down">
											<span class="text">
												<span style="font-weight:bold">Withdrawing Funds – How Does It Work?</span><br>
												At our platform, we have designed our withdrawal process to be as easy and secured as our funding process.
												To begin the withdrawal process first fill your account information then select your preferred withdrawal
												method and then type in the amount you want to withdraw, verify your identity by uploading a valid ID
												and click "Request Withdrawal".
												<br>
												<span style="font-weight:bold">What Methods Are There For Withdrawal Of Funds?</span><br>
												We provide provide better withdrawal methods like (Bitcoin, Ethereum, Bank Transfer and more).
												<br>
												<span style="font-weight:bold">Must Withdrawal Requests Only Be Made At Certain Times?</span><br>
												Requests for withdrawals can be made at any time via our platform. The requests will be processed immediately, and during the relevant financial institutions’ business hours.
												<br>
												<span style="font-weight:bold">Is There A Withdrawal Limit?</span><br>
												Withdrawals are capped at the amount of funds that are currently in the account.
												<br>
												<span style="font-weight:bold">How Long Does It Take To Get My Money?</span><br>
												Withdrawal requests are addressed and handled as quickly as possible.
											</span>
										</div>
									</div>
								</div>
								<!--<div class="wizard-footer">
									<div class="col-sm-16 ">
										<button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
									</div>
								</div>-->
							</div>
						</div>
						<div class="row">
							<div class="col-sm-16">
								<div class="row">
									<div class="col-sm-16">
										<h3 class="text-white mb-2">Payment Details</h3>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-sm-16 col-md-8 col-lg-6">
										<div class="form-group">
											<label class="form-control-label">Withdrawal Type</label>
											<select name="method" id="withdrawaltype" value="" class="form-control" required="" onchange="showDiv(this)">
												<option disabled="" selected="" value=""> -- select withdrawal method -- </option>
												<option value="1">Bank Transfer</option>
												<option value="2">Bitcoin</option>
												<option value="3">Ethereum</option>
												<option value="4">Usdt</option>
											</select>
											@error('method')
												<span style="color:crimson">{{ $message }}</span>
											@enderror
										</div>
										<div class="form-group" id="cry1" style="display:none;">
											<label class="form-control-label">Wallet Address</label>
											<input minlength="13" type="text" id="walletaddress" name="walletaddress" class="form-control"  placeholder="Enter Wallet Address">
											@error('walletaddress')
												<span style="color:crimson">{{ $message }}</span>
											@enderror
										</div>
										<div class="form-group" id="amountc" style="display:none">
											<!-- <label class="form-control-label">Amount $</label> -->
											<input type="hidden" min="1" step="0.01" name="1" class="form-control" value="2" id="amount" >
										</div>
										<div id="bankt" style="display:none;">
											<div class="form-group">
												<label class="form-control-label">Bank Name</label>
												<input type="text" maxlength="100" class="form-control" name="bankname" placeholder="Enter Bank Name" id="bankname" >
												@error('bankname')
													<span style="color:crimson">{{ $message }}</span>
												@enderror
											</div>
											<div class="form-group">
												<label class="form-control-label">IBAN</label>
												<input type="number" minlength="10" maxlength="12" class="form-control" name="accountnumber" placeholder="Enter Account Number" id="accountnumber" >
												@error('accountnumber')
													<span style="color:crimson">{{ $message }}</span>
												@enderror
											</div>
											<div class="form-group">
												<label class="form-control-label">Routing Code</label>
												<input name="routing" type="text" minlength="3" class="form-control" name="bankpin" placeholder="Enter App Pin" id="bankapppin">
												@error('routing')
													<span style="color:crimson">{{ $message }}</span>
												@enderror
											</div>
											<div class="form-group">
												<!-- <label class="form-control-label">Amount $</label> -->
												<input type="hidden" step="any" min="1" class="form-control" name="2" value="2" id="amountb" >
											</div>
										</div>
										
											<div class="form-group">
												<label class="form-control-label">Amount {{ Auth::user()->currency }}</label>
												<input name="amount" type="number" step="any" min="10" class="form-control" id="withdrawalamt" placeholder="0.00" required="">
												@error('amount')
													<span style="color:crimson">{{ $message }}</span>
												@enderror
											</div>
									</div>
									<div class="col-sm-16 col-md-8 col-lg-10">
										<div align="left" class="text hidden-sm-down hidden-md-down">
											<span class="text">
												<span style="font-weight:bold">Withdrawing Funds – How Does It Work?</span><br>
												At our platform, we have designed our withdrawal process to be as easy and secured as our funding process.
												To begin the withdrawal process first fill your account information then select your preferred withdrawal
												method and then type in the amount you want to withdraw, verify your identity by uploading a valid ID
												and click "Request Withdrawal".
												<br>
												<span style="font-weight:bold">What Methods Are There For Withdrawal Of Funds?</span><br>
												We provide provide better withdrawal methods like (Bitcoin, PayPal, Bank Transfer and lot more).
												<br>
												<span style="font-weight:bold">Must Withdrawal Requests Only Be Made At Certain Times?</span><br>
												Requests for withdrawals can be made at any time via our platform. The requests will be processed immediately, and during the relevant financial institutions’ business hours.
												<br>
												<span style="font-weight:bold">Is There A Withdrawal Limit?</span><br>
												Withdrawals are capped at the amount of funds that are currently in the account.
												<br>
												<span style="font-weight:bold">How Long Does It Take To Get My Money?</span><br>
												Withdrawal requests are addressed and handled as quickly as possible.
											</span>
										</div>
									</div>
								</div>
								<!--<div class="wizard-footer">
									<div class="col-sm-16 ">
										<button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
									</div>
								</div>-->
							</div>
						</div>
						<div class="row">
							<div class="col-sm-16">
								<div class="row">
									<div class="col-sm-16">
										<h3 class="text-white mb-2">Document Verification</h3>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-16 col-md-8 col-lg-6">
										<div class="form-group">
											<label class="form-control-label">Document Type</label>
											<select name="document" value="" class="form-control @error('document') is-invalid @enderror" required="">
												<option disabled="" selected="" value=""> -- select document type -- </option>
												<option value="Internationl Passport">International Passport</option>
												<option value="National ID">National ID</option>
												<option value="Drivers License">Drivers License</option>
												<option value="Worker ID">Worker ID</option>
												<option value="Personal ID">Personal ID</option>
											</select>
											@error('document')
												<span style="color:crimson">{{ $message }}</span>
											@enderror
										</div>
										<div class="form-group">
											<label class="form-control-label">Document Type</label>
											<input name="idcard" type="file" class="form-control @error('idcard') is-invalid @enderror"  required="">

											@error('idcard')
												<span style="color:crimson">{{ $message }}</span>
											@enderror
										</div>
										<div class="form-group">
											<span> Please upload a valid ID with your Name shown on it, The upload file format must be in [ png, jpg, jpeg ] max 10Mb</span>
											
										</div>
									</div>
									<div class="col-sm-16 col-md-8 col-lg-10">
										<div align="left" class="text hidden-sm-down hidden-md-down">
											<span class="text">
												<span style="font-weight:bold">Withdrawing Funds – How Does It Work?</span><br>
												At our platform, we have designed our withdrawal process to be as easy and secured as our funding process.
												To begin the withdrawal process first fill your account information then select your preferred withdrawal
												method and then type in the amount you want to withdraw, verify your identity by uploading a valid ID
												and click "Request Withdrawal".
												<br>
												<span style="font-weight:bold">What Methods Are There For Withdrawal Of Funds?</span><br>
												We provide provide better withdrawal methods like (Bitcoin, PayPal, Bank Transfer and lot more).
												<br>
												<span style="font-weight:bold">Must Withdrawal Requests Only Be Made At Certain Times?</span><br>
												Requests for withdrawals can be made at any time via our platform. The requests will be processed immediately, and during the relevant financial institutions’ business hours.
												<br>
												<span style="font-weight:bold">Is There A Withdrawal Limit?</span><br>
												Withdrawals are capped at the amount of funds that are currently in the account.
												<br>
												<span style="font-weight:bold">How Long Does It Take To Get My Money?</span><br>
												Withdrawal requests are addressed and handled as quickly as possible.
											</span>
										</div>
									</div>
								</div>
								<br>
								<div class="wizard-footer">
									<div class="col-sm-16 ">
										<button type="submit" class="btn btn-success btn-lg pull-right" >Request Withdrawal</button>
										
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		
  
  
  
  <script type="text/javascript" src="int1/js/profile.js"></script>
  <script type="text/javascript" src="int1/js/withdraw.js"></script>
  
  
  
  
  
  <br><br>
  
  
  </div>
  
  @include('includes.userfooter')
  </div>
  
  <!-- Modal Start-->
  @include('includes.usermodal')
  <!-- Modal Close -->
  
  
  <script type="text/javascript">
	function showDiv(select){

		if(select.value==1){
			document.getElementById('bankt').style.display = "block";
			document.getElementById('cry1').style.display = "none";
		} 


		if(select.value==2 || select.value==3 || select.value==4){
			document.getElementById('cry1').style.display = "block";
			document.getElementById('bankt').style.display = "none";
		} 

		
	} 
  </script>
  
    
  
  @include('includes.userscripts')
</div></div></body>