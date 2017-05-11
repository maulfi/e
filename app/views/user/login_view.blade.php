<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Indonesia Cell Business Solution</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('assets/css/theme-default.css') }}"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <?php //<div class="login-logo"></div> ?>
                <div class="login-body">
                    <div class="login-title"><strong>Log In</strong> to your account</div>
                    <!-- <form action="index.html" class="form-horizontal" method="post"> -->
                    {{ Form::open(array('url' => 'login/login-admin', 'class' => 'form-horizontal')) }}
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="email" name="email" id="email" class="form-control" placeholder="E-mail"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <?php //<a href="#" class="btn btn-link btn-block">Forgot your password?</a> ?>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-info btn-block">Log In</button>
                            </div>
                        </div>
                        <div class="form-controls">
                                <div class="form-group" style="color:red;">

                                    @if(isset($error))

                                        {{ $error }}

                                    @endif

                                </div>
                            </div>
                    {{ Form::close() }}
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2016 | Indonesia Cell Business Solution
                    </div>
                </div>
            </div>
            
        </div>
        
    </body>
</html>