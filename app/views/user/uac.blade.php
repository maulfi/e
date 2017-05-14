@extends('user/icbs_layout')

@section('script')
<script>
    function changeRole(role){
       window.location.assign("{{url('user/user-access-control')}}/"+role);
    }
</script>
    
@stop

@section('content')
        <!-- START BREADCRUMB -->
        <ul class="breadcrumb">
            <li><a href="#">User Management</a></li>
            <li class="active">User Access Control</li>
        </ul>
        <!-- END BREADCRUMB -->                       
        
        <!-- PAGE CONTENT WRAPPER -->
        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">
        
            <div class="row">
                <div class="col-md-12">

                    <!-- START SIMPLE DATATABLE -->
                    {{ Form::open(array('url' => 'user/user-access-control/'.$selectedrole, 'class' => 'form-horizontal', 'files'=> true)) }}
                    <div class="panel panel-default">
                        <div class="panel-heading">                                
                            <h3 class="panel-title">User Access Control</h3>   
                            <ul class="panel-controls">
                                <li><button class=""><span class="fa fa-save"></span></button></li>
                            </ul>                                
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Module</th>
                                        <th>#</th>
                                        <th>Module</th>
                                        <th>#</th>
                                        <th>Module</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no = 0; ?>
                                @foreach($uac as $u)
                                    <?php
                                        $no++;
                                        if($no == 1)
                                        {
                                            echo "<tr>";
                                        }
                                    ?>
                                        <td><input type="checkbox" class="" @if ($u->status=='Active') checked @endif id="id-checkbox-{{ $u->module_id }}" name="role_id[]" value="{{ $u->module_id }}"></td>
                                        <td><label for="id-checkbox-{{ $u->module_id }}">{{ $u->module_name }}</label></td>
                                    <?php
                                        if($no == 3)
                                        {
                                            echo "</tr>";
                                            $no = 0;
                                        }
                                    ?>
                                @endforeach
                                    <tr>
                                        <td colspan="6">
                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">#</label>
                                                <div class="col-md-6 col-xs-12">
                                                    <select class="form-control" onchange="changeRole(this.value)">
                                                        <option>Pilih Role</option>
                                                    @if($role)
                                                        @foreach($role as $r)
                                                            <option @if($r->role==$selectedrole) selected @endif value="{{$r->role}}">{{$r->role}}</option>
                                                        @endforeach
                                                    @endif
                                                    </select>
                                                    <span class="help-block">Pilih Role</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                        </div>
                    </div>
                    <!-- END SIMPLE DATATABLE -->
                </div>
            </div>                                
            
        </div>
        <!-- PAGE CONTENT WRAPPER -->
        <!-- END PAGE CONTENT WRAPPER -->
@stop