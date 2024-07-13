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
                                <h6 class="element-header">Withdrawal</h6>
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
                                    <form method="POST" action="{{ route('admin.withdraw.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <h5 class="form-header">Pay Withdrawal</h5>
                                        <div class="row">  
                                            @php
                                                $email = $pending->users->email ?? ''; 
                                                $withdrawal_id = $pending->id ?? Null;
                                            @endphp
                                            <input type="hidden" name="withdrawal_id" value="{{ $withdrawal_id }}">   
                                              
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">User Email</label>
                                                    <input value="{{ $email }}" class="form-control @error('user_name') is-invalid @enderror" placeholder="" required="required" type="text" name="user_email" >
                                                    @error('user_name') 
                                                        <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                    @enderror
                                                    
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Amount Paid</label>
                                                    <input class="form-control @error('amount') is-invalid @enderror" placeholder="" required="required" type="number" name="amount">
                                                    @error('amount') 
                                                        <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row"> 
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Payment Proof</label>
                                                    <input class="form-control @error('payment_proof') is-invalid @enderror" placeholder="" required="required" type="file" name="payment_proof">
                                                    @error('payment_proof') 
                                                        <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>      
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Comment</label>
                                                    <textarea class="form-control @error('comment') is-invalid @enderror" placeholder="You can add a comment for this transaction"  name="comment"></textarea>
                                                    @error('comment') 
                                                        <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="form-buttons-w">
                                            <button class="btn btn-primary" type="submit" name="register"> Pay Out</button>
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