<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>{{ $title }}|Indonesia Cell Business Solutions</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('assets/css/theme-default.css') }}"/><!-- css/theme-default.css -->
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="{{url('')}}">ICBS 2017</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="{{ asset('assets/images/users/avatar.jpg') }}" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="{{ asset('assets/images/users/avatar.jpg') }}" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">John Doe</div>
                                <div class="profile-data-title">Owner</div>
                            </div>
                            <div class="profile-controls">
                                <a href="#" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="{{url('message')}}" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
                    <?php 
                        $sub_parent_id = 0; 
                        $sub_child = 0; 
                        $numItems = count($menu);
                        $t = 0;
                    ?>

                    @if ($menu)
                        @foreach ($menu as $m)
                            <?php $t++; ?>
                            @if ($m->parent_id == 0)
                                <li class="xn-title">{{$m->module_name}}</li>
                            @else
                                @if($sub_parent_id!=$m->parent_id)
                                    @if($sub_child)
                                                </li>
                                            </ul>
                                    @endif
                                <li class=" @if($m->is_have_child) xn-openable @endif @if($active_page=='overview') active @endif">                                        
                                        <?php $sub_parent_id = 0; ?>
                                        <?php $sub_child = 0; ?>
                                        <a href="@if($m->is_have_child) javascript:void(0) <?php $sub_parent_id = $m->module_id; ?> @else {{ url($m->module_controllers.'/'.strtolower(str_replace(' ','-',$m->module_name))) }} @endif"><span class="fa {{$m->icon}}"></span> @if($m->is_have_child)<span class="xn-text">@endif {{$m->module_name}}@if($m->is_have_child)</span>@endif</a>                                    
                                    @if(!$m->is_have_child)
                                    </li>
                                    @endif    
                                @else
                                    @if($sub_child==0)
                                        <ul>
                                            <li class="@if($active_page=='served') active @endif">
                                    @endif
                                    <?php $sub_child++; ?>
                                    <a href="{{ url($m->module_controllers.'/'.strtolower(str_replace(' ','-',$m->module_name))) }}"><span class="fa {{$m->icon}}"></span> <span class="xn-text">{{$m->module_name}}</span></a>
                                    @if($t==$numItems)
                                            </li>
                                        </ul>
                                    @endif
                                @endif
                            @endif
                        @endforeach
                    @endif
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-comments"></span></a>
                        <div class="informer informer-danger">4</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>                                
                                <div class="pull-right">
                                    <span class="label label-danger">4 new</span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-online"></div>
                                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>
                                    <span class="contacts-title">John Doe</span>
                                    <p>Praesent placerat tellus id augue condimentum</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
                                    <span class="contacts-title">Dmitry Ivaniuk</span>
                                    <p>Donec risus sapien, sagittis et magna quis</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>
                                    <span class="contacts-title">Nadia Ali</span>
                                    <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader"/>
                                    <span class="contacts-title">Darth Vader</span>
                                    <p>I want my money back!</p>
                                </a>
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="{{ url('message') }}">Show all messages</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->  
                @yield('content')
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="{{ url('login/logout') }}" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="{{ asset('assets/js/plugins/jquery/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/plugins/jquery/jquery-ui.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/plugins/bootstrap/bootstrap.min.js') }}"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src="{{ asset('assets/js/plugins/icheck/icheck.min.js') }}"></script>        
        <script type="text/javascript" src="{{ asset('assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/plugins/scrolltotop/scrolltopcontrol.js') }}"></script>
        
        <script type="text/javascript" src="{{ asset('assets/js/plugins/morris/raphael-min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/plugins/morris/morris.min.js') }}"></script>       
        <script type="text/javascript" src="{{ asset('assets/js/plugins/rickshaw/d3.v3.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/plugins/rickshaw/rickshaw.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>                
        <script type='text/javascript' src="{{ asset('assets/js/plugins/bootstrap/bootstrap-datepicker.js') }}"></script>                
        <script type="text/javascript" src="{{ asset('assets/js/plugins/owl/owl.carousel.min.js') }}"></script>                 
        
        <script type="text/javascript" src="{{ asset('assets/js/plugins/moment.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/plugins/daterangepicker/daterangepicker.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <!--<script type="text/javascript" src="{{ asset('assets/js/settings.js') }}"></script>-->
        
        <script type="text/javascript" src="{{ asset('assets/js/plugins.js') }}"></script>        
        <script type="text/javascript" src="{{ asset('assets/js/actions.js') }}"></script>
        
        <script type="text/javascript" src="{{ asset('assets/js/demo_dashboard.js') }}"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
        @yield('script')
    </body>
</html>