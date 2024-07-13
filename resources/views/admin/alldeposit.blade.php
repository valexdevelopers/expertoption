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
                    <div class="content-i">
                        <div class="content-box">
                            <div class="element-wrapper">
                                <h6 class="element-header">All Deposits accounts </h6>
                                <div class="element-box">
                                    <h5 class="form-header">Accounts Overview</h5>
                                    <div class="form-desc">All approved deposits are listed here. You can reverse or undo a deposit you added here in the case of error</div>
                                    <div class="table-responsive">
                                        @if(Session::has('message'))
                                            <div class="alert {{ Session::get('message-color') }} alert-dismissible fade show " role="alert">
                                                <strong>{{ Session::get('message') }}</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                                            </div>
                                        @endif
                                        <table id="myTable" width="100%" class="table table-striped table-lightfont">
                                            <thead>
                                                
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Total Deposit</th>
                                                    <th>Date</th>
                                                    <th>User Currency</th>
                                                    <th>Amount Initiated</th>
                                                    <th>Amount Approved</th>
                                                    <th>Payment Proof</th>
                                                    <th>Actions</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                              
                                                @if($alldeposits->count() > 0)
                                                    @foreach($alldeposits as $alldeposit)
                                                    <tr>
                                                        <td>{{ $alldeposit->users->firstname }} {{ $alldeposit->users->lastname }}</td>
                                                        <td> {{ number_format($alldeposit->users->deposits->sum('paid_amount'), 2)}}</td>
                                                        <td>{{ $alldeposit->updated_at }} </td>
                                                        <td>{{ $alldeposit->users->currency }} </td>
                                                        <td>{{ number_format($alldeposit->initiation_amount, 2) }}</td>
                                                        <td>{{ number_format($alldeposit->paid_amount, 2) }} </td>
                                                        
                                                        <td><a href="{{ asset('storage/'.$alldeposit->proof_of_payment) }}"><img src="{{ asset('storage/'.$alldeposit->proof_of_payment) }}" ></a></td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Actions
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    
                                                                    
                                                                    <li><a class="dropdown-item" href="{{ route('admin.reverse.index', $id =  $alldeposit->id) }}">Reverse Deposit</a></li>
                                                                    {{-- <li><a class="dropdown-item" href="{{ route('admin.users.destroy', $id = $alldeposit->id ) }}"   onclick="if (confirm('You are about to delete a user, would you like to proceed?')) commentDelete(1); return false  ">Delete User</a></li> --}}
                                                                </ul>
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