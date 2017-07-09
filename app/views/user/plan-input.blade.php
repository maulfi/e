@extends('user/icbs_layout')

@section('script')
    <script>
        
    </script>
@stop

@section('content')
<ul class="breadcrumb">
    <li><a href="#">Report</a></li>
    <li class="#">Plan</li>
    <li class="active">Input Plan</li>
</ul>
<!-- END BREADCRUMB -->                       

<!-- PAGE CONTENT WRAPPER -->
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">
            
            {{ Form::open(array('url' => 'report/add-plan', 'class' => 'form-horizontal')) }}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Insert Plan</strong>  </h3>
                </div>
                <div class="panel-body">                                                                        
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Plan Title</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" name="plan_title" @if(isset($filled['plan_title'])) value="{{ $filled['plan_title']}}"@endif class="form-control"/>
                            </div>                                            
                            <span class="help-block">Plan Title</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Profit</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="number" name="profit" @if(isset($filled['profit'])) value="{{ $filled['profit']}}"@endif class="form-control"/>
                            </div>                                            
                            <span class="help-block">Profit</span>
                        </div>
                    </div>
                    <div class="form-group">                                        
                        <label class="col-md-3 col-xs-12 control-label">Start Plan</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                <input type="text" name="start" @if(isset($filled['start'])) value="{{ $filled['start']}}"@endif class="form-control datepicker">                                            
                            </div>
                            <span class="help-block">Pilih Tanggal</span>
                        </div>
                    </div>
                    <div class="form-group">                                        
                        <label class="col-md-3 col-xs-12 control-label">End Plan</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                <input type="text" name="end" @if(isset($filled['end'])) value="{{ $filled['end']}}"@endif class="form-control datepicker">                                            
                            </div>
                            <span class="help-block">Pilih Tanggal</span>
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