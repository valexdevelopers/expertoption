<!DOCTYPE html>
<html>
    <head>
        <title>Admin | Expert Option</title>
        @include('includes.admindashboardhead')
    </head>
    <body class="menu-position-side menu-side-left full-screen">
        <div class="all-wrapper solid-bg-all">
            
            @include('includes.admindashboardheader')
            <div class="layout-w">
                @include('includes.adminmenu')
                                           
                <div class="content-w">
                    <ul class="breadcrumb"><li class="breadcrumb-item"><a href="index.html">Home</a></li><li class="breadcrumb-item"><a href="index.html">Products</a></li><li class="breadcrumb-item"><span>Laptop with retina screen</span></li></ul>    
                    <div class="content-i">
                        <div class="content-box">
                            <div class="element-wrapper compact pt-4">
                                <div class="element-actions">
                                    <a class="btn btn-primary btn-sm" href="">
                                        <i class="os-icon os-icon-ui-22"></i>
                                        <span>Deposit</span>
                                    </a>
                                    <a class="btn btn-success btn-sm" href="">
                                        <i class="os-icon os-icon-grid-10"></i>
                                        <span>Withdraw</span>
                                    </a>
                                </div>
                                <h6 class="element-header">Update Address</h6>
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
                                <div class="element-box">
                                    <form method="POST" action="{{ route('admin.wallet.store') }}">
                                        @csrf
                                        <h5 class="form-header">Update</h5>
                                        <div class="row">       
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Btc Wallet Address</label>
                                                    <input class="form-control @error('bi') is-invalid @enderror" placeholder="" required="required" type="text" name="bi">
                                                    @error('bi') 
                                                        <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                    @enderror
                                                    
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Eth Wallet Address</label>
                                                    <input class="form-control @error('et') is-invalid @enderror input_number" placeholder="" required="required" type="text" name="et">
                                                    @error('et') 
                                                        <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">       
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Password</label>
                                                    <input class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password" required="required" type="password" name="password">
                                                    @error('password') 
                                                        <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        
                                        <div class="form-buttons-w">
                                            <button class="btn btn-primary" type="submit" name="register"> Submit</button>
                                        </div>
                                    </form>
                                
                                </div>               
                               
                            </div>

                            {{-- customizers start --}}
                            @include('includes.admincustomizers')
                            {{-- customizers end --}}
                        </div>
                    </div>
                </div>
            </div>
       
            <div class="display-type"></div>
        </div>

        @include('includes.adminscripts')
        
    </body>
</html> 