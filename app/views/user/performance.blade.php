@extends('user/icbs_layout')

@section('script')
    
@stop

@section('content')

        <!-- START BREADCRUMB -->
        <ul class="breadcrumb">
            <li><a href="#">Report</a></li>                    
            <li class="active">Performance</li>
        </ul>
        <!-- END BREADCRUMB -->                       
        
        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">
            
            <div class="row">
                <div class="col-md-6" style="width: 100%;">

                    <!-- START LINE CHART -->
                    <div class="panel panel-default"  >
                        <div class="panel-heading">
                            <h3 class="panel-title">Line Chart</h3>                                
                        </div>
                        <div class="panel-body">
                            <div id="morris-line-example" style="height: 300px; width:100%;"></div>
                        </div>
                    </div>
                    <!-- END LINE CHART -->

                </div>
                
            </div>

            <div class="row">
                <div class="col-md-12">

                    <!-- START DEFAULT DATATABLE -->
                    <div class="panel panel-default">
                        <div class="panel-heading">                                
                            <h3 class="panel-title">Data Transaksi</h3>
                            <ul class="panel-controls">
                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                            </ul>                                
                        </div>
                        <div class="panel-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>Year</th>
                                        <th>Jumlah Transaksi</th>
                                        <th>Omzet</th>
                                        <th>Profit (Bruto)</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2009</td>
                                        <td>11000</td>
                                        <td>100.310.000</td>
                                        <td>-</td>                                                
                                    </tr>
                                    <tr>
                                        <td>2010</td>
                                        <td>13500</td>
                                        <td>125.012.000</td>
                                        <td>-</td>                                                
                                    </tr>
                                    <tr>
                                        <td>2011</td>
                                        <td>17000</td>
                                        <td>155.019.000</td>
                                        <td>-</td>                                                
                                    </tr>
                                    <tr>
                                        <td>2012</td>
                                        <td>21000</td>
                                        <td>171.100.000</td>
                                        <td>-</td>                                                
                                    </tr>

                                    <tr>
                                        <td>2013</td>
                                        <td>31000</td>
                                        <td>189.000.000</td>
                                        <td>-</td>                                                
                                    </tr>

                                    <tr>
                                        <td>2014</td>
                                        <td>32300</td>
                                        <td>191.000.900</td>
                                        <td>-</td>                                                
                                    </tr>

                                    <tr>
                                        <td>2015</td>
                                        <td>31000</td>
                                        <td>192.000.100</td>
                                        <td>-</td>                                                
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END DEFAULT DATATABLE -->

                </div>
            </div>     
            
        </div>
        <!-- END PAGE CONTENT WRAPPER -->
@stop