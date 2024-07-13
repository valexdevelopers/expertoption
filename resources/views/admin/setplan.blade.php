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
                            <div class="element-wrapper">
                                <h6 class="element-header">Plans</h6>
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                        
                                    </div>
                                
                                @endif
                                <div class="element-box">
                                    <form method="POST" action="{{ route('admin.plan.store') }}">
                                        @csrf
                                        <h5 class="form-header">SET PLANS</h5>
                                        <div class="row">       
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Plan Name</label>
                                                    <input class="form-control @error('plan_name') is-invalid @enderror" placeholder="Enter plan name e.g deluxe" required="required" type="text" name="plan_name">
                                                    @error('plan_name') 
                                                        <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                    @enderror
                                                    
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Plan Profit</label>
                                                    <input class="form-control @error('profit_percentage') is-invalid @enderror input_number" placeholder="Enter profit percentage" required="required" type="number" name="profit_percentage">
                                                    @error('profit_percentage') 
                                                        <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">       
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Max Profit</label>
                                                    <input class="form-control @error('stop_amount') is-invalid @enderror" placeholder="maximum profit for this plan" required="required" type="number" name="stop_amount">
                                                    @error('stop_amount') 
                                                        <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Trading Days</label>
                                                    <input class="form-control @error('trade_timeline') is-invalid @enderror" placeholder="Enter number of trading days" required="required" type="number" name="trade_timeline">
                                                    @error('trade_timeline') 
                                                        <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">       
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Min Investment</label>
                                                    <input class="form-control @error('min_trade_amount') is-invalid @enderror" placeholder="Enter minimum investement" required="required" type="text" name="min_trade_amount">
                                                    @error('min_trade_amount') 
                                                        <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Max Investment</label>
                                                    <input class="form-control @error('max_trade_amount') is-invalid @enderror" placeholder="Enter max trading amount" required="required" type="number" name="max_trade_amount">
                                                    @error('max_trade_amount') 
                                                        <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">       
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Professional Signal</label>
                                                    <select class="form-control @error('professional_signal') is-invalid @enderror" name="professional_signal">
                                                        <option disabled selected>Does plan come with Professional Signal </option>
                                                        <option value="1">Yes</option>
                                                        <option value="0">No</option>
                                                        
                                                    </select>
                                                    @error('professional_signal') 
                                                        <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Referral Bonus</label>
                                                    <input class="form-control @error('referral_bonus') is-invalid @enderror" placeholder="Enter referral bonus" required="required" type="number" name="referral_bonus">
                                                    @error('referral_bonus') 
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