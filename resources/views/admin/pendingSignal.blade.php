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
                                                    <th>Type</th>
                                                    <th>Signal Price</th>
                                                    <th>Number of Signal</th>
                                                    <th>Amount Paid</th>
                                                    <th>Status</th>
                                                    <th>Proof</th>
                                                    <th>Actions</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($pendings->count() > 0)
                                                    @foreach($pendings as $pending)
                                                        <tr>
                                                            <td>{{ $pending->users->firstname }} {{ $pending->users->lastname }}</td>
                                                            <td>{{ $pending->created_at }}</td>
                                                            <td>{{ $pending->type }}</td>
                                                            <td>{{ $pending->signalAmount }}</td>
                                                            <td>{{ $pending->signalQty }}</td>
                                                            <td>{{ $pending->initiation_amount }}</td>
                                                            <td>{{ $pending->status }}</td>
                                                            <td><a href="{{ asset('storage/'.$pending->proof_of_payment) }}"><img src="{{ asset('storage/'.$pending->proof_of_payment) }}" ></a></td>
                                                            <td class="row-actions">
                                                               
                                                                <a href="{{ route('admin.deposit.signal.store', $pending_id = $pending->id) }}">
                                                                    <i class="os-icon bi-check-circle-fill"></i>
                                                                </a>
                                                                <button class="danger" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $pending->id }}">
                                                                    <i class="os-icon os-icon-ui-15"></i>
                                                                </button>
                                                                <!-- Modal -->
                                                                    <div class="modal fade" id="exampleModal-{{ $pending->id }}" tabindex="-1" aria-labelledby="exampleModalLabel-{{ $pending->id }}" aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Deposit Confirmation</h1>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                You are about to permanently <strong> delete {{ $pending->users->firstname }} {{ $pending->users->lastname }} deposit.</strong>  Be sure before proceeding with this 
                                                                                action as it can not be undone
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                                <a href="" class="btn btn-primary">Delete Deposit</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
  
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