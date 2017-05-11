@extends('user/icbs_layout')

@section('script')
    
@stop

@section('content')
        <!-- START BREADCRUMB -->
        <ul class="breadcrumb">
            <li><a href="#">Data Barang</a></li>
            <li class="active">Barang</li>
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
                                <li><a href="{{url('barang/add-barang')}}" class=""><span class="fa fa-plus"></span></a></li>
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
                                        <th>Deskripsi</th>
                                        <th>Stock</th>
                                        <th>Multi Stock</th>
                                        <th>Chip Stock</th>
                                        <th>Price</th>
                                        <th>Base Price</th>
                                        <th>Last Update</th>
                                        <th>Admin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if($barang)
                                    @foreach($barang as $b)
                                        <tr>
                                            <td>{{ date("Y/m/d H:i:s",strtotime($b->created_at)); }}</td>
                                            <td>{{ $b->jenis_barang }}</td>
                                            <td>{{ $b->nama_barang }}</td>
                                            <td>{{ $b->description }}</td>
                                            <td>
                                                @if ($b->jenis_barang == 'Pulsa')
                                                    -
                                                @else
                                                    {{ $b->stock }}
                                                @endif
                                            </td>
                                            <td>{{ $b->multi_stock }}</td>
                                            <td>{{ $b->chip_stock }}</td>
                                            <td>{{ $b->price }}</td>
                                            <td>{{ $b->baseprice }}</td>
                                            <td>{{ date("Y/m/d H:i:s",strtotime($b->updated_at)); }}</td>
                                            <td>{{ $b->fullname }}</td>
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