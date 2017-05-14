@extends('user/icbs_layout')

@section('script')
    
@stop

@section('content') 
        <!-- START BREADCRUMB -->
        <ul class="breadcrumb">
            <li><a href="#">User Management</a></li>                    
            <li class="active">User Data</li>
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
                            <h3 class="panel-title">Data User Admin</h3>
                            <ul class="panel-controls">
                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                <li><a href="{{url('user/add-user')}}" class=""><span class="fa fa-plus"></span></a></li>
                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                            </ul>                                
                        </div>
                        <div class="panel-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Full Name</th>
                                        <th>Position</th>
                                        <th>Role</th>
                                        <th>Date</th>
                                        <th>Action</th>                                                 
                                    </tr>
                                </thead>
                                <tbody>
                                @if($admin)
                                    @foreach($admin as $a)
                                    <tr>
                                        <td>{{ $a->user_id }}</td>
                                        <td>{{ $a->user_name }}</td>
                                        <td>{{ $a->fullname }}</td>
                                        <td>{{ $a->position }}</td>
                                        <td>{{ $a->role }}</td>
                                        <td>{{ $a->insertdate }}</td>
                                        <td><a href="{{url('user/update-user')}}" class=""><span class="fa fa-edit"></span></a></td>
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
        <!-- END PAGE CONTENT WRAPPER -->
@stop