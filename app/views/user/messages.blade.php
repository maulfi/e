@extends('user/icbs_layout')

@section('script')
    
@stop

@section('content')
    <!-- START BREADCRUMB -->
    <ul class="breadcrumb push-down-0">
        <li><a href="#">User</a></li>
        <li class="active"><a href="#">Messages</a></li>
    </ul>
    <!-- END BREADCRUMB -->                
                    
    <!-- START CONTENT FRAME -->
    <div class="content-frame">
        <!-- START CONTENT FRAME TOP -->
        <div class="content-frame-top">
            <div class="page-title">                    
                <h2><span class="fa fa-comments"></span> Messages</h2>
            </div>                                                    
            <div class="pull-right">                            
                <button class="btn btn-danger"><span class="fa fa-book"></span> Contacts</button>
                <button class="btn btn-default content-frame-right-toggle"><span class="fa fa-bars"></span></button>
            </div>                           
        </div>
        <!-- END CONTENT FRAME TOP -->
        
        <!-- START CONTENT FRAME RIGHT -->
        <div class="content-frame-right">
            
            <div class="list-group list-group-contacts border-bottom push-down-10">
                <a href="#" class="list-group-item">                                 
                    <div class="list-group-status status-online"></div>
                    <img src="assets/images/users/debaygul.jpg" class="pull-left" alt="Mutia Handayani">
                    <span class="contacts-title">Mutia Handayani</span>
                    <p>Hello my friend, how are...</p>
                </a>                                
                <a href="#" class="list-group-item">                                    
                    <div class="list-group-status status-online"></div>
                    <img src="assets/images/users/debaybat.jpg" class="pull-left" alt="Maulfi Najir A">
                    <span class="contacts-title">Maulfi Najir A</span>
                    <p>Wanna se my photos?</p>
                </a>                                                                
                <a href="#" class="list-group-item active">         
                    <div class="list-group-status status-online"></div>
                    <img src="assets/images/users/avatar.jpg" class="pull-left" alt="John Doe">
                    <div class="contacts-title">John Doe <span class="label label-danger">5</span></div>
                    <p>This project is awesome</p>                                       
                </a>
                                        
            </div>
            
            <div class="block">
                <h4>Status</h4>
                <div class="list-group list-group-simple">                                
                    <a href="#" class="list-group-item"><span class="fa fa-circle text-success"></span> Online</a>
                    <a href="#" class="list-group-item"><span class="fa fa-circle text-warning"></span> Away</a>
                    <a href="#" class="list-group-item"><span class="fa fa-circle text-muted"></span> Offline</a>                                
                </div>
            </div>
            
        </div>
        <!-- END CONTENT FRAME RIGHT -->
    
        <!-- START CONTENT FRAME BODY -->
        <div class="content-frame-body content-frame-body-left">
            
            <div class="messages messages-img">
                <div class="item in">
                    <div class="image">
                        <img src="assets/images/users/avatar.jpg" alt="John Doe">
                    </div>
                    <div class="text">
                        <div class="heading">
                            <a href="#">John Doe</a>
                            <span class="date">08:33</span>
                        </div>
                        Hi, Gimana kabar nya penjualan hari ini?
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="assets/images/users/debaygul.jpg" alt="Mutia Handayani">
                    </div>                                
                    <div class="text">
                        <div class="heading">
                            <a href="#">Mutia Handayani</a>
                            <span class="date">08:39</span>
                        </div>                                    
                        Alhamdulillah Bagus Pak, Lebih Rame dari biasanya.
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="assets/images/users/debaygul.jpg" alt="Mutia Handayani">
                    </div>                                
                    <div class="text">
                        <div class="heading">
                            <a href="#">Mutia Handayani</a>
                            <span class="date">08:42</span>
                        </div>                                    
                        Saldo Pulsa Multi sudah hampir abis pak.
                    </div>
                </div>
                <div class="item in">
                    <div class="image">
                        <img src="assets/images/users/avatar.jpg" alt="John Doe">
                    </div>
                    <div class="text">
                        <div class="heading">
                            <a href="#">John Doe</a>
                            <span class="date">08:58</span>
                        </div>
                        Saya isi sekarang
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="assets/images/users/debaygul.jpg" alt="Mutia Handayani">
                    </div>                                
                    <div class="text">
                        <div class="heading">
                            <a href="#">Mutia Handayani</a>
                            <span class="date">09:11</span>
                        </div>                                    
                        Terimakasih Pak.
                    </div>
                </div>
                <div class="item in">
                    <div class="image">
                        <img src="assets/images/users/avatar.jpg" alt="John Doe">
                    </div>
                    <div class="text">
                        <div class="heading">
                            <a href="#">John Doe</a>
                            <span class="date">09:22</span>
                        </div>
                        OK
                    </div>
                </div>
            </div>                        
            
            <div class="panel panel-default push-up-10">
                <div class="panel-body panel-body-search">
                    <div class="input-group">
                        <!-- <div class="input-group-btn">
                            <button class="btn btn-default"><span class="fa fa-camera"></span></button>
                            <button class="btn btn-default"><span class="fa fa-chain"></span></button>
                        </div> -->
                        <input type="text" class="form-control" placeholder="Your message..."/>
                        <div class="input-group-btn">
                            <button class="btn btn-default">Send</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- END CONTENT FRAME BODY -->      
    </div>
    <!-- END PAGE CONTENT FRAME -->
@stop