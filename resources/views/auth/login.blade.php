@extends('layouts.dashboard')



@section('content')



    <section id="wrapper" class="login-register login-sidebar"  style="background-image:url(/assets/images/background/login-register{{ rand(1,5)}}.jpg);">
            

            <div class="login-box card">
                <div class="card-block">
                    <form class="form-horizontal form-material" id="loginform" action="{{ route('login') }}" method="POST">
                    @csrf

                    <a href="javascript:void(0)" class="text-center db"><img src="/assets/images/logo-icon.png" alt="Home" /><br/><img src="/assets/images/logo-text.png" alt="Home" /></a>  
                    
                    <div class="form-group m-t-40">
                        <div class="col-xs-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                        <div class="checkbox checkbox-primary pull-left p-t-0">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup"> Recordarme </label>
                        </div>
                        <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Olvidé Contraseña?</a> </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                                <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
    
                                
                        </div>
                    </div>
                  
                   <!-- <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                        <p>Registrar nuevo Usuario <a href="{{ route('register') }}" class="text-primary m-l-5"><b>IR</b></a></p>
                        </div>
                    </div> -->
                    </form>
                    
                    <form class="form-horizontal" id="recoverform" action="">
                    <div class="form-group ">
                        <div class="col-xs-12">
                        <h3>Recuperación de contraseña</h3>
                        <p class="text-muted">Ingresa tu E-mail y se te enviaran instrcciones! </p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="E-mail">
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                        <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Enviar</button>
                        </div>
                    </div>
                    </form>

                    
                </div>
            </div>
        
    </section>


@endsection
