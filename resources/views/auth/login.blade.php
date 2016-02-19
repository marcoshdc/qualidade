<!DOCTYPE html>
<html>
  <head>
   <meta charset="UTF-8">
    <title>Acesso Restrito| Log in</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{asset('/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
   
   </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="{{asset('/')}}"><b>Qualidade Agrícola</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Área de acesso exclusivo</p>
          @if(Session::get('success'))
            <p class="retorno">{{Session::get('success')}}</p>
          @endif 
        <form action="{{asset('auth/login')}}" method="post">
          <div class="form-group has-feedback">
            <input type="email" name="email" id="email" class="form-control" placeholder="Email"/>
           
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password"/>
             
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Logar</button>
            </div><!-- /.col -->
          </div>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>

       
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="{{asset('/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{asset('/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    
  </body>
</html>