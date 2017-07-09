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
    <li class="active">Served Transaction</li>
</ul>
<!-- END BREADCRUMB -->                       

<!-- PAGE CONTENT WRAPPER -->
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">
            
            {{ Form::open(array('url' => 'transaction/add-served-transaction', 'class' => 'form-horizontal')) }}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Insert Served Transaction</strong>  </h3>
                </div>
                <div class="panel-body">                                                                      
                   <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Jenis Barang</label>
                        <div class="col-md-6 col-xs-12">                                                                                            
                            <select class="form-control" name="jb">
                                <option>Pulsa</option>
                                <option>Aksesoris</option>
                                <option>Handphone</option>
                            </select>
                            <span class="help-block">Pilih Jenis Barang</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Nama Barang</label>
                        <div class="col-md-6 col-xs-12">                                                                                            
                            <select class="form-control" name="nb">
                                <option>IM3 10K</option>
                                <option>XL  10K</option>
                                <option>3  10K</option>
                                <option>Simpati  10K</option>
                                <option>Mentari  10K</option>
                                <option>As  10K</option>
                                <option>Axis  10K</option>
                            </select>
                            <span class="help-block">Pilih Barang</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">No Handphone</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" name="nohp" @if(isset($filled['nohp'])) value="{{ $filled['nohp']}}"@endif class="form-control"/>
                            </div>                                            
                            <span class="help-block">No Handphone</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Quantity</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" name="qty" @if(isset($filled['qty'])) value="{{ $filled['qty']}}"@endif class="form-control"/>
                            </div>                                            
                            <span class="help-block">Qty</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Status Transaction</label>
                        <div class="col-md-6 col-xs-12">                                                                                            
                            <select class="form-control" name="status">
                                <option>Paid</option>
                                <option>Unpaid</option>
                            </select>
                            <span class="help-block">Status Transaction</span>
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