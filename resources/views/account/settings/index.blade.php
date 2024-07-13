@include('includes.userdashboardhead')
  <body class="menuclose-right" style="position: relative; min-height: 100%; top: 0px;">
  
  
	@include('includes.userheader')

    <div class="wrapper-content">
      <!-- <div class="container" style="max-width:1300px"> -->
      	<div class="container" style="max-width:1400px">
  
			<div class="row  align-items-center justify-content-between" style="margin-top:10px">
				<div class="col-16 col-sm-16">
				<p style="color:white"><b>ACCOUNT SETTINGS | PROFILE</b></p>
				</div>
			</div>
  
  
  
			<!-- TradingView Widget BEGIN -->
			<div class="tradingview-widget-container " style="width: 100%; height: 46px;">
				<iframe scrolling="no" allowtransparency="true" frameborder="0" style="user-select: none; box-sizing: border-box; display: block; height: 46px; width: 100%;" src="https://www.tradingview-widget.com/embed-widget/ticker-tape/?locale=en#%7B%22symbols%22%3A%5B%7B%22proName%22%3A%22FOREXCOM%3ASPXUSD%22%2C%22title%22%3A%22S%26P%20500%22%7D%2C%7B%22proName%22%3A%22FOREXCOM%3ANSXUSD%22%2C%22title%22%3A%22Nasdaq%20100%22%7D%2C%7B%22proName%22%3A%22FX_IDC%3AEURUSD%22%2C%22title%22%3A%22EUR%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3ABTCUSD%22%2C%22title%22%3A%22BTC%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3AETHUSD%22%2C%22title%22%3A%22ETH%2FUSD%22%7D%5D%2C%22showSymbolLogo%22%3Atrue%2C%22colorTheme%22%3A%22dark%22%2C%22isTransparent%22%3Afalse%2C%22displayMode%22%3A%22relative%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A46%2C%22utm_source%22%3A%22boommarketing24optiontrade.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22ticker-tape%22%2C%22page-uri%22%3A%22boommarketing24optiontrade.com%2Faccount%2Fdash%2Fsettings%22%7D" title="ticker tape TradingView widget" lang="en"></iframe>
				
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
				</style></div>
			<!-- TradingView Widget END -->
	
  
  
  
  
  
			<div class="row">
				<div class="col-sm-16 col-16">
				<div class="row  align-items-end  customer-profile-cover">
					<!--<figure class="background"><img src="img/kk7.gif" alt="Social cover image"> </figure>-->
					<div class="container mb-2">
					<div class="row  align-items-center p-2">
						<figure class="social-profile-pic"><img src="{{asset('img/profile/default.png')}}" alt=""></figure>
						<div class="col-sm-16 col-lg-4 col-xl-4  profile-name">
						<i style="color:#0f0;font-size:20px" class="fas fa-check-circle blink_me"> Verified</i><h2>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h2>
						<p>{{ Auth::user()->email }}</p>
						</div>
						<div class="col-16 col-sm-16 col-lg-9 col-xl-9 text-right d-flex">
						<div class="col col-sm-5 col-lg-6 col-xl-6 ">
							<h4>Investment</h4>
							<h2>{{ Auth::user()->currency }} {{ number_format($totalInvestment->sum('paid_amount'), 2) }}</h2>
						</div>
						<div class="col col-sm-6 col-lg-6 col-xl-6 ">
							<h4>Total Balance</h4>
							<h2>{{ Auth::user()->currency }} {{ number_format(Auth::user()->trades->sum('profit') + Auth::user()->trades->sum('bunus') + Auth::user()->balance, 2) }}</h2>
						</div>
						<div class="col col-sm-5 col-lg-6 col-xl-6 ">
							<h4>Total Bonus</h4>
							<h2>{{ Auth::user()->currency }} {{ number_format(Auth::user()->trades->sum('bonus'), 2) }}</h2>
						</div>
						</div>
					</div>
					</div>
				</div>
				</div>
			</div>
			<!-- <div class="container"> -->
		
  
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
		
			<ul class="nav nav-tabs" role="tablist" style="float:center">
				<li class="nav-item"> <a class="nav-link btn-outline-light active" data-toggle="tab" href="#profile" role="tab">Personal Profile</a> </li>
				<li class="nav-item"> <a class="nav-link btn-outline-light" data-toggle="tab" href="#funds" role="tab">Account Records</a> </li>
				<li class="nav-item"> <a class="nav-link btn-outline-light" data-toggle="tab" href="#settings" role="tab">Account Settings</a> </li>
				<!-- <li class="nav-item"> <a class="nav-link btn-outline-light" data-toggle="tab" href="#referrals" role="tab">Referrals</a> </li> -->
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane active" id="profile" role="tabpanel">
					<div class="row">
						<div class="col-sm-16 col-lg-8 col-md-8">
						<h3 class="mt-2">Personal Profile Info</h3>
						<hr>
						</div>
						
						<form class="col-sm-16" method="POST" action="{{ route('profile.update') }}">
							@method('patch')
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
								<div class="col-md-12">
									<div class="form-group row">
										<div class="col-lg-8 col-md-8">
										<label><i class="fas fa-users"></i> First Name</label>
											<input type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ Auth::user()->firstname }}" placeholder="" required="">
											@error('firstname')
												<span style="color:crimson">{{ $message }}</span>
											@enderror
										</div>
										<div class="col-lg-8 col-md-8">
											<label><i class="fas fa-users"></i> Last Name</label>
											<input type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ Auth::user()->lastname }}" placeholder="" required="">
											@error('lastname')
												<span style="color:crimson">{{ $message }}</span>
											@enderror
										</div>
									</div>
									<div class="form-group row">
										<div class="col-lg-8 col-md-8">
											<label><i class="fas fa-user"></i> Username</label>
											<input name="username" type="text" class="form-control @error('username') is-invalid @enderror" value="{{ Auth::user()->username }}" placeholder="" >
											@error('username')
												<span style="color:crimson">{{ $message }}</span>
											@enderror
										</div>
										<div class="col-lg-8 col-md-8">
											<label><i class="fas fa-at"></i> Email Address</label>
											<input name="email" type="email" style="color:black" class="form-control @error('email') is-invalid @enderror" value="{{ Auth::user()->email }}" placeholder="" readonly="">
											@error('email')
												<span style="color:crimson">{{ $message }}</span>
											@enderror
										</div>
									</div>
									<div class="form-group row">
										<div class="col-lg-8 col-md-8">
											<div class="row">
												<div class="col-lg-8">
													<label><i class="fas fa-phone"></i> Phone Number</label>
													<input name="phone" type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ Auth::user()->phone }}" placeholder="" >
													@error('phone')
														<span style="color:crimson">{{ $message }}</span>
													@enderror
												</div>
												<div class="col-lg-8">
													<label><i class="fas fa-map-marker-alt"></i> Country</label>
													<input name="country" type="text" class="form-control @error('country') is-invalid @enderror" value="{{ Auth::user()->country }}" placeholder="" >
													@error('country')
														<span style="color:crimson">{{ $message }}</span>
													@enderror
												</div>
											</div>
										</div>
									
										<div class="col-lg-8 col-md-8">
											<div class="row">
												<div class="col-lg-8">
												<label><i class="fas fa-map-marker-alt"></i> State/Province</label>
													<input  type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ Auth::user()->state }}" placeholder="" required="">
													@error('state')
														<span style="color:crimson">{{ $message }}</span>
													@enderror
												</div>
												
											</div>
										</div>
									</div>
								<div class="form-group row">
									<div class="col-lg-8 col-md-8">
										<label><i class="fas fa-map-marker-alt"></i> Address</label>
										<textarea class="form-control @error('address') is-invalid @enderror" placeholder="Type here" name="address" rows="4">{{ Auth::user()->address }}</textarea>
										@error('address')
											<span style="color:crimson">{{ $message }}</span>
										@enderror
									</div>
									<div class="col-lg-8 col-md-8">
									<div class="notes notes-primary" role="alert">
										<strong><i class="fas fa-envelope"></i> Notification Message</strong><br>
														<br>
									</div>
									<a href="" data-toggle="modal" data-target="#mail_support"><i class="fas fa-rely"></i> Reply notification</a>
									</div>
								</div>
								</div>
								<div class="col-md-4">
								<div class="card ">
									<label><i class="fas fa-address-card"></i> Account Status</label><br>
									<!-- <label class="text-primary" for="">Verified</label> -->
									<label class="text-primary" for="">
									<i style="color:#0f0;font-size:20px" class="fas fa-check-circle blink_me"> Verified</i>              </label>
									<label><i class="fas fa-sync-alt"></i> Account Type</label><br>
									<label class="text-primary" for="">
										@empty($lastTrade)
											No Type Selected 
										@else
											@foreach($lastTrade->assets as $asset)
												{{ $asset }}<br>
											@endforeach
										@endempty
									</label>
									<label><i class="fas fa-chart-pie"></i> Package Plan</label><br>
									<label class="text-primary" for="">
										@empty($lastTrade)
											No Plan Selected 
										@else
										{{ $lastTrade->plan->plan_name  }} {{ Auth::user()->currency }}{{ $lastTrade->plan->min_trade_amount}} - {{ Auth::user()->currency }}{{ $lastTrade->plan->max_trade_amount   }}
										@endempty
										
									
									</label>
									<label><i class="fas fa-signal "></i> Signal Status</label><br>
									<label class="text-primary" for="">
										@if(Auth::user()->signal > 0)
											{{ Auth::user()->signal }} Signals
										@else
											None
										@endif
										<br></label>
								</div>
								</div>
							</div>
							<div class="mb-2 row">
								<div class="col-lg-16">
								<hr>
								<button type="submit" class="btn btn-primary">Update Profile</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="tab-pane " id="funds" role="tabpanel">
					<div class="row ">
						<div class="col-lg-16 col-md-16">
						<div class="form-group ">
							<h3 class="mt-2">Account Records</h3>
							<hr>
							<table class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
								<th>Type</th>
								<th></th>
								<th></th>
								<th>Amount</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								<th>Total Investment</th>
								<td></td>
								<td></td>
								<td><label>{{ Auth::user()->currency }} {{ number_format($totalInvestment->sum('paid_amount'), 2) }}</label></td>
								</tr>
								<tr>
								<th>Total Earnings</th>
								<td></td>
								<td></td>
								<td><label>{{ Auth::user()->currency }} {{ number_format(Auth::user()->trades->sum('profit'), 2) }}</label></td>
								</tr>
								<tr>
								<th>Total Balance</th>
								<td></td>
								<td></td>
								<td><label>
									{{ Auth::user()->currency }} {{ number_format(Auth::user()->trades->sum('profit') + Auth::user()->trades->sum('bunus') + Auth::user()->balance, 2) }}
								</label></td>
								</tr>
								<tr>
								<th>Total Referrals</th>
								<td></td>
								<td></td>
								<td><label>
									@if($referrals->count() > 0)
										{{ $referrals->count() }}
									@else
										0
									@endif
									
								</label></td>
								</tr>
								<tr>
									<th>Total Bonus</th>
										<td></td>
										<td></td>
										<td>
											<label>{{ Auth::user()->currency }}
											{{ number_format(Auth::user()->trades->sum('bonus'), 2) }}
											</label>
										</td>
								</tr>
								<tr>
								<th>Pending Withdrawal</th>
								<td></td>
								<td></td>
								<td><label>{{ Auth::user()->currency }} 
									@if($pendingWithdrawal->count() > 0)
										{{ $pendingWithdrawal->sum('amount_requested') }}
									@else
										0.00
									@endif
									</label>
								</td>
								</tr>
								<tr>
								<th>Total Withdrawal</th>
								<td></td>
								<td></td>
								<td><label>{{ Auth::user()->currency }} 
									@if($totalWithdrawal->count() > 0)
										{{ number_format($totalWithdrawal->sum('paid_amount'), 2) }}
									@else
										0.00
									@endif
									
								</label></td>
								</tr>
								<tr>
								<th>Last Deposit</th>
								<td></td>
								<td></td>
								<td><label>{{ Auth::user()->currency }} 
									@empty($lastDeposit)
										0.00
									@else
										{{ number_format($lastDeposit->paid_amount, 2) }}
									@endempty
									

								 </label></td>
								</tr>
								<tr>
								<th>Last Withdrawal</th>
								<td></td>
								<td></td>
								<td><label>{{ Auth::user()->currency }}
									@empty($lastWithdrawal)
										0.00
									@else
									{{ number_format($lastWithdrawal->paid_amount, 2) }}
									@endempty
									 
									 </label></td>
								</tr>
							</tbody>
							</table>
						</div>
						</div>
						<div class="col-lg-16">
						<hr>
						<a href="transactions" style="float:left" name="client_update" class="btn btn-primary">View Transactions</a>
						<a href="history" style="float:right" name="client_update" class="btn btn-primary">View Trade History</a>
						</div>
					</div>
				</div>
				<div class="tab-pane " id="settings" role="tabpanel">
					<div class="row">
						<div class="col-sm-8 col-md-8">
						<form method="POST" action="{{ route('password.change') }}">
							@csrf
							
							<div class="card">
							<div class="card-header">
								<span>
								<h3 style="color:crimson;text-align:center"></h3>
								</span>
								<span>
								<h3 style="color:green;text-align:center"></h3>
								</span>
								<h3 class="mt-2">CHANGE PASSWORD</h3>
							</div>
							<div class="card-body">
								<div class="form-group row">
								<label for="example-number-input" class="col-16 col-form-label">Old Password</label>
								<div class="col-16">
									<input class="form-control @error('oldpassword') is-invalid @enderror" type="password" value="" name="oldpassword" id="example-number-input" required="">
									@error('oldpassword')
										<span style="color:crimson">{{ $message }}</span>
									@enderror
									
								</div>
								</div>
								<div class="form-group row">
									<label for="example-number-input" class="col-16 col-form-label">New Password</label>
									<div class="col-16">
										<input class="form-control @error('password') is-invalid @enderror" type="password" value="" name="password" id="example-number-input" required="">
										@error('password')
											<span style="color:crimson">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="form-group row">
									<label for="example-number-input" class="col-16 col-form-label">Confirm Password</label>
									<div class="col-16">
										<input class="form-control @error('password_confirmation') is-invalid @enderror" type="password" value="" name="password_confirmation" id="example-number-input" required="">
										@error('password_confirmation')
											<span style="color:crimson">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="form-group row">
								<div class="col-16">
									<center><a href="settings.php"><input class="btn btn-outline-secondary" type="reset" name="request_btn" value="clear"></a>
									<input class="btn btn-outline-primary" type="submit" name="changePwd_btn" value="Change Password">
									</center>
								</div>
								</div>
							</div>
							</div>
						</form>
						<hr>
						<hr>
						</div>
						<div class="col-sm-8 col-md-8">
						<form method="POST" action="{{ route('profile.image') }}" enctype="multipart/form-data">
							@method('patch')
							@csrf
							<div class="card">
							<div class="card-header">
								<h3 class="mt-2">CHANGE PROFILE IMAGE</h3>
							</div>
							<div class="card-body">
								<div class="form-group row">
								<br>
								<!-- <label for="example-number-input" class="col-16 col-form-label">Change Profile Image</label> -->
								<div class="col-16" align="center">
									<img style="width:220px;height:220px;" class="form-control" src="{{asset('img/profile/default.png')}}">
									<input class="form-control" type="file" name="profile_image" id="example-number-input" required="">
								</div>
								</div>
								<div class="form-group row">
								<div class="col-16">
									<center>
									<!-- <a href="account"><input class="btn btn-outline-secondary" type="reset" name="request_btn" value="clear"></a> -->
									<input class="btn btn-outline-primary" type="submit" name="" value="Change Profile Image">
									</center>
								</div>
								</div>
							</div>
							</div>
						</form>
						<hr>
						<hr>
						</div>
						
					</div>
				</div>
				<br>
				<br>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group row">
							<div class="col-10">
							<input type="text" class="form-control"  style="color:black" id="referral_link" value="https://www.expertsoption.co/register/{{ Auth::user()->id }}" readonly="">
							</div>
							<div class="col-6">
							<button type="button" onclick="referralFunction()" class="btn btn-primary">Copy Referral Link</button>
							</div>
						</div>
					</div>
				</div>
			</div>
  
  
  
			<br><br>
	
	
		</div>
	
		@include('includes.userfooter')
	</div>
  
  
  
  <!-- Modal Start-->
  @include('includes.usermodal')
  <!-- Modal Close -->
  
  
  
  
  @include('includes.userscripts')
                 
</div>
</body>