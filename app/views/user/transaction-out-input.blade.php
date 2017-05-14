@extends('user/icbs_layout')

@section('script')
    <script>
        
    </script>
@stop

@section('content')
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Transaction</a></li>
    <li class="active">Transaction Out</li>
</ul>
<!-- END BREADCRUMB -->                       

<!-- PAGE CONTENT WRAPPER -->
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">
            {{ Form::open(array('url' => 'transaction/add-transaction-out', 'class' => 'form-horizontal')) }}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Insert Transaction Out</strong>  </h3>
                    
                </div>
                <div class="panel-body">       
                    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Jenis Pengeluaran</label>
                        <div class="col-md-6 col-xs-12"> 
                            <select class="form-control" name="jp">
                                <option>Iuran</option>
                                <option>Makan</option>
                                <option>Other</option>
                            </select>
                            <span class="help-block">Pilih Jenis Pengeluaran</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Title</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" name="title" @if(isset($filled['title'])) value="{{ $filled['title']}}"@endif class="form-control"/>
                            </div>                                
                            <span class="help-block">Title</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Description</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <textarea class="form-control" name="desc" rows="5">@if(isset($filled['desc'])){{ $filled['desc']}}@endif</textarea>
                            <span class="help-block">Input Description here</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Total</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="number" name="total" @if(isset($filled['total'])) value="{{ $filled['total']}}"@endif class="form-control"/>
                            </div>                                            
                            <span class="help-block">Total</span>
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
<!-- END PAGE CONTENT WRAPPER -->                                
@stop