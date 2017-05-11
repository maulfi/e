@extends('user/icbs_layout')

@section('script')
    <script>
        
    </script>
@stop

@section('content')
    <!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="#">Data Barang</a></li>
        <li class="active">Input Barang</li>
    </ul>
    <!-- END BREADCRUMB -->                       
    
    <!-- PAGE CONTENT WRAPPER -->  
    
    <div class="page-content-wrap">
    
        <div class="row">
            <div class="col-md-12">                
                {{ Form::open(array('url' => 'barang/add-barang', 'class' => 'form-horizontal')) }}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Insert Barang</strong></h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>
                    </div>
                    <div class="panel-body">                        
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Jenis Barang</label>
                            <div class="col-md-6 col-xs-12">
                                <select name="jenis_barang" class="form-control select">
                                    <option>Pulsa</option>
                                    <option>Aksesoris</option>
                                    <option>Handphone</option>
                                </select>
                                <span class="help-block">
                                    @if(isset($error))
                                        @if($error->has('jenis_barang'))
                                            @foreach ($error->get('jenis_barang') as $e_jenis_barang)
                                                {{$e_jenis_barang}}
                                            @endforeach
                                        @endif
                                    @endif
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Nama Barang</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input type="text" name="nama_barang" class="form-control" @if(isset($filled['nama_barang'])) value="{{ $filled['nama_barang']}}"@endif />
                                </div>
                                <span class="help-block">
                                @if(isset($error))
                                    @if($error->has('nama_barang'))
                                        @foreach ($error->get('nama_barang') as $e_nama_barang)
                                            {{$e_nama_barang}}
                                        @endforeach
                                    @endif
                                @endif
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Operator</label>
                            <div class="col-md-6 col-xs-12">
                                <select name="operator" class="form-control select">
                                    <option>-</option>
                                    <option>IM3</option>
                                    <option>Mentari</option>
                                    <option>XL</option>
                                    <option>Axis</option>
                                    <option>Simpati</option>
                                    <option>AS</option>
                                </select>
                                <span class="help-block">
                                @if(isset($error))
                                    @if($error->has('operator'))
                                        @foreach ($error->get('operator') as $e_operator)
                                            {{$e_operator}}
                                        @endforeach
                                    @endif
                                @endif
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Description</label>
                            <div class="col-md-6 col-xs-12">
                                <textarea name="description" class="form-control" rows="5">@if(isset($filled['description'])){{$filled[ 'description']}}@endif</textarea>
                                <span class="help-block">
                                    @if(isset($error))
                                        @if($error->has('description'))
                                            @foreach ($error->get('description') as $e_description)
                                                {{$e_description}}
                                            @endforeach
                                        @endif
                                    @endif
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Nominal</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input type="text" name="nominal" class="form-control" @if(isset($filled['nominal'])) value="{{$filled['nominal']}}" @endif />
                                </div>
                                <span class="help-block">
                                    @if(isset($error))
                                        @if($error->has('nominal'))
                                            @foreach ($error->get('nominal') as $e_nominal)
                                                {{$e_nominal}}
                                            @endforeach
                                        @endif
                                    @endif
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Price</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input type="text" name="price" class="form-control" @if(isset($filled['price'])) value="{{$filled['price']}}" @endif />
                                </div>
                                <span class="help-block">
                                    @if(isset($error))
                                        @if($error->has('price'))
                                            @foreach ($error->get('price') as $e_price)
                                                {{$e_price}}
                                            @endforeach
                                        @endif
                                    @endif
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Base Price</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input type="text" name="base_price" class="form-control" @if(isset($filled['base_price'])) value="{{$filled['base_price']}}" @endif />
                                </div>
                                <span class="help-block">
                                    @if(isset($error))
                                        @if($error->has('base_price'))
                                            @foreach ($error->get('base_price') as $e_base_price)
                                                {{$e_base_price}}
                                            @endforeach
                                        @endif
                                    @endif
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Stock</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input type="text" name="stock" class="form-control" @if(isset($filled['stock'])) value="{{$filled['stock']}}" @endif />
                                </div>
                                <span class="help-block">
                                    @if(isset($error))
                                        @if($error->has('stock'))
                                            @foreach ($error->get('stock') as $e_stock)
                                                {{$e_stock}}
                                            @endforeach
                                        @endif
                                    @endif
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Multi Stock</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input name="multi_stock" type="text" class="form-control" @if(isset($filled['multi_stock'])) value="{{$filled['multi_stock']}}" @endif />
                                </div>
                                <span class="help-block">
                                    @if(isset($error))
                                        @if($error->has('multi_stock'))
                                            @foreach ($error->get('multi_stock') as $e_multi_stock)
                                                {{$e_multi_stock}}
                                            @endforeach
                                        @endif
                                    @endif
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Chip Stock</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                    <input type="text" name="chip_stock" class="form-control" @if(isset($filled['chip_stock'])) value="{{$filled['chip_stock']}}" @endif />
                                </div>
                                <span class="help-block">
                                    @if(isset($error))
                                        @if($error->has('chip_stock'))
                                            @foreach ($error->get('chip_stock') as $e_chip_stock)
                                                {{$e_chip_stock}}
                                            @endforeach
                                        @endif
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-primary pull-right">Submit</button>
                    </div>
                </div>
                {{ Form::close() }}                
            </div>
        </div>                    
    </div>
    <!-- PAGE CONTENT WRAPPER -->
@stop