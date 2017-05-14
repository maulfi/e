@extends('user/icbs_layout')

@section('title')
    User Admin|Indonesia Cell Business Solution
@stop

@section('script')
    
@stop

@section('content')
    <!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="#">Transaction</a></li>                    
        <li class="#">Transaction IN</li>
        <li class="active">Not Served Transaction</li>
    </ul>
    <!-- END BREADCRUMB -->
    
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">                                
                        <h3 class="panel-title">Data Transaksi</h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                            <li><a href="{{url('transaction/add-not-served-transaction')}}" class=""><span class="fa fa-plus"></span></a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>                                
                    </div>
                    <div class="panel-body">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Jenis Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Reason</th>
                                    <th>Jumlah Permintaan</th>
                                    <th>Admin</th>                                                
                                </tr>
                            </thead>
                            <tbody>
                            @if($notserved)
                                @foreach($notserved as $ns)
                                <tr>
                                    <td>{{ $ns->createdate }}</td>
                                    <td>{{ $ns->jenis_barang }}</td>
                                    <td>{{ $ns->nama_barang }}</td>
                                    <td>{{ $ns->reason }}</td>
                                    <td>{{ $ns->qty }}</td>
                                    <td>{{ $ns->fullname }}</td>
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