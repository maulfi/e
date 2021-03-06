@extends('user/icbs_layout')

@section('script')
    
@stop

@section('content')
    <!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="#">Report</a></li>                    
        <li class="active">Overview</li>
    </ul>
    <!-- END BREADCRUMB -->                       
    
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
        
        <!-- START WIDGETS -->                    
        <div class="row">
            <div class="col-md-3">
                
                <!-- START WIDGET SLIDER -->
                <div class="widget widget-default widget-carousel">
                    <div class="owl-carousel" id="owl-example">
                        <div>                                    
                            <div class="widget-title">Total Transaction</div>                                                                        
                            <div class="widget-subtitle">27/08/2016</div>
                            <div class="widget-int">248</div>
                        </div>
                        <div>                                    
                            <div class="widget-title">Pulsa</div>
                            <div class="widget-subtitle">Transactions</div>
                            <div class="widget-int">227</div>
                        </div>
                        <div>                                    
                            <div class="widget-title">Aksesoris</div>
                            <div class="widget-subtitle">Transactions</div>
                            <div class="widget-int">19</div>
                        </div>
                        <div>                                    
                            <div class="widget-title">Handphone</div>
                            <div class="widget-subtitle">Transactions</div>
                            <div class="widget-int">2</div>
                        </div>
                    </div>                            
                    <div class="widget-controls">                                
                        <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                    </div>                             
                </div>         
                <!-- END WIDGET SLIDER -->
                
            </div>
            <div class="col-md-3">
                
                <!-- START WIDGET MESSAGES -->
                <div class="widget widget-default widget-item-icon" onclick="location.href='pages-messages.html';">
                    <div class="widget-item-left">
                        <span class="fa fa-envelope"></span>
                    </div>                             
                    <div class="widget-data">
                        <div class="widget-int num-count">3</div>
                        <div class="widget-title">New messages</div>
                        <div class="widget-subtitle">In your mailbox</div>
                    </div>      
                    <div class="widget-controls">                                
                        <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                    </div>
                </div>                            
                <!-- END WIDGET MESSAGES -->
                
            </div>
            <div class="col-md-3">
                
                <!-- START WIDGET REGISTRED -->
                <div class="widget widget-default widget-item-icon" onclick="location.href='pages-address-book.html';">
                    <div class="widget-item-left">
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="widget-data">
                        <div class="widget-title">Not Served Transaction</div>                      
                        <div class="widget-subtitle">27/08/2016</div>
                        <div class="widget-int">5</div>
                    </div>
                    <div class="widget-controls">                                
                        <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                    </div>                            
                </div>                            
                <!-- END WIDGET REGISTRED -->
                
            </div>
            <div class="col-md-3">
                
                <!-- START WIDGET CLOCK -->
                <div class="widget widget-info widget-padding-sm">
                    <div class="widget-big-int plugin-clock">00:00</div>                            
                    <div class="widget-subtitle plugin-date">Loading...</div>
                    <div class="widget-controls">                                
                        <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                    </div>                            
                    <div class="widget-buttons widget-c3">
                        <div class="col">
                            <a href="#"><span class="fa fa-clock-o"></span></a>
                        </div>
                        <div class="col">
                            <a href="#"><span class="fa fa-bell"></span></a>
                        </div>
                        <div class="col">
                            <a href="#"><span class="fa fa-calendar"></span></a>
                        </div>
                    </div>                            
                </div>                        
                <!-- END WIDGET CLOCK -->
                
            </div>
        </div>
        <!-- END WIDGETS -->                    
        
        <div class="row">
            <div class="col-md-4">
                
                <!-- START USERS ACTIVITY BLOCK -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title-box">
                            <h3>Data Penjualan</h3>
                            <span>Pulsa vs Aksesoris vs Handphone</span>
                        </div>                                    
                        <ul class="panel-controls" style="margin-top: 2px;">
                            <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                            <!-- <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li> -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>                                        
                                <ul class="dropdown-menu">
                                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                                </ul>                                        
                            </li>                                        
                        </ul>                                    
                    </div>                                
                    <div class="panel-body padding-0">
                        <div class="chart-holder" id="dashboard-bar-1" style="height: 200px;"></div>
                    </div>                                    
                </div>
                <!-- END USERS ACTIVITY BLOCK -->
                
            </div>
            <div class="col-md-4">
                
                <!-- START VISITORS BLOCK -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title-box">
                            <h3>Data Penjualan</h3>
                            <span>Data Penjualan (last month)</span>
                        </div>
                        <ul class="panel-controls" style="margin-top: 2px;">
                            <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                            <!-- <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li> -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>                                        
                                <ul class="dropdown-menu">
                                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                                </ul>                                        
                            </li>                                        
                        </ul>
                    </div>
                    <div class="panel-body padding-0">
                        <div class="chart-holder" id="dashboard-donut-1" style="height: 200px;"></div>
                    </div>
                </div>
                <!-- END VISITORS BLOCK -->
                
            </div>

            <div class="col-md-4">
                
                <!-- START PROJECTS BLOCK -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title-box">
                            <h3>Data Penjualan</h3>
                            <span>Data Penjualan (last month)</span>
                        </div>
                        <ul class="panel-controls" style="margin-top: 2px;">
                            <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                            <!-- <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li> -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>                                        
                                <ul class="dropdown-menu">
                                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                                </ul>                                        
                            </li>                                        
                        </ul>
                    </div>
                    <div class="panel-body padding-0">
                        <div class="chart-holder" id="dashboard-line-1" style="height: 200px;"></div>
                    </div>
                </div>
                <!-- END PROJECTS BLOCK -->
                
            </div>
        </div>

        <div class="row">
            <div class="col-md-4" style="width:100%">
                
                <!-- START USERS ACTIVITY BLOCK -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title-box">
                            <h3>Data Penjualan</h3>
                            <span>Pulsa vs Aksesoris vs Handphone</span>
                        </div>                                    
                        <ul class="panel-controls" style="margin-top: 2px;">
                            <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                            <!-- <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li> -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>                                        
                                <ul class="dropdown-menu">
                                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                                </ul>                                        
                            </li>                                        
                        </ul>                                    
                    </div>                                
                    <div class="panel-body padding-0">
                        <div class="chart-holder" id="dashboard-line-2" style="height: 400px;"></div>
                    </div>                                    
                </div>
                <!-- END USERS ACTIVITY BLOCK -->
                
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT WRAPPER -->
@stop