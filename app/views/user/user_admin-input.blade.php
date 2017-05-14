@extends('user/icbs_layout')

@section('script')
    <script>
        
    </script>
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
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
    
        <div class="row">
            <div class="col-md-12">
                
                {{ Form::open(array('url' => 'user/add-user', 'class' => 'form-horizontal', 'files'=> true)) }}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Insert Admin</strong>  </h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Position</label>
                            <div class="col-md-6 col-xs-12">                                            
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input type="text" name="position" @if(isset($filled['position'])) value="{{ $filled['position']}}"@endif class="form-control" placeholder="position"/>
                                </div>                                            
                                <span class="help-block">Position</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Email</label>
                            <div class="col-md-6   col-xs-12">                                            
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input type="email" name="username" @if(isset($filled['username'])) value="{{ $filled['username']}}"@endif class="form-control" placeholder="email"/>
                                </div>
                                <span class="help-block">Email</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Fullname</label>
                            <div class="col-md-6 col-xs-12">                                            
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input type="text" name="fullname" @if(isset($filled['fullname'])) value="{{ $filled['fullname']}}"@endif class="form-control" placeholder="fullname" />
                                </div>                                            
                                <span class="help-block">Fullname</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Password</label>
                            <div class="col-md-6 col-xs-12">         
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input type="password" name="password" class="form-control" placeholder="password" />
                                </div>
                                <span class="help-block">Password</span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Avatar</label>
                            <div class="col-md-6 col-xs-12">                                                                                                                                        
                                <input type="file" class="fileinput btn-primary" name="avatar" @if(isset($filled['avatar'])) value="{{ $filled['avatar']}}"@endif title="Browse Avatar"/>
                                <span class="help-block">Input Avatar</span>
                            </div>
                        </div>                                    
                    </div>
                    <div class="panel-footer">              
                        <button class="btn btn-primary pull-right">Submit</button>
                    </div>
                </div>
                </form>
                
            </div>
        </div>                    
    </div>
    <!-- PAGE CONTENT WRAPPER -->
@stop