@include('includes.userdashboardhead')

  <body class="menuclose-right" style="position: relative; min-height: 100%; top: 0px;">

    @include('includes.userheader')
    <div class="wrapper-content">
      <!-- <div class="container" style="max-width:1300px"> -->
      <div class="container" style="max-width:1400px">
  
  
  
		<div class="row  align-items-center justify-content-between" style="margin-top:10px">
			<div class="col-16 col-sm-16">
			<p style="color:white"><b>Trade History</b></p>
			</div>
		</div>
			
  
  
		<!-- TradingView Widget BEGIN -->
		<div class="tradingview-widget-container" style="width: 100%; height: 46px;">
			<iframe scrolling="no" allowtransparency="true" frameborder="0" style="user-select: none; box-sizing: border-box; display: block; height: 46px; width: 100%;" src="https://www.tradingview-widget.com/embed-widget/ticker-tape/?locale=en#%7B%22symbols%22%3A%5B%7B%22proName%22%3A%22FOREXCOM%3ASPXUSD%22%2C%22title%22%3A%22S%26P%20500%22%7D%2C%7B%22proName%22%3A%22FOREXCOM%3ANSXUSD%22%2C%22title%22%3A%22Nasdaq%20100%22%7D%2C%7B%22proName%22%3A%22FX_IDC%3AEURUSD%22%2C%22title%22%3A%22EUR%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3ABTCUSD%22%2C%22title%22%3A%22BTC%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3AETHUSD%22%2C%22title%22%3A%22ETH%2FUSD%22%7D%5D%2C%22showSymbolLogo%22%3Atrue%2C%22colorTheme%22%3A%22dark%22%2C%22isTransparent%22%3Afalse%2C%22displayMode%22%3A%22relative%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A46%2C%22utm_source%22%3A%22boommarketing24optiontrade.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22ticker-tape%22%2C%22page-uri%22%3A%22boommarketing24optiontrade.com%2Faccount%2Fdash%2Ftransactions%22%7D" title="ticker tape TradingView widget" lang="en"></iframe>
			
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
  
    <div class="row">
      <div class="col-sm-16 col-md-16">
          <div class="card">
              <div class="card-header align-items-start justify-content-between flex">
                  <h4 class="pull-left">Trade History</h4>
                  <ul class="nav nav-pills card-header-pills pull-right">
                      <li class="nav-item">
                          <button class="btn btn-sm btn-link btn-round" data-toggle="collapse" data-target="#history_deposit"><i class="fa fa-chevron-down"></i></button>
                      </li>
                  </ul>
              </div>
              <div class="card-body" id="history_deposit">
                  <style>
                      div.scrollmenu {
                          background-color: #333;
                          overflow: auto;
                          white-space: nowrap;
                      }
  
                      div.scrollmenu a {
                          display: inline-block;
                          color: white;
                          text-align: center;
                          padding: 14px;
                          text-decoration: none;
                      }
  
                      div.scrollmenu a:hover {
                          background-color: #777;
                      }
  
                      table,
                      td {
                          background: #333;
                          color: white;
                      }
  
                      th {
                          background: black;
                          color: white;
                      }
                  </style>
                  <b>
                      <div class="scrollmenu">
                          <table cellspacing="400" class="table" table-bordered="">
                              <tbody>
									<tr>
										<th>Asset</th>
										<th>Trade</th>
										<th>Open/Close</th>
										<th>Opens</th>
										<th>Closes</th>
										<th>Status</th>
										<th>Payout</th>
									</tr>
									@if(Auth::user()->trades->count() > 0)
										@foreach(Auth::user()->trades as $trade)
											<tr>
												
												<td>
													@foreach($trade->assets as $asset)
														{{ $asset }}<br>
													@endforeach
													
												</td>
												<td >{{ $trade->plan->plan_name }}</td>
												<td >{{ Auth::user()->currency }} {{ $trade->trade_amount }}</td>
												<td >{{ $trade->start_date }}</td>
												<td >{{ $trade->end_date }}</td>
												<td >{{ $trade->status }}</td>
												<td>{{ Auth::user()->currency }} {{ $trade->profit }}</td>
												{{-- {{ Auth::user()->currency }} --}}
											</tr>
										@endforeach
										
									@else
									<tr>
										
										<td align="center" colspan="8">No data available for this table</td>
									</tr>

									@endif
                                  
                              </tbody>
                          </table>
                      </div>
                  </b>
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