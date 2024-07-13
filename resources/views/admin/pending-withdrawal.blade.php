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
                                    <div class="table-responsive">
                                        <table id="myTable" width="100%" class="table table-striped table-lightfont">
                                            <thead>
                                                
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>Method</th>
                                                    <th>Payment Detail</th>
                                                    <th>Amount</th>
                                                    <th>ID Type</th>
                                                    <th>ID Card</th>
                                                    <th>Actions</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($pendings->count() > 0)
                                                    @foreach($pendings as $pending)
                                                        <tr>
                                                            <td>{{ $pending->users->firstname }} {{ $pending->users->lastname }}</td>
                                                            <td>{{ $pending->created_at }}</td>
                                                            <td>{{ $pending->method }}</td>
                                                            <td>
                                                                @foreach(json_decode($pending->payment_details) as $payment_detail)
                                                                {{ $payment_detail }} <br> 
                                                                @endforeach
                                                                
                                                            </td>
                                                            <td>{{ $pending->amount_requested }}</td>
                                                            <td>{{ $pending->user_identification_type }}</td>
                                                            <td><a href="{{ asset('storage/'.$pending->user_identification_card) }}"><img src="{{ asset('storage/'.$pending->user_identification_card) }}" ></a></td>
                                                            <td class="row-actions">
                                                               
                                                                <a href="{{ route('admin.withdraw.create', $pending_id = $pending->id) }}">
                                                                    <i class="os-icon bi-check-circle-fill"></i>&nbsp;Pay
                                                                </a>
                                                                
                                                            </td>
                                                            
                                                        </tr>
                                                    @endforeach
                                                    
                                                @endif
                                               
                                             
                                            </tbody>
                                        </table>
                                    </div> 
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