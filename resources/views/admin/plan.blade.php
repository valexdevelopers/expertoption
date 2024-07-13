<!DOCTYPE html>
<html>
    <head>
        <title>Admin | Expert Option</title>
        @include('includes.admindashboardhead')
    </head>
    <body class="menu-position-side menu-side-left full-screen with-content-panel">
        <div class="all-wrapper solid-bg-all with-side-panel">
            
            @include('includes.admindashboardheader')
            <div class="layout-w">
                @include('includes.adminmenu')
                                           
                <div class="content-w">
                    <ul class="breadcrumb"><li class="breadcrumb-item"><a href="index.html">Home</a></li><li class="breadcrumb-item"><a href="index.html">Products</a></li><li class="breadcrumb-item"><span>Laptop with retina screen</span></li></ul>    
                    <div class="content-i">
                        <div class="content-box">
                            @if(Session::has('message'))
                                <div class="alert {{ Session::get('message-color') }}  alert-dismissible fade show">
                                    <strong>{{ Session::get('message')}}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button>
                                </div>
                            
                            @endif
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="element-wrapper">
                                        <h6 class="element-header">Recent Orders</h6>
                                        <div class="element-box-tp">
                                            <div class="controls-above-table">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        {{-- <a class="btn btn-sm btn-secondary" href="#">Download CSV</a>
                                                        <a class="btn btn-sm btn-secondary" href="#">Archive</a>
                                                        <a class="btn btn-sm btn-danger" href="#">Delete</a> --}}
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <form class="form-inline justify-content-sm-end">
                                                            <input class="form-control form-control-sm rounded bright" placeholder="Search">
                                                            <select class="form-control form-control-sm rounded bright">
                                                                <option selected="selected" value="">Select Status</option>
                                                                <option value="Pending">Pending</option>
                                                                <option value="Active">Active</option>
                                                                <option value="Cancelled">Cancelled</option>
                                                            </select>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table id="myTable" class="table table-bordered table-lg table-v2 table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">
                                                                <input class="form-control" type="checkbox">
                                                            </th>
                                                            <th>Plan Name</th>
                                                            <th>Trading Days</th>
                                                            <th>Minimum</th>
                                                            <th>Maximum</th>
                                                            <th>Profit</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if($plans->count() > 0)
                                                            @foreach($plans as $plan)
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <input class="" type="checkbox">
                                                                    </td>
                                                                    
                                                                    <td>
                                                                        {{$plan->plan_name  }}
                                                                    </td>
                                                                    <td class="text-right">{{$plan->trade_timeline  }}</td>
                                                                    <td>{{ $plan->min_trade_amount }}</td>
                                                                    <td>{{ $plan->max_trade_amount }}</td>
                                                                    <td class="text-center">
                                                                        {{-- <div class="status-pill green" data-title="Complete" data-toggle="tooltip" data-original-title="" title=""></div> --}}
                                                                        {{ $plan->profit_percentage }}
                                                                    </td>
                                                                    <td class="row-actions">
                                                                        <a href="#">
                                                                            <i class="os-icon os-icon-ui-49"></i>
                                                                        </a>
                                                                        <a href="#">
                                                                            <i class="os-icon os-icon-grid-10"></i>
                                                                        </a>
                                                                        <a class="danger" href="{{ route('admin.plan.delete', $plan = $plan->id) }}">
                                                                            <i class="os-icon os-icon-ui-15"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>  
                                                            @endforeach
                                                            
                                                        @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                            {{-- <div class="controls-below-table">
                                                <div class="table-records-info">Showing records 1 - 5</div>
                                                <div class="table-records-pages">
                                                    <ul>
                                                        <li>
                                                            <a href="#">Previous</a>
                                                        </li>
                                                        <li>
                                                            <a class="current" href="#">1</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">2</a>
                                                        </li>
                                                        <li><a href="#">3</a></li>
                                                        <li><a href="#">4</a></li>
                                                        <li><a href="#">Next</a></li>
                                                    </ul>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- customizers start --}}
                            @include('includes.admincustomizers')
                            {{-- customizers end --}}
                        </div>
                        <div class="content-panel">
                            <div class="content-panel-close">
                                <i class="os-icon os-icon-close"></i>
                            </div>
                            <div class="element-wrapper">
                                <h6 class="element-header">Quick Links</h6>
                                <div class="element-box-tp">
                                    <div class="el-buttons-list full-width">
                                        <a class="btn btn-white btn-sm" href="{{ route('admin.plan.create') }}">
                                            <i class="os-icon os-icon-delivery-box-2"></i>
                                            <span>Create New Plan</span>
                                        </a>
                                        {{-- <a class="btn btn-white btn-sm" href="#">
                                            <i class="os-icon os-icon-window-content"></i>
                                            <span>Customer Comments</span>
                                        </a>
                                        <a class="btn btn-white btn-sm" href="#">
                                            <i class="os-icon os-icon-wallet-loaded"></i>
                                            <span>Store Settings</span>
                                        </a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
            <div class="display-type"></div>
        </div>

        @include('includes.adminscripts')
        
    </body>
</html> 