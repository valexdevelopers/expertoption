<?php

 include "connect.php";
    
    /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
    if(!isset($_SESSION)) {
        session_start();
    }
    
 

 include "connect.php";
    
    /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
    if(!isset($_SESSION)) {
        session_start();
    }
    
 
if(isset($_GET['sucessful'])){  
    $err= "Account opened. Proceed to set account number";
    echo "<script type='text/javascript'>alert('$err');</script>";
}


   
   
    
    
    $id= $_SESSION['loggedIn_admin_id'];
      


$sql0 = "SELECT * FROM admin WHERE id='".$id."' ";
    $result0 = $conn->query($sql0);
    $row0 = $result0->fetch_assoc();
$firstname = $row0["username"];




  if(isset($_POST['delete'])){
        
          $email = filter_input(INPUT_POST , 'email');
        $username1 = filter_input(INPUT_POST , 'username');
       
     
     
      $sql10 = "SELECT * FROM customers WHERE email='".$email."' AND username='".$username1."'";
    $result10 = $conn->query($sql10);
    $row10=$result10->fetch_assoc();
    
    if (($result10->num_rows) > 0) {
        
 $iid=$row10["cust_id"];
 
       $sql101 = "DELETE FROM customer WHERE email='".$email."' AND username='".$username1."'";
           

   

    
  
    if ($conn->query($sql101)) {
        // output data of each row
       
$sql11 = "DROP TABLE passbook".$iid;

  
    if ($conn->query($sql11)) { 
        

         $message3="You have sucessfully DELETED an account ";
        
    echo "<script type='text/javascript'>alert('$message3');</script>";
       
        }else{
          $message3="Error, could not delete account.";
          echo "<script type='text/javascript'>alert('$message3');</script>";
        }
    }else{
         $message3="could not delete from database, contact site developer.";  
    }
    }else{
       $message3="Error, user not found.";  
       echo "<script type='text/javascript'>alert('$message3');</script>";
    }
    
     
		}
?>


<!DOCTYPE html><html>
<!-- Mirrored from light.pinsupreme.com/apps_bank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Nov 2021 15:52:11 GMT -->
<head><title>Client Dashboard </title><meta charset="utf-8"><meta content="ie=edge" http-equiv="x-ua-compatible"><meta content="template language" name="keywords"><meta content="Tamerlan Soziev" name="author"><meta content="Admin dashboard html template" name="description"><meta content="width=device-width,initial-scale=1" name="viewport"><link href="favicon.png')}}" rel="shortcut icon"><link href="apple-touch-icon.png')}}" rel="apple-touch-icon"><link href="../fast.fonts.net/cssapi/487b73f1-c2d1-43db-8526-db577e4c822b.css" rel="stylesheet"><link href="bower_components/select2/dist/css/select2.min.css" rel="stylesheet"><link href="bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet"><link href="bower_components/dropzone/dist/dropzone.css" rel="stylesheet"><link href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet"><link href="bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet"><link href="bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet"><link href="bower_components/slick-carousel/slick/slick.css" rel="stylesheet"><link href="css/main5739.css?version=4.5.0" rel="stylesheet">
<style>

.top-bar .logo-w .logo-element1 {
    
    width: 26px;
    height: 26px;
    border-radius: 15px;
    position: relative;
    
    display: inline-block;
    vertical-align: middle;
    margin-right: 20px;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;}
</style>
</head>
<body class="menu-position-side menu-side-left full-screen">
    <div class="all-wrapper solid-bg-all">
        
        <div class="top-bar color-scheme-bright">
            <div class="logo-w menu-size">
                <a class="logo" href="index.php">
                    
                    <div class="logo-label">Altfolio</div>
                </a></div>
                
                
                                        <div class="top-menu-controls">
                                            <div ><div id='MicrosoftTranslatorWidget' class='Dark' style='color:white;background-color:#0532fc'></div><script type='text/javascript'>setTimeout(function(){{var s=document.createElement('script');s.type='text/javascript';s.charset='UTF-8';s.src=((location && location.href && location.href.indexOf('https') == 0)?'https://ssl.microsofttranslator.com':'http://www.microsofttranslator.com')+'/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**&ctf=False&ui=true&settings=Manual&from=';var p=document.getElementsByTagName('head')[0]||document.documentElement;p.insertBefore(s,p.firstChild); }},0);</script></div>
                                            <div class="messages-notifications os-dropdown-trigger os-dropdown-position-left"><i class="os-icon os-icon-mail-14"></i><div class="new-messages-count">12</div>
                                            </div>
                                <div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-left"><i class="os-icon os-icon-ui-46"></i>
                                    </div>
                                <div class="logged-user-w"><div class="logged-user-i"><div class="avatar-w"><img alt="" src="img/avatarimage.jpg')}}" ></div><div class="logged-user-menu color-style-bright"><div class="logged-user-avatar-info"><div class="avatar-w"><img alt="" src="img/avatarimage.jpg')}}" ></div>
                                <div class="logged-user-info-w"><div class="logged-user-name"><?php echo $firstname  ;?>   </div><div class="logged-user-role">Administrator</div>
                                
                                </div></div>
                                
                                <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>

                                </div></div></div></div></div><div class="search-with-suggestions-w"><div class="search-with-suggestions-modal"><div class="element-search"><input class="search-suggest-input" placeholder="Start typing to search..."><div class="close-search-suggestions"><i class="os-icon os-icon-x"></i></div></div><div class="search-suggestions-group"><div class="ssg-header"><div class="ssg-icon"><div class="os-icon os-icon-box"></div></div><div class="ssg-name">Projects</div><div class="ssg-info">24 Total</div></div><div class="ssg-content"><div class="ssg-items ssg-items-boxed"><a class="ssg-item" href="profile.php"><div class="item-media" style="background-image: url(img/company6.png)"></div><div class="item-name">Integ<span>ration</span> with API</div></a><a class="ssg-item" href="profile.php"><div class="item-media" style="background-image: url(img/company7.png)"></div><div class="item-name">Deve<span>lopm</span>ent Project</div></a></div></div></div><div class="search-suggestions-group"><div class="ssg-header"><div class="ssg-icon"><div class="os-icon os-icon-users"></div></div><div class="ssg-name">Customers</div><div class="ssg-info">12 Total</div></div><div class="ssg-content"><div class="ssg-items ssg-items-list"><a class="ssg-item" href="profile.php"><div class="item-media" style="background-image: url(img/avatar1.jpg)"></div><div class="item-name">John Mayers</div></a><a class="ssg-item" href="profile.php"><div class="item-media" style="background-image: url(img/avatar2.jpg)"></div><div class="item-name">Th<span>omas</span> Mullier</div></a><a class="ssg-item" href="profile.php">
                                    <div class="item-media" style="background-image: url(img/avatar3.jpg)"></div><div class="item-name">Kim C<span>olli</span>ns</div></a></div></div></div><div class="search-suggestions-group"><div class="ssg-header"><div class="ssg-icon"><div class="os-icon os-icon-folder"></div></div><div class="ssg-name">Files</div><div class="ssg-info">17 Total</div></div><div class="ssg-content"><div class="ssg-items ssg-items-blocks"><a class="ssg-item" href="#"><div class="item-icon"><i class="os-icon os-icon-file-text"></i></div><div class="item-name">Work<span>Not</span>e.txt</div></a><a class="ssg-item" href="#"><div class="item-icon"><i class="os-icon os-icon-film"></i></div>
                                        <div class="item-name">V<span>ideo</span>.avi</div></a><a class="ssg-item" href="#"><div class="item-icon"><i class="os-icon os-icon-database"></i></div><div class="item-name">User<span>Tabl</span>e.sql</div></a><a class="ssg-item" href="#"><div class="item-icon"><i class="os-icon os-icon-image"></i></div>
                                            <div class="item-name">wed<span>din</span>g.jpg</div></a></div><div class="ssg-nothing-found"><div class="icon-w"><i class="os-icon os-icon-eye-off"></i></div><span>No files were found. Try changing your query...</span></div></div></div></div></div><div class="layout-w"><div class="menu-mobile menu-activated-on-click color-scheme-dark"><div class="mm-logo-buttons-w"><a class="mm-logo" href="index.php"><span>Welcome Back! </span></a><div class="mm-buttons"><div class="content-panel-open"><div class="os-icon os-icon-grid-circles"></div></div><div class="mobile-menu-trigger"><div class="os-icon os-icon-hamburger-menu-1"></div></div></div></div><div class="menu-and-user"><div class="logged-user-w"><div class="avatar-w"><img alt="" src="img/avatarimage.jpg')}}" ></div><div class="logged-user-info-w"><div class="logged-user-name"><?php echo $firstname  ;?>   </div><div class="logged-user-role">Administrator</div></div></div>
                                             <ul class="main-menu">
                                                <li class="sub-header"><span>Overview</span></li>
                                                    <li class="selected  ">
                                                        <a href="index.php">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-layout"></div>
                                                            </div><span>Home</span></a></li>
                                                    <li class=" ">
                                                        <a href="all.php">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-layers"></div>
                                                            </div><span>View All</span>
                                                        </a>
                                                    </li>
                                                    <li class="sub-header"><span>Personal</span></li>
                                                    
                                                    <li class=" ">
                                                        <a href="wallet.php">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-file-text"></div>
                                                            </div><span>Change Wallet</span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="password.php">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-life-buoy"></div>
                                                            </div>
                                                            <span>Change Password</span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="btcprice.php">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-life-buoy"></div>
                                                            </div>
                                                            <span>Change BTC Price</span>
                                                        </a>
                                                    </li>
                                                    <li class="sub-header"><span>Accounts</span></li>
                                                    <li class=" ">
                                                        <a href="https://expertsoption.co/register.php">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-mail"></div>
                                                            </div><span>Open Account</span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="verify.php">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-package"></div>
                                                            </div><span>Verify Customer</span>
                                                        </a>
                                                    </li>
                                                     <li class=" ">
                                                        <a href="pending.php">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-package"></div>
                                                            </div><span>Pending Deposit</span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="payment.php">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-package"></div>
                                                            </div><span>View Proof of Payment</span>
                                                        </a>
                                                    </li>
                                                     <li class=" ">
                                                        <a href="">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-package"></div>
                                                            </div><span>Add Deposit</span>
                                                        </a>
                                                    </li>
                                                     <li class=" ">
                                                        <a href="profit.php">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-package"></div>
                                                            </div><span>Add Profit</span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="delete.php">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-users"></div>
                                                            </div>
                                                            <span>Delete Account</span>
                                                        </a>
                                                        
                                                    </li>
                                                    <li class=" ">
                                                        <a href="deduction.php">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-edit-32"></div>
                                                            </div><span>Deductions</span>
                                                        </a>
                                                    </li>
                                                    
                                                   
                                                    <li class=" ">
                                                        <a href="deactivate.php">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-zap"></div>
                                                            </div>
                                                            <span>Deactivate account</span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="logout.php">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-grid"></div>
                                                            </div>
                                                            <span>Logout</span>
                                                        </a>
                                                        
                                                    </li>     
                                                            
                                                            
                                                            
                                                </ul>
                                            
                                            </div></div>
                                            
                                                         <div class="menu-w color-scheme-light color-style-transparent menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">
                                                            <div class="logged-user-w avatar-inline"><div class="logged-user-i"><div class="avatar-w"><img alt="" src="img/avatarimage.jpg')}}" ></div><div class="logged-user-info-w"><div class="logged-user-name"><?php echo $firstname  ;?>   </div><div class="logged-user-role">Administrator</div></div>
                                                            <div class="logged-user-toggler-arrow"><div class="os-icon os-icon-chevron-down"></div></div><div class="logged-user-menu color-style-bright"><div class="logged-user-avatar-info"><div class="avatar-w"><img alt="" src="img/avatarimage.jpg')}}" ></div><div class="logged-user-info-w"><div class="logged-user-name"><?php echo $firstname  ;?>   </div><div class="logged-user-role">Administrator</div></div></div><div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div><ul><li><a href="apps_email.html"><i class="os-icon os-icon-mail-01"></i><span>Incoming Mail</span></a></li><li><a href="profile.php"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a></li><li><a href="profile.php"><i class="os-icon os-icon-coins-4"></i><span>Billing Details</span></a></li>
                                            <li><a href="#"><i class="os-icon os-icon-others-43"></i><span>Notifications</span></a></li><li><a href="logout.php"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a></li>
                                            </ul>
                                            </div></div></div><div class="menu-actions"><div class="messages-notifications os-dropdown-trigger os-dropdown-position-right"><i class="os-icon os-icon-mail-14"></i><div class="new-messages-count">12</div><div class="os-dropdown light message-list"><ul><li><a href="#"><div class="user-avatar-w"><img alt="" src="img/avatarimage.jpg')}}" ></div><div class="message-content"><h6 class="message-from">John Mayers</h6><h6 class="message-title">Account Update</h6></div></a></li><li><a href="#"><div class="user-avatar-w"><img alt="" src="img/avatar2.jpg')}}"></div><div class="message-content"><h6 class="message-from">Phil Jones</h6><h6 class="message-title">Secutiry Updates</h6></div></a></li><li><a href="#"><div class="user-avatar-w"><img alt="" src="img/avatar3.jpg')}}"></div>
                                                <div class="message-content">
                                                    <h6 class="message-from">Bekky Simpson</h6><h6 class="message-title">Vacation Rentals</h6></div></a></li><li><a href="#"><div class="user-avatar-w"><img alt="" src="img/avatar4.jpg')}}"></div><div class="message-content"><h6 class="message-from">Alice Priskon</h6><h6 class="message-title">Payment Confirmation</h6></div></a></li></ul></div></div><div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-right"><i class="os-icon os-icon-ui-46"></i><div class="os-dropdown"><div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div><ul><li><a href="profile.php"><i class="os-icon os-icon-ui-49"></i><span>Profile Settings</span></a></li><li><a href="profile.php"><i class="os-icon os-icon-grid-10"></i><span>Billing Info</span></a></li><li><a href="profile.php"><i class="os-icon os-icon-ui-44"></i><span>My Invoices</span></a></li><li><a href="profile.php"><i class="os-icon os-icon-ui-15"></i><span>Cancel Account</span></a></li></ul></div></div><div class="messages-notifications os-dropdown-trigger os-dropdown-position-right"><i class="os-icon os-icon-zap"></i><div class="new-messages-count">4</div><div class="os-dropdown light message-list"><div class="icon-w"><i class="os-icon os-icon-zap"></i></div><ul><li><a href="#"><div class="user-avatar-w"><img alt="" src="img/avatarimage.jpg')}}" ></div><div class="message-content"><h6 class="message-from">John Mayers</h6><h6 class="message-title">Account Update</h6></div></a></li><li><a href="#"><div class="user-avatar-w"><img alt="" src="img/avatar2.jpg')}}"></div><div class="message-content"><h6 class="message-from">Phil Jones</h6><h6 class="message-title">Secutiry Updates</h6></div></a></li><li><a href="#"><div class="user-avatar-w"><img alt="" src="img/avatar3.jpg')}}"></div><div class="message-content"><h6 class="message-from">Bekky Simpson</h6><h6 class="message-title">Vacation Rentals</h6></div></a></li><li><a href="#"><div class="user-avatar-w"><img alt="" src="img/avatar4.jpg')}}"></div><div class="message-content"><h6 class="message-from">Alice Priskon</h6><h6 class="message-title">Payment Confirmation</h6></div></a></li>
                                                    
                                                    
                                                    </ul>
                                                    </div></div></div><div class="element-search autosuggest-search-activator"><input placeholder="Start typing to search..."></div><h1 class="menu-page-header">Page Header</h1><ul class="main-menu">
                                                    <li class="sub-header"><span>Overview</span></li>
                                                   <li class="selected  ">
                                                        <a href="index.php">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-layout"></div>
                                                            </div><span>Home</span></a></li>
                                                    <li class=" ">
                                                        <a href="all.php">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-layers"></div>
                                                            </div><span>View All</span>
                                                        </a>
                                                    </li>
                                                    <li class="sub-header"><span>Personal</span></li>
                                                    
                                                    <li class=" ">
                                                        <a href="wallet.php">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-file-text"></div>
                                                            </div><span>Change Wallet</span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="password.php">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-life-buoy"></div>
                                                            </div>
                                                            <span>Change Password</span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="btcprice.php">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-life-buoy"></div>
                                                            </div>
                                                            <span>Change BTC Price</span>
                                                        </a>
                                                    </li>
                                                    <li class="sub-header"><span>Accounts</span></li>
                                                    <li class=" ">
                                                        <a href="https://expertsoption.co/register.php">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-mail"></div>
                                                            </div><span>Open Account</span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="verify.php">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-package"></div>
                                                            </div><span>Verify Customer</span>
                                                        </a>
                                                    </li>
                                                     <li class=" ">
                                                        <a href="pending.php">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-package"></div>
                                                            </div><span>Pending Deposit</span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="payment.php">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-package"></div>
                                                            </div><span>View Proof of Payment</span>
                                                        </a>
                                                    </li>
                                                     <li class=" ">
                                                        <a href="">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-package"></div>
                                                            </div><span>Add Deposit</span>
                                                        </a>
                                                    </li>
                                                     <li class=" ">
                                                        <a href="profit.php">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-package"></div>
                                                            </div><span>Add Profit</span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="delete.php">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-users"></div>
                                                            </div>
                                                            <span>Delete Account</span>
                                                        </a>
                                                        
                                                    </li>
                                                    <li class=" ">
                                                        <a href="deduction.php">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-edit-32"></div>
                                                            </div><span>Deductions</span>
                                                        </a>
                                                    </li>
                                                    
                                                   
                                                    <li class=" ">
                                                        <a href="deactivate.php">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-zap"></div>
                                                            </div>
                                                            <span>Deactivate account</span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="logout.php">
                                                            <div class="icon-w">
                                                                <div class="os-icon os-icon-grid"></div>
                                                            </div>
                                                            <span>Logout</span>
                                                        </a>
                                                        
                                                    </li>   
                                                </ul>
                                                
                                            </div>
                                        </li>
                                            <div class="content-w">
                                                <div class="content-i">
                                                    <div class="content-box">
                                                        <div class="element-wrapper compact pt-4">
                                                            <div class="element-actions"><a class="btn btn-primary btn-sm" href=""><i class="os-icon os-icon-ui-22"></i><span>Deposit</span></a><a class="btn btn-success btn-sm" href=""><i class="os-icon os-icon-grid-10"></i><span>Withdraw</span></a></div><h6 class="element-header">Financial Overview</h6><div class="element-box-tp">
                                                    
    <div class="row"><div class="col-sm-12"><div class="element-wrapper"><div class="element-box">
     <form id="formValidate" method="POST" action="delete.php">
        <h5 class="form-header">Delete Account here</h5>
        <h6 class="form-header">Only Permanently Delete Account here. To temporarily deactivate account click here <a href="deactivate.php">Deactivate</a> </h6>
        
        <div class="row">
            <div 
class="col-sm-6"> <div class="form-group"><label for=""> Email address</label><input class="form-control" data-error="Your email address is invalid" placeholder="Enter email" required="required" type="email" name="email"><div class="help-block form-text with-errors form-control-feedback"></div></div>

</div>            <div 
class="col-sm-6"><div class="form-group"><label for=""> Username</label><input class="form-control" data-error="Please input your username" placeholder="Usename" required="required" name="username"><div class="help-block form-text with-errors form-control-feedback"></div></div>
</div>

</div>


<div class="form-buttons-w"><button class="btn btn-primary" type="submit" name="delete"> Submit</button></div></form></div></div></div></div>
</div><script src="bower_components/jquery/dist/jquery.min.js"></script><script src="bower_components/popper.js/dist/umd/popper.min.js"></script><script src="bower_components/moment/moment.js"></script><script src="bower_components/chart.js/dist/Chart.min.js"></script><script src="bower_components/select2/dist/js/select2.full.min.js"></script><script src="bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script><script src="bower_components/ckeditor/ckeditor.js"></script><script src="bower_components/bootstrap-validator/dist/validator.min.js"></script><script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script><script src="bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js"></script><script src="bower_components/dropzone/dist/dropzone.js"></script><script src="bower_components/editable-table/mindmup-editabletable.js"></script><script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script><script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script><script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script><script src="bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script><script src="bower_components/tether/dist/js/tether.min.js"></script><script src="bower_components/slick-carousel/slick/slick.min.js"></script><script src="bower_components/bootstrap/js/dist/util.js"></script><script src="bower_components/bootstrap/js/dist/alert.js"></script><script src="bower_components/bootstrap/js/dist/button.js"></script><script src="bower_components/bootstrap/js/dist/carousel.js"></script><script src="bower_components/bootstrap/js/dist/collapse.js"></script><script src="bower_components/bootstrap/js/dist/dropdown.js"></script><script src="bower_components/bootstrap/js/dist/modal.js"></script><script src="bower_components/bootstrap/js/dist/tab.js"></script><script src="bower_components/bootstrap/js/dist/tooltip.js"></script><script src="bower_components/bootstrap/js/dist/popover.js"></script><script src="js/demo_customizer5739.js?version=4.5.0"></script><script src="js/main5739.js?version=4.5.0"></script><script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','../www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-42863888-9', 'auto');
ga('send', 'pageview');</script></body>
<!-- Mirrored from light.pinsupreme.com/forms_validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Nov 2021 15:52:35 GMT -->
</html> 