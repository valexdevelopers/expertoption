<div class="menu-mobile menu-activated-on-click color-scheme-dark">
    <div class="mm-logo-buttons-w">
        <a class="mm-logo" href="{{ route('admin.home') }}">
            <span>Welcome Back! </span>
        </a>
        <div class="mm-buttons">
            <div class="content-panel-open">
                <div class="os-icon os-icon-grid-circles"></div>
            </div>
            <div class="mobile-menu-trigger">
                <div class="os-icon os-icon-hamburger-menu-1"></div>
            </div>
        </div>
    </div>
    <div class="menu-and-user">
        <div class="logged-user-w">
            <div class="avatar-w">
                <img alt="" src="{{ asset('img/admin.jpg') }}" >
            </div>
            <div class="logged-user-info-w">
                <div class="logged-user-name">Admin   </div>
                <div class="logged-user-role">Account Holder</div>
            </div>
        </div>
        <ul class="main-menu">
            <li class="selected  ">
                <a href="{{ route('admin.home') }}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-layout"></div>
                    </div><span>Home</span></a></li>
            <li class=" ">
                <a href="{{ route('admin.users.index') }}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-layers"></div>
                    </div><span>All Users</span>
                </a>
            </li>
            <li class="sub-header"><span>Personal</span></li>
            
            <li class=" ">
                <a href="{{ route('admin.plan.index') }}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-file-text"></div>
                    </div><span>View Plans</span>
                </a>
            </li>
            <li class=" ">
                <a href="{{ route('admin.plan.create') }}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-file-text"></div>
                    </div><span>Set Plans</span>
                </a>
            </li>
            <li class=" ">
                <a href="{{ route('admin.wallet') }}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-file-text"></div>
                    </div><span>Change Wallet</span>
                </a>
            </li>
            <li class=" ">
                <a href="{{ route('admin.password') }}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-life-buoy"></div>
                    </div>
                    <span>Change Password</span>
                </a>
            </li>
            
            <li class="sub-header"><span>Accounts</span></li>
            <li class=" ">
                <a href="https://expertsoption.co/register">
                    <div class="icon-w">
                        <div class="os-icon os-icon-mail"></div>
                    </div><span>Open Account</span>
                </a>
            </li>
            <li class=" ">
                <a href="{{ route('admin.deposit.index') }}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-package"></div>
                    </div><span>All Deposit</span>
                </a>
            </li> 
            <li class=" ">
                <a href="{{ route('admin.deposit') }}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-package"></div>
                    </div><span>Pending Deposit</span>
                </a>
            </li>
            <li class=" ">
                <a href="{{ route('admin.deposit.signal') }}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-package"></div>
                    </div><span>Pending Signal Deposit</span>
                </a>
            </li>
            
            <li class=" ">
                <a href="{{ route('admin.withdraw.index') }}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-package"></div>
                    </div><span>Pending Withdrawal</span>
                </a>
            </li>
           
            <li class=" ">
                <a href="{{ route('admin.bonus') }}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-package"></div>
                    </div><span>Add Bonus</span>
                </a>
            </li>
            <li class=" ">
                <a href="{{ route('admin.withdraw.create') }}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-package"></div>
                    </div><span>Pay Clients</span>
                </a>
            </li>
            
            <li class=" ">
                <a href="{{ route('admin.deposit.deduct') }}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-edit-32"></div>
                    </div><span>Deductions</span>
                </a>
            </li>
           
            <li class=" ">
                <form method="post" action="{{ route('admin.logout') }}">
                    @csrf
                    <div class="logout">
                        <div class="icon-w">
                            <div class="os-icon  os-icon-signs-11"></div>
                        </div>
                        <button style="background: none; border:none;" type="submit">Logout</button>
                    </div>
                    
                </form>
                
            </li>       
        </ul>
                                
    </div>
</div>
<div class="menu-w color-scheme-light color-style-transparent menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">
    <div class="logged-user-w avatar-inline">
        <div class="logged-user-i">
            <div class="avatar-w">
                <img alt="" src="{{ asset('img/admin.jpg') }}" >
            </div>
            <div class="logged-user-info-w">
                <div class="logged-user-name">Admin   </div>
                <div class="logged-user-role">Administrator</div>
            </div>
            <div class="logged-user-toggler-arrow">
                <div class="os-icon os-icon-chevron-down"></div>
            </div>
            <div class="logged-user-menu color-style-bright">
                <div class="logged-user-avatar-info">
                    <div class="avatar-w">
                        <img alt="" src="{{ asset('img/admin.jpg') }}" >
                    </div>
                    <div class="logged-user-info-w">
                        <div class="logged-user-name">Admin  </div>
                        <div class="logged-user-role">Account Holder</div>
                    </div>
                </div>
                <div class="bg-icon">
                    <i class="os-icon os-icon-wallet-loaded"></i>
                </div>
                <ul>
                    <li>
                        <a href="apps_email.html">
                            <i class="os-icon os-icon-mail-01"></i>
                            <span>Incoming Mail</span>
                        </a>
                    </li>
                    <li>
                        <a href="users_profile_big.html">
                            <i class="os-icon os-icon-user-male-circle2"></i>
                            <span>Profile Details</span>
                        </a>
                    </li>
                    <li>
                        <a href="users_profile_small.html">
                            <i class="os-icon os-icon-coins-4"></i>
                            <span>Billing Details</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="os-icon os-icon-others-43"></i>
                            <span>Notifications</span>
                        </a>
                    </li>
                    <li>
                        <form method="post" action="{{ route('admin.logout') }}">
                            @csrf
                            <div class="logout">
                                <div class="icon-w">
                                    <div class="os-icon  os-icon-signs-11"></div>
                                </div>
                                <button style="background: none; border:none;" type="submit">Logout</button>
                            </div>
                            
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="menu-actions">
        <div class="messages-notifications os-dropdown-trigger os-dropdown-position-right">
            <i class="os-icon os-icon-mail-14"></i>
            <div class="new-messages-count">12</div>
            <div class="os-dropdown light message-list">
                <ul>
                    <li>
                        <a href="#">
                            <div class="user-avatar-w">
                                <img alt="" src="img/avatar3.jpg')}}" >
                            </div>
                            <div class="message-content">
                                <h6 class="message-from">John Mayers</h6>
                                <h6 class="message-title">Account Update</h6>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="user-avatar-w">
                                <img alt="" src="img/avatar2.jpg')}}">
                            </div>
                            <div class="message-content">
                                <h6 class="message-from">Phil Jones</h6>
                                <h6 class="message-title">Secutiry Updates</h6>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="user-avatar-w">
                                <img alt="" src="img/avatar3.jpg')}}">
                            </div>
                            <div class="message-content">
                                <h6 class="message-from">Bekky Simpson</h6>
                                <h6 class="message-title">Vacation Rentals</h6>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="user-avatar-w">
                                <img alt="" src="img/avatar4.jpg')}}">
                            </div>
                            <div class="message-content">
                                <h6 class="message-from">Alice Priskon</h6>
                                <h6 class="message-title">Payment Confirmation</h6>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-right">
            <i class="os-icon os-icon-ui-46"></i>
            <div class="os-dropdown">
                <div class="icon-w">
                    <i class="os-icon os-icon-ui-46"></i>
                </div>
                <ul>
                    <li>
                        <a href="users_profile_small.html">
                            <i class="os-icon os-icon-ui-49"></i>
                            <span>Profile Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="users_profile_small.html">
                            <i class="os-icon os-icon-grid-10"></i>
                            <span>Billing Info</span>
                        </a>
                    </li>
                    <li>
                        <a href="users_profile_small.html">
                            <i class="os-icon os-icon-ui-44"></i>
                            <span>My Invoices</span>
                        </a>
                    </li>
                    <li>
                        <a href="users_profile_small.html">
                            <i class="os-icon os-icon-ui-15"></i>
                            <span>Cancel Account</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="messages-notifications os-dropdown-trigger os-dropdown-position-right">
            <i class="os-icon os-icon-zap"></i>
            <div class="new-messages-count">0</div>
            {{-- <div class="os-dropdown light message-list">
                <div class="icon-w">
                    <i class="os-icon os-icon-zap"></i>
                </div>
                <ul>
                    <li>
                        <a href="#">
                            <div class="user-avatar-w">
                                <img alt="" src="" >
                            </div>
                            <div class="message-content">
                                <h6 class="message-from">John Mayers</h6>
                                <h6 class="message-title">Account Update</h6>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="user-avatar-w">
                                <img alt="" src="img/avatar2.jpg')}}">
                            </div>
                            <div class="message-content">
                                <h6 class="message-from">Phil Jones</h6>
                                <h6 class="message-title">Secutiry Updates</h6>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="user-avatar-w">
                                <img alt="" src="img/avatar3.jpg')}}">
                            </div>
                            <div class="message-content">
                                <h6 class="message-from">Bekky Simpson</h6>
                                <h6 class="message-title">Vacation Rentals</h6>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="user-avatar-w">
                                <img alt="" src="img/avatar4.jpg')}}">
                            </div>
                            <div class="message-content">
                                <h6 class="message-from">Alice Priskon</h6>
                                <h6 class="message-title">Payment Confirmation</h6>
                            </div>
                        </a>
                    </li>
                                        
                                        
                </ul>
            </div> --}}
        </div>
    </div>
    <div class="element-search autosuggest-search-activator">
        <input placeholder="Start typing to search...">
    </div>
    <h1 class="menu-page-header">Page Header</h1>
    <ul class="main-menu">
        <li class="sub-header"><span>Overview</span></li>
        <li class="selected  ">
            <a href="{{ route('admin.home') }}">
                <div class="icon-w">
                    <div class="os-icon os-icon-layout"></div>
                </div><span>Home</span></a></li>
        <li class=" ">
            <a href="{{ route('admin.users.index') }}">
                <div class="icon-w">
                    <div class="os-icon os-icon-layers"></div>
                </div><span>All Users</span>
            </a>
        </li>
        <li class="sub-header"><span>Personal</span></li>
        
        <li class=" ">
            <a href="{{ route('admin.plan.index') }}">
                <div class="icon-w">
                    <div class="os-icon os-icon-file-text"></div>
                </div><span>View Plans</span>
            </a>
        </li>

        <li class=" ">
            <a href="{{ route('admin.plan.create') }}">
                <div class="icon-w">
                    <div class="os-icon os-icon-file-text"></div>
                </div><span>Set Plans</span>
            </a>
        </li>

        <li class=" ">
            <a href="{{ route('admin.wallet') }}">
                <div class="icon-w">
                    <div class="os-icon os-icon-file-text"></div>
                </div><span>Change Wallet</span>
            </a>
        </li>
        <li class=" ">
            <a href="{{ route('admin.password') }}">
                <div class="icon-w">
                    <div class="os-icon os-icon-life-buoy"></div>
                </div>
                <span>Change Password</span>
            </a>
        </li>
        
        <li class="sub-header"><span>Accounts</span></li>
        <li class=" ">
            <a href="https://expertsoption.co/register">
                <div class="icon-w">
                    <div class="os-icon os-icon-mail"></div>
                </div><span>Open Account</span>
            </a>
        </li>
        <li class=" ">
            <a href="{{ route('admin.deposit.index') }}">
                <div class="icon-w">
                    <div class="os-icon os-icon-package"></div>
                </div><span>All Deposit</span>
            </a>
        </li>
        <li class=" ">
            <a href="{{ route('admin.deposit') }}">
                <div class="icon-w">
                    <div class="os-icon os-icon-package"></div>
                </div><span>Pending Deposit</span>
            </a>
        </li>
        <li class=" ">
            <a href="{{ route('admin.deposit.signal') }}">
                <div class="icon-w">
                    <div class="os-icon os-icon-package"></div>
                </div><span>Pending Signal Deposit</span>
            </a>
        </li>
        <li class=" ">
            <a href="{{ route('admin.withdraw.index') }}">
                <div class="icon-w">
                    <div class="os-icon os-icon-package"></div>
                </div><span>Pending Withdrawal</span>
            </a>
        </li>
       
        <li class=" ">
            <a href="{{ route('admin.bonus') }}">
                <div class="icon-w">
                    <div class="os-icon os-icon-package"></div>
                </div><span>Add Bonus</span>
            </a>
        </li>
        <li class=" ">
            <a href="{{ route('admin.withdraw.create') }}">
                <div class="icon-w">
                    <div class="os-icon os-icon-package"></div>
                </div><span>Pay Clients</span>
            </a>
        </li>
       
        <li class=" ">
            <a href="{{ route('admin.deposit.deduct') }}">
                <div class="icon-w">
                    <div class="os-icon os-icon-edit-32"></div>
                </div><span>Deductions</span>
            </a>
        </li>
        
        
        <li class=" ">
            <form method="post" action="{{ route('admin.logout') }}">
                @csrf
                <div class="logout">
                    <div class="icon-w">
                        <div class="os-icon  os-icon-signs-11"></div>
                    </div>
                    <button style="background: none; border:none;" type="submit">Logout</button>
                </div>
                
            </form>
            
        </li>
    </ul>
    
</div>