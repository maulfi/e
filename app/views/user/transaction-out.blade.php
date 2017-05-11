@extends('user/icbs_layout')

@section('script')
    
@stop

@section('content')
        <!-- START BREADCRUMB -->
        <ul class="breadcrumb">
            <li><a href="#">Transaction</a></li>                    
            <li class="active">Transaction Out</li>                    
        </ul>
        <!-- END BREADCRUMB -->                       
        
        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">
                    <!-- START DEFAULT DATATABLE -->
                    <div class="panel panel-default">
                        <div class="panel-heading">                                
                            <h3 class="panel-title">Data Transaksi OUT</h3>
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
                                        <th>Date</th>
                                        <th>Jenis Pengerluaran</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Total</th>
                                        <th>Admin</th>                                                
                                    </tr>
                                </thead>
                                <tbody>
                                @if($out)
                                    @foreach($out as $o)
                                    <tr>
                                        <td>{{ $o->date }}</td>
                                        <td>{{ $o->jenis_pengeluaran }}</td>
                                        <td>{{ $o->title }}</td>
                                        <td>{{ $o->description }}</td>
                                        <td>{{ $o->total }}</td>
                                        <td>{{ $o->fullname }}</td>
                                    </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END DEFAULT DATATABLE -->

                </div>
            </div>            
        </div>
        <!-- PAGE CONTENT WRAPPER -->
@stop