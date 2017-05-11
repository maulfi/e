@extends('user/icbs_layout')

@section('script')
    
@stop

@section('content')
        <!-- START BREADCRUMB -->
        <ul class="breadcrumb">
            <li><a href="#">Report</a></li>                    
            <li class="#">Plan</li>
            <li class="active">What To Do</li>
        </ul>
        <!-- END BREADCRUMB -->                       
        
        <!-- PAGE CONTENT WRAPPER -->
        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">        
            <div class="row">
                <div class="col-md-12">

                    <!-- START DEFAULT DATATABLE -->
                    <div class="panel panel-default">
                        <div class="panel-heading">                                
                            <h3 class="panel-title">Monthly Plan : Agustus</h3>
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
                                        <th>Create Date</th>
                                        <th>What to Do</th>
                                        <th>Priority</th>
                                        <th>Methode</th>
                                        <th>Feedback</th>
                                        <td>Last Update</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2016/08/01</td>
                                        <td>Jual Lebih Banyak Aksesoris dan Handphone.</td>
                                        <td>9</td>
                                        <td>Promotion</td>
                                        <td>Achieve</td>
                                        <td>2016/08/21</td>
                                    </tr>
                                    <tr>
                                        <td>2016/08/01</td>
                                        <td>Jual Barang yang sering di request.</td>
                                        <td>7</td>
                                        <td>Prepared</td>
                                        <td>Achieve</td>
                                        <td>2016/08/29</td>
                                    </tr>
                                    <tr>
                                        <td>2016/08/02</td>
                                        <td>Naikan Harga Jual Pulsa Elektrik.</td>
                                        <td>6</td>
                                        <td>Profit Oriented</td>
                                        <td>Not</td>
                                        <td>2016/08/31</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END DEFAULT DATATABLE -->

                </div>
            </div>                                
            
        </div>
        <!-- PAGE CONTENT WRAPPER -->
        <!-- END PAGE CONTENT WRAPPER -->
@stop