<header class="navbar-fixed">
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-faded">
      <div class="d-flex mr-auto"> &nbsp;</div>
      <ul class="navbar-nav content-right">
          <img src="{{ asset('img/logo_header_dark.png') }}" width="200px">
          <li class="align-self-center">
              <!-- hidden-md-down -->
              <span>Language:</span>
              <select class="custom-select lang-sel" style="width:110px;border: 0px solid #0080db00;" id="language" onchange="changeLanguageByButtonClick()">
              <option value="en" selected="">English</option>
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
          <button class="btn-link btn userprofile menutoggleopen" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-bars"></span> <span class="text">{{ Auth::user()->username }} </span></button>
          <button style="display: none" class="btn-link btn userprofile menutoggleclose" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-x"></span> <span class="text">{{ Auth::user()->username }} </span></button>

          <div class="dropdown-menu"> 
              <a class="dropdown-item" href="{{ route('settings') }}"><i class="fas fa-user"></i> Profile</a> 
              <a class="dropdown-item" href="{{ route('deposit.create') }}"><i class="fas fa-coins"></i> Deposit</a>
              <a class="dropdown-item" ref="{{ route('withdraw.index') }}"><i class="fas fa-wallet"></i> Withdraw</a>
              <a class="dropdown-item" href="{{ route('transactions') }}"><i class="fas fa-exchange-alt"></i> Transactions</a>
              <a class="dropdown-item" href="{{ route('history') }}"><i class="fas fa-exchange-alt"></i> History</a> 
              <a class="dropdown-item" href="{{ route('purchase.create') }}"><i class="fas fa-chart-pie"></i> Account Upgrade</a>
              <a class="dropdown-item" href="{{ route('purchase.create') }}"><i class="fa fa-signal"></i> Signal Purchase</a>
              <a class="dropdown-item" href="{{ route('news') }}"><i class="fas fa-newspaper"></i> News</a>
              <a class="dropdown-item" href="{{ route('settings') }}"><i class="fas fa-cogs"></i>Account Settings</a>
              
              <a class="dropdown-item" href="{{ route('technical') }}"><i class="fas fa-expand-arrows-alt"></i> Technical Analysis</a>
              <a class="dropdown-item" href="{{ route('chart') }}"><i class="fas fa-chart-area"></i> Live Market Chart</a>
              <a class="dropdown-item" href="{{ route('calendar') }}"><i class="fas fa-calendar-alt"></i> Market Calendar</a>
              
              
              <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="dropdown-item" style="width:100%; background:none; border:none; text-align:left; color:white;"><i class="fa fa-sign-out"></i> Logout</button>
            </form>
          </div>
          </li>
      
          <li>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="btn btn-link icon-header" style="width:100%; background:none; border:none; text-align:left; color:white;"><i class="fa fa-sign-out"></i> Logout</button>
            </form>
            
        </li>
      </ul>
      </div>
  </nav>
</header>


<div class="sidebar-left">
  <div class="user-menu-items">
      <div class="list-unstyled btn-group">
      <button class="media btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
          <br>
      <span class="message_userpic"><img class="d-flex" src="{{asset('img/profile/default.png')}}"></span> 
          <span class="media-body"> <span class="mt-0 mb-1"> {{ Auth::user()->firstname }}  {{ Auth::user()->lastname }}</span>
          <small>Verified</small> </span> </button>
      </div>
  </div>
  <br>
  <ul class="nav flex-column in" id="side-menu">
      <li class=" nav-item"><a href="{{ route('dashboard') }}" class="nav-link "><i class="fas fa-tachometer-alt"></i> Account</a>
      </li>
      <li class=" nav-item"><a href="{{ route('trade.create') }}" class="nav-link "><i class="fas fa-coins"></i> Trade</a>
      </li>
      <li class=" nav-item"><a href="{{ route('deposit.create') }}" class="nav-link "><i class="fas fa-coins"></i> Deposit</a>
      </li>
      <li class=" nav-item"><a href="{{ route('withdraw.index') }}" class="nav-link "><i class="fas fa-wallet"></i> Withdraw</a>
      </li>
      <li class=" nav-item"><a href="{{ route('history') }}" class="nav-link "><i class="fas fa-exchange-alt"></i> History</a>
      </li>
      <li class=" nav-item"><a href="{{ route('transactions') }}" class="nav-link "><i class="fas fa-exchange-alt"></i> Transactions</a>
      </li>
  
      <li class=" nav-item"><a href="{{ route('purchase.create') }}" class="nav-link "><i class="fas fa-chart-pie"></i> Account Upgrade</a>
      </li>
      <li class=" nav-item"><a href="{{ route('purchase.create') }}" class="nav-link "><i class="fa fa-signal"></i> Signal Purchase</a>
      </li>
      <li class=" nav-item"><a href="{{ route('news') }}" class="nav-link "><i class="fas fa-newspaper"></i>News </a>
      </li>
      <li class=" nav-item"><a href="{{ route('settings') }}" class="nav-link "><i class="fas fa-cogs"></i>Account Settings </a>
      </li>
      <li class=" nav-item">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button class="nav-link" style="width:100%; background:none; border:none; text-align:left; color:white;"><i class="fa fa-sign-out"></i> Logout</button>
        </form>
   
      </li>
      <li class="title-nav">
      </li><li class="nav-item "> <a href="javascript:void(0)" class="menudropdown nav-link">Live Analysis<i class="fa fa-angle-down "></i></a>
      <ul class="nav flex-column nav-second-level ">
          <li class="nav-item"><a class="nav-link" href="{{ route('technical') }}"><i class="fas fa-expand-arrows-alt"></i> Technical Analysis</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('chart') }}"><i class="fas fa-chart-area"></i> Live Market Chart</a>
          </li><li class="nav-item"><a class="nav-link" href="{{ route('calendar') }}"><i class="fas fa-calendar-alt"></i> Market Calendar</a>
          </li>
      </ul>
      <!-- /.nav-second-level -->
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
