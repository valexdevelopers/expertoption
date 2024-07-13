@include('includes.userdashboardhead')

<!-- g-hide -->
<!-- <body class="menuclose menuclose-right"> -->
<body class="menuclose-right menuclose" style="">
<!-- <body class="menuclose menuclose-right  " style="background:linear-gradient(to right, #ffba00 0%, #fc9244 30%, #252d47 100%)"> -->
<!-- <body class="menuclose menuclose-right rounded " style="background:linear-gradient(to right, #ffba00 0%, black 50%, #ffba00 100%)"> -->

  <!-- Page Loader -->
  <!-- <div class="loader_wrapper align-items-center text-center">
    <div class="load7 load-wrapper">
      <img src="img/logo.png" alt="" class="loading_img">
      <div class="loader"> Loading... </div>
      <div class="clearfix"></div>
      <br>
      <br>
      <br>
      <br>
      <h4 class="text-white">Petal of Flower</h4>
      <p>Awesome things are getting ready...</p>
    </div>
  </div> -->
  <!-- Page Loader Ends -->


  <header class="navbar-fixed">
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-faded">
     <!-- <div class="sidebar-left"> <a class="navbar-brand imglogo" href="home"></a>
    <button class="btn btn-link icon-header mr-sm-2 pull-right"><span class="fa fa-bars"></span></button>
      </div>-->
      
      <div class="d-flex mr-auto"> &nbsp;</div>
      <ul class="navbar-nav content-right">
          <img src="img/logo_header+dark.png" width="200px">
        <li class="align-self-center">
          <!-- hidden-md-down -->
          <span>Language:</span>
          <select class="custom-select lang-sel" style="width:110px;border: 0px solid #0080db00;" id="language" onchange="changeLanguageByButtonClick()">
            <option value="en" selected>English</option>
            <option value="af">Afrikanns</option>
            <option value="sq">Albanian</option>
            <option value="ar">Arabic</option>
            <option value="hy">Armenian</option>
            <option value="eu">Basque</option>
            <option value="bn">Bengali</option>
            <option value="bg">Bulgarian</option>
            <option value="ca">Catalan</option>
            <option value="km">Cambodian</option>
            <option value="zh-CN">Chinese (Mandarin)</option>
            <option value="hr">Croation</option>
            <option value="cs">Czech</option>
            <option value="da">Danish</option>
            <option value="nl">Dutch</option>
            <option value="et">Estonian</option>
            <option value="fj">Fiji</option>
            <option value="fi">Finnish</option>
            <option value="fr">French</option>
            <option value="ka">Georgian</option>
            <option value="de">German</option>
            <option value="el">Greek</option>
            <option value="gu">Gujarati</option>
            <option value="he">Hebrew</option>
            <option value="hi">Hindi</option>
            <option value="hu">Hungarian</option>
            <option value="is">Icelandic</option>
            <option value="id">Indonesian</option>
            <option value="ga">Irish</option>
            <option value="it">Italian</option>
            <option value="ja">Japanese</option>
            <option value="jw">Javanese</option>
            <option value="ko">Korean</option>
            <option value="la">Latin</option>
            <option value="lv">Latvian</option>
            <option value="lt">Lithuanian</option>
            <option value="mk">Macedonian</option>
            <option value="ms">Malay</option>
            <option value="ml">Malayalam</option>
            <option value="mt">Maltese</option>
            <option value="mi">Maori</option>
            <option value="mr">Marathi</option>
            <option value="mn">Mongolian</option>
            <option value="ne">Nepali</option>
            <option value="no">Norwegian</option>
            <option value="fa">Persian</option>
            <option value="pl">Polish</option>
            <option value="pt">Portuguese</option>
            <option value="pa">Punjabi</option>
            <option value="qu">Quechua</option>
            <option value="ro">Romanian</option>
            <option value="ru">Russian</option>
            <option value="sm">Samoan</option>
            <option value="sr">Serbian</option>
            <option value="sk">Slovak</option>
            <option value="sl">Slovenian</option>
            <option value="es">Spanish</option>
            <option value="sw">Swahili</option>
            <option value="sv">Swedish </option>
            <option value="ta">Tamil</option>
            <option value="tt">Tatar</option>
            <option value="te">Telugu</option>
            <option value="th">Thai</option>
            <option value="bo">Tibetan</option>
            <option value="to">Tonga</option>
            <option value="tr">Turkish</option>
            <option value="uk">Ukranian</option>
            <option value="ur">Urdu</option>
            <option value="uz">Uzbek</option>
            <option value="vi">Vietnamese</option>
            <option value="cy">Welsh</option>
            <option value="xh">Xhosa</option>
          </select>
        </li>
        <li class="v-devider"></li>
                <li class="v-devider"></li>
        <li class="nav-item "> <a class="btn btn-link icon-header menu-collapse-right" href="#"><span class="fa fa-podcast"></span> </a> </li>
      </ul>
      <div class="sidebar-right pull-right ">
        <ul class="navbar-nav  justify-content-end">
          <li class="nav-item">
            <button class="btn-link btn userprofile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-bars"></span> <span class="text">malvernmia</span></button>
            <div class="dropdown-menu"> 
              <a class="dropdown-item" href="{{ route('settings') }}"><i class="fas fa-user"></i> Profile</a> 
              <a class="dropdown-item" href="{{ route('deposit.create') }}"><i class="fas fa-coins"></i> Deposit</a>
              <a class="dropdown-item" ref="{{ route('withdraw.index') }}"><i class="fas fa-wallet"></i> Withdraw</a>
              <a class="dropdown-item" href="transactions"><i class="fas fa-exchange-alt"></i> Transactions</a>
              <a class="dropdown-item" href="history"><i class="fas fa-exchange-alt"></i> History</a> 
              <a class="dropdown-item" href="purchase"><i class="fas fa-chart-pie"></i> Account Upgrade</a>
              <a class="dropdown-item" href="{{ route('purchase.create') }}"><i class="fa fa-signal"></i> Signal Purchase</a>
              <a class="dropdown-item" href="new"><i class="fas fa-newspaper"></i> News</a>
               <a class="dropdown-item" href="{{ route('settings') }}"><i class="fas fa-cogs"></i>Account Settings</a>
               
               <a class="dropdown-item" href="technical"><i class="fas fa-expand-arrows-alt"></i> Technical Analysis</a>
              <a class="dropdown-item" href="chart"><i class="fas fa-chart-area"></i> Live Market Chart</a>
              <a class="dropdown-item" href="calendar"><i class="fas fa-calendar-alt"></i> Market Calendar</a>
               
              <a class="dropdown-item" href="logout"><i class="fa fa-sign-out"></i> Logout</a>
              
            </div>
          </li>
      
          <li><a href="logout" class="btn btn-link icon-header"><span class="fa fa-sign-out"></span></a></li>
        </ul>
      </div>
    </nav>
  </header>
  <div class="sidebar-left">
    <div class="user-menu-items">
      <div class="list-unstyled btn-group">
        <button class="media btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
          <br>
        <span class="message_userpic"><img class="d-flex" src="{{asset('img/profile/default.png')}}" ></span> 
          <span class="media-body"> <span class="mt-0 mb-1">Mia Malvern</span>
            <small>Verified</small> </span> </button>
      </div>
    </div>
    <br>
    <ul class="nav flex-column in" id="side-menu">
      <li class=" nav-item"><a href="account" class="nav-link "><i class="fas fa-tachometer-alt"></i> Account</a>
      </li>
      <li class=" nav-item"><a href="{{ route('deposit.create') }}" class="nav-link "><i class="fas fa-coins"></i> Deposit</a>
      </li>
      <li class=" nav-item"><a ref="{{ route('withdraw.index') }}" class="nav-link "><i class="fas fa-wallet"></i> Withdraw</a>
      </li>
      <li class=" nav-item"><a href="history" class="nav-link "><i class="fas fa-exchange-alt"></i> History</a>
      </li>
      <li class=" nav-item"><a href="transactions" class="nav-link "><i class="fas fa-exchange-alt"></i> Transactions</a>
      </li>
  
      <li class=" nav-item"><a href="purchase" class="nav-link "><i class="fas fa-chart-pie"></i> Account Upgrade</a>
      </li>
      <li class=" nav-item"><a href="{{ route('purchase.create') }}" class="nav-link "><i class="fa fa-signal"></i> Signal Purchase</a>
      </li>
      <li class=" nav-item"><a href="news" class="nav-link "><i class="fas fa-newspaper"></i>News </a>
      </li>
      <li class=" nav-item"><a href="{{ route('settings') }}" class="nav-link "><i class="fas fa-cogs"></i>Account Settings </a>
      </li>
      <li class=" nav-item"><a href="logout" class="nav-link "><i class="fa fa-sign-out"></i> Logout</a>
      </li>
      <li class="title-nav">
      <li class="nav-item "> <a href="javascript:void(0)" class="menudropdown nav-link">Live Analysis<i class="fa fa-angle-down "></i></a>
        <ul class="nav flex-column nav-second-level ">
          <li class="nav-item"><a class="nav-link" href="technical"><i class="fas fa-expand-arrows-alt"></i> Technical Analysis</a></li>
          <li class="nav-item"><a class="nav-link" href="chart"><i class="fas fa-chart-area"></i> Live Market Chart</a>
          <li class="nav-item"><a class="nav-link" href="calendar"><i class="fas fa-calendar-alt"></i> Market Calendar</a>
          </li>
        </ul>
        <!-- /.nav-second-level -->
      </li>
      </li>
    </ul>
    <hr>
    <ul class="nav flex-column in">
      <li class="nav-item "><a href="#" class="nav-link"><span><span class="dynamicsparkline2">Loading..</span>
          </span></a></li>
                    
    </ul>
    <hr>
    <br>
    <br>
  </div>
  <div class="wrapper-content">
    <!-- <div class="container" style="max-width:1300px"> -->
    <div class="container" style="max-width:1400px">


  <title>malvernmia | ACCOUNT</title>

<div class="row  align-items-center justify-content-between" style="margin-top:10px">
  <div class="col-16 col-sm-16" class="btn-group pull-right">
    <p style="color:white"> <b>Username :</b> malvernmia  </div>
</div>


<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
    {
      "symbols": [{
          "proName": "FOREXCOM:SPXUSD",
          "title": "S&P 500"
        },
        {
          "proName": "FOREXCOM:NSXUSD",
          "title": "Nasdaq 100"
        },
        {
          "proName": "FX_IDC:EURUSD",
          "title": "EUR/USD"
        },
        {
          "proName": "BITSTAMP:BTCUSD",
          "title": "BTC/USD"
        },
        {
          "proName": "BITSTAMP:ETHUSD",
          "title": "ETH/USD"
        }
      ],
      "showSymbolLogo": true,
      "colorTheme": "dark",
      "isTransparent": false,
      "displayMode": "relative",
      "locale": "en"
    }
  </script>
</div>
<!-- TradingView Widget END -->


<div class="row mgt5">
  <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-4">
    <div class="activity-block danger">
      <div class="media">
        <div class="media-body">
          <h5 class="font-weight-bold">{{ Auth::user()->currency }}<span class=""> {{ number_format(Auth::user()->balance, 2) }}</span></h5>
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
          <h5 class="font-weight-bold">$<span class="">{{ number_format(Auth::user()->trades->sum('bunus'), 2) }}</span></h5>
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
         <a href="home"><button class="btn btn-success btn-outline-light"><span class="">Account</span> <span class="text"><i class="fas fa-tachometer-alt ml-2"></i></span></button></a>
       
     
      <a href="{{ route('deposit.create') }}"><button class="btn btn-success btn-outline-light"><span class="">Make Deposit</span> <span class="text"><i class="fas fa-coins ml-2"></i></span></button></a>
       <a href="{{ route('purchase.create') }}"><button class="btn btn-success btn-outline-light"><span class="">Signal Purchase</span> <span class="text"><i class="fa fa-signal"></i></span></button></a>
      <a ref="{{ route('withdraw.index') }}"><button class="btn btn-success btn-outline-light"><span  class="">Withdraw Funds</span> <span class="text"><i class="fas fa-wallet ml-2"></i></span></button></a>
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
          <div id="tradingview_e705a" style="height:550px"></div>
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
            <div class="tradingview-widget-container__widget"></div>
            <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text">Cryptocurrency Markets</span></a> by TradingView</div> -->
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
              {
                "width": "100%",
                "height": "350",
                "defaultColumn": "overview",
                "screener_type": "crypto_mkt",
                "displayCurrency": "USD",
                "colorTheme": "dark",
                "locale": "en"
              }
            </script>
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
            <div class="tradingview-widget-container__widget"></div>
            <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">stock</span></a> by TradingView</div> -->
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
              {
                "width": "100%",
                "height": "350",
                "symbolsGroups": [{
                    "name": "stock",
                    "symbols": [{
                        "name": "NASDAQ:NDAQ",
                        "displayName": "NASDAQ"
                      },
                      {
                        "name": "NASDAQ:AAPL",
                        "displayName": "APPLE STOCK"
                      },
                      {
                        "name": "NASDAQ:GOOGL",
                        "displayName": "GOOGL"
                      },
                      {
                        "name": "NASDAQ:NVAX",
                        "displayName": "NVAX NA"
                      },
                      {
                        "name": "NASDAQ:AMZN",
                        "displayName": "AMZN"
                      },
                      {
                        "name": "NASDAQ:FB",
                        "displayName": "FACEB"
                      },
                      {
                        "name": "NASDAQ:TLSA",
                        "displayName": "TLSA"
                      }
                    ]
                  },
                  {
                    "name": "Indices",
                    "originalName": "Indices",
                    "symbols": [{
                        "name": "FOREXCOM:SPXUSD",
                        "displayName": "S&P 500"
                      },
                      {
                        "name": "FOREXCOM:NSXUSD",
                        "displayName": "Nasdaq 100"
                      },
                      {
                        "name": "FOREXCOM:DJI",
                        "displayName": "Dow 30"
                      },
                      {
                        "name": "INDEX:NKY",
                        "displayName": "Nikkei 225"
                      },
                      {
                        "name": "INDEX:DEU30",
                        "displayName": "DAX Index"
                      },
                      {
                        "name": "FOREXCOM:UKXGBP",
                        "displayName": "UK 100"
                      }
                    ]
                  },
                  {
                    "name": "Commodities",
                    "originalName": "Commodities",
                    "symbols": [{
                        "name": "CME_MINI:ES1!",
                        "displayName": "S&P 500"
                      },
                      {
                        "name": "CME:6E1!",
                        "displayName": "Euro"
                      },
                      {
                        "name": "COMEX:GC1!",
                        "displayName": "Gold"
                      },
                      {
                        "name": "NYMEX:CL1!",
                        "displayName": "Crude Oil"
                      },
                      {
                        "name": "NYMEX:NG1!",
                        "displayName": "Natural Gas"
                      },
                      {
                        "name": "CBOT:ZC1!",
                        "displayName": "Corn"
                      }
                    ]
                  },
                  {
                    "name": "Bonds",
                    "originalName": "Bonds",
                    "symbols": [{
                        "name": "CME:GE1!",
                        "displayName": "Eurodollar"
                      },
                      {
                        "name": "CBOT:ZB1!",
                        "displayName": "T-Bond"
                      },
                      {
                        "name": "CBOT:UB1!",
                        "displayName": "Ultra T-Bond"
                      },
                      {
                        "name": "EUREX:FGBL1!",
                        "displayName": "Euro Bund"
                      },
                      {
                        "name": "EUREX:FBTP1!",
                        "displayName": "Euro BTP"
                      },
                      {
                        "name": "EUREX:FGBM1!",
                        "displayName": "Euro BOBL"
                      }
                    ]
                  },
                  {
                    "name": "Forex",
                    "originalName": "Forex",
                    "symbols": [{
                        "name": "FX:EURUSD"
                      },
                      {
                        "name": "FX:GBPUSD"
                      },
                      {
                        "name": "FX:USDJPY"
                      },
                      {
                        "name": "FX:USDCHF"
                      },
                      {
                        "name": "FX:AUDUSD"
                      },
                      {
                        "name": "FX:USDCAD"
                      }
                    ]
                  }
                ],
                "showSymbolLogo": true,
                "colorTheme": "dark",
                "isTransparent": false,
                "locale": "en"
              }
            </script>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<br><br>


</div>

<footer class="footer-content ">
  <div class="container ">
    <div class="row align-items-center justify-content-between">
      <div class="col-md-16 col-lg-8 col-xl-8">Copyright  2024 <a href="http://www.expertsoption.co" target="_blank" class="">expertsoption.co</a></div>
    </div>
  </div>
</footer>
</div>



<!-- Modal Start-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body"> ... </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<div class="modal dark_bg fade" id="bitcoin_dp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content ncard">
      <div class="modal-body">
        <div class="form-group" align="center">
          <label for="recipient-name" class="form-control-label font-weight-bold">Scan Bitcoin QR Code to copy wallet address</label>
          <hr>
          <img src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=bitcoin:bc1qzjufwd87j9menl7szetuue5lhlx75th5kx8yaz" style="width:200px;">
          <hr style="color:white">
          <div class="input-group mb-3" style="width:80%">
            <input style="color:black" id="myInput" type="text" value="bc1qzjufwd87j9menl7szetuue5lhlx75th5kx8yaz" class="form-control" readonly>
            <div class="input-group-append">
              <button type="button" onclick="copyWallet()" class="btn btn-success" value="Copy Wallet">Copy Wallet</button>
            </div>
          </div>
        </div>
      </div>
      <form action=""  method="POST" enctype="multipart/form-data">
        <div class="form-group" style="border: 0px solid grey;border-radius:5px;padding:15px;">
          <span class="form-control-label font-weight-bold text-center" style="color:#17a2b8;font-size:12px">
            If your payment was successful, Please upload payment proof below.
          </span>
          <hr>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label for="upload" class="input-group-text">
                Upload
              </label>
            </div>
            <input type="file" name="file" class="form-control" id="upload" required>
            <input type="hidden" value="" name="deposit_name">
            <input type="hidden" value="" name="deposit_type">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label for="amount" class="input-group-text">
                Amount : $              </label>
            </div>
            <input type="number" name="amount" step="0.01" class="form-control" min="100" id="amount" placeholder="0" required>
          </div>
          <hr>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" name="paid" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>



<div class="modal dark_bg fade" id="bitcoin_dpa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content ncard">
      <div class="modal-body">
        <div class="form-group" align="center">
          <label for="recipient-name" class="form-control-label font-weight-bold">Scan Ethereum QR Code to copy wallet address</label>
          <hr>
          <img src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=ethereum:0xE27988610093A7Fa3fE94074390e9faB273EFb3d" style="width:200px;">
          <hr style="color:white">
          <div class="input-group mb-3" style="width:80%">
            <input style="color:black" id="myInputa" type="text" value="0xE27988610093A7Fa3fE94074390e9faB273EFb3d" class="form-control" readonly>
            <div class="input-group-append">
              <button type="button" onclick="copyWalleta()" class="btn btn-success" value="Copy Wallet">Copy Wallet</button>
            </div>
          </div>
        </div>
      </div>
      <form action=""  method="POST" enctype="multipart/form-data">
        <div class="form-group" style="border: 0px solid grey;border-radius:5px;padding:15px;">
          <span class="form-control-label font-weight-bold text-center" style="color:#17a2b8;font-size:12px">
            If your payment was successful, Please upload payment proof below.
          </span>
          <hr>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label for="upload" class="input-group-text">
                Upload
              </label>
            </div>
            <input type="file" name="file" class="form-control" id="upload" required>
            <input type="hidden" value="" name="deposit_name">
            <input type="hidden" value="" name="deposit_type">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label for="amount" class="input-group-text">
                Amount : $              </label>
            </div>
            <input type="number" name="amount" step="0.01" class="form-control" min="100" id="amount" placeholder="0" required>
          </div>
          <hr>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" name="paida" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>




<div class="modal dark_bg fade" id="mail_support" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog col-lg-6 col-sm-4" role="document">
    <div class="modal-content ncard">
      <div class="modal-body">
        <form method="POST" action="mail.php">
          <!-- <div class="form-group"> -->
          <!-- <label for="recipient-name" class="form-control-label">From:</label> -->
          <input type="hidden" style="color:black" name="to_email" value="Expert Option Support" class="form-control" id="recipient-name" required>
          <input type="hidden" style="color:black" name="email" value="malvernmia@gmail.com" class="form-control" id="recipient-name" readonly>
          <input type="hidden" style="color:black" name="name" value="Mia Malvern" class="form-control" id="recipient-name" readonly>
          <!-- </div> -->
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Subject:</label>
            <input type="text" name="subject" class="form-control" placeholder="Complain" id="recipient-name" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="form-control-label">Message:</label>
            <textarea name="message" class="form-control" rows="10" id="message-text" placeholder="Click here to Compose message" required></textarea>
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" name="contact" class="btn btn-primary">Send message</button>
        </form>
      </div>
      <!-- <div class="modal-footer">
      </div> -->
    </div>
  </div>
</div>
<div class="modal dark_bg fade" id="order_deposit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <form method="POST" action="">
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Full Name:</label>
            <input type="text" name="name" style="color:black" value="Mia Malvern" class="form-control" id="recipient-name" readonly>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Email:</label>
            <input type="email" name="email" style="color:black" value="malvernmia@gmail.com" class="form-control" id="recipient-name" readonly>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Account Type:</label>
            <select name="type" style="border:1px solid grey" class="form-control" id="recipient-name" required>
              <option value selected disabled>Deposit Type</option>
              <!-- <option value="Ethereum">Ethereum</option> -->
              <option value="Litecoin">Litecoin</option>
              <option value="Usdt">Usdt</option>
              <option value="Bitcoin Cash">Bitcoin Cash</option>
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Amount</label>
            <input type="number" step="0.01" name="amount" class="form-control" id="recipient-name" required>
            <input type="hidden" value="" name="deposit_name">
            <input type="hidden" value="" name="deposit_type">
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" name="request_deposit" class="btn btn-primary">Request</button>
        </form>
      </div>
      <!-- <div class="modal-footer">
      </div> -->
    </div>
  </div>
</div>
<!-- Modal Close -->




<script>
  function copyWallet() {
    var copyText = document.getElementById("myInput");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    document.execCommand("copy");
    Swal.fire('', '<b>Bitcoin Wallet Copied : </b> ' + copyText.value + '', '');
  }
  
  function copyWalleta() {
    var copyText = document.getElementById("myInputa");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    document.execCommand("copy");
    Swal.fire('', '<b>Ethereum Wallet Copied : </b> ' + copyText.value + '', '');
  }
</script>

<!-- <script src="js/styleswitcher.js"></script> -->
<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="js/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="vendor/bootstrap4beta/js/bootstrap.min.js" type="text/javascript"></script>
<script src="vendor/cookie/jquery.cookie.js" type="text/javascript"></script>
<script src="js/ie10-viewport-bug-workaround.js"></script>
<script src="vendor/cicular_progress/circle-progress.min.js" type="text/javascript"></script>
<script type="text/javascript" src="vendor/sparklines/jquery.sparkline.min.js"></script>
<!-- <script src="vendor/jquery-jvectormap/jquery-jvectormap.js"></script>
<script src="vendor/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script> -->
<script src="vendor/chartjs/Chart.bundle.min.js" type="text/javascript"></script>
<script src="vendor/chartjs/utils.js" type="text/javascript"></script>
<script src="vendor/spincrement/jquery.spincrement.min.js" type="text/javascript"></script>
<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/js/dataTables.bootstrap4.js"></script>
<script src="vendor/datatables/js/dataTables.responsive.min.js"></script>
<script src="js/adminux.js" type="text/javascript"></script>
<script src="js/dashboard1.js"></script>
<script src="js/print.js"></script>






<script>
  function referralFunction() {
    var copyReferral = document.getElementById("referral_link");
    copyReferral.select();
    copyReferral.setSelectionRange(0, 99999);
    document.execCommand("copy");
    Swal.fire('', '<b>Referral Link Copied :</b> ' + copyReferral.value + '', '', '');
  }
</script>



<div id="google_translate_element" style="visibility:visible;display:none"></div>
<script type="text/javascript">
  document.getElementsByClassName('skiptranslate')[0].style.visibility = 'hidden';
  document.getElementsByClassName('goog-te-banner-frame')[0].style.visibility = 'hidden';

  function googleTranslateElementInit() {
    new google.translate.TranslateElement({
      pageLanguage: "en"
    }, 'google_translate_element');
  }

  function changeLanguageByButtonClick() {


    var language = document.getElementById("language").value;
    var selectField = document.querySelector("#google_translate_element select");
    for (var i = 0; i < selectField.children.length; i++) {
      var option = selectField.children[i];
      // find desired langauge and change the former language of the hidden selection-field 
      if (option.value == language) {
        selectField.selectedIndex = i;
        // trigger change event afterwards to make google-lib translate this side
        selectField.dispatchEvent(new Event('change'));
        break;
      }
    }
  }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>



<!-- <div class="sidebar-right"> style="width: 100%; height: 100%;" -->

<!-- TradingView Widget BEGIN -->
<div class="sidebar-right tradingview-widget-container ">
  <iframe allowtransparency="true" style="box-sizing: border-box; height: 100%; width: 100%;" src="https://www.tradingview-widget.com/embed-widget/screener/?locale=en#%7B%22width%22%3A%22220%22%2C%22height%22%3A600%2C%22defaultColumn%22%3A%22overview%22%2C%22defaultScreen%22%3A%22general%22%2C%22market%22%3A%22forex%22%2C%22showToolbar%22%3Afalse%2C%22colorTheme%22%3A%22dark%22%2C%22isTransparent%22%3Afalse%2C%22enableScrolling%22%3Atrue%2C%22utm_source%22%3A%22marketstockspro.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22forexscreener%22%7D" frameborder="0"></iframe>

  <style>
    .tradingview-widget-copyright {
      font-size: 13px !important;
      line-height: 32px !important;
      text-align: center !important;
      vertical-align: middle !important;
      font-family: 'Trebuchet MS', Arial, sans-serif !important;
      color: #9db2bd !important;
    }

    .tradingview-widget-copyright .blue-text {
      color: #2962FF !important;
    }

    .tradingview-widget-copyright a {
      text-decoration: none !important;
      color: #9db2bd !important;
    }

    .tradingview-widget-copyright a:visited {
      color: #9db2bd !important;
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

<!-- <br>
    <br>

  </div> -->





<script src="//code.tidio.co/ot9cireyjhx5wez5nocutk9s76qjbssu.js" async></script>
 <!-- /GetButton.io widget-->
 <script type="text/javascript">
  (function() {
      var options = {
          whatsapp: "746) 579-5974", // WhatsApp number
          call_to_action: "Contact us!", // Call to action
          position: "left", // Position may be "right" or "left"
      };
      var proto = document.location.protocol,
          host = "getbutton.io",
          url = proto + "//static." + host;
      var s = document.createElement("script");
      s.type = "text/javascript";
      s.async = true;
      s.src = url + "/widget-send-button/js/init.js";
      s.onload = function() {
          WhWidgetSendButton.init(host, proto, options);
      };
      var x = document.getElementsByTagName("script")[0];
      x.parentNode.insertBefore(s, x);
  })();
</script> 
<!-- /GetButton.io widget -->
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
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>


</body>

</html>
