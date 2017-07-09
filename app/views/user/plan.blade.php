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
                                <li><a href="{{url('report/add-plan')}}" class=""><span class="fa fa-plus"></span></a></li>
                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                            </ul>                                
                        </div>
                        <div class="panel-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>What to Do</th>
                                        <th>Profit</th>
                                        <th>Start</th>
                                        <th>End</th>
                                    </tr>
                                </thead>
                                <tbody>
                            @if($plan)
                                @foreach($plan as $s)
                                <tr>
                                    <td>{{ $s->id }}</td>
                                    <td>{{ $s->plan_title }}</td>
                                    <td>{{ $s->profit }}</td>
                                    <td>{{ $s->start }}</td>
                                    <td>{{ $s->end }}</td>
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