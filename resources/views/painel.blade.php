<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Painel de Controle - @yield('title')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{asset('css/AdminLTE.css')}}" rel="stylesheet" type="text/css" />
    
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/datatables/dataTables.bootstrap.min.js')}}" type="text/javascript"></script>

    <!-- InputMask -->
    <script src="{{asset('plugins/input-mask/jquery.inputmask.js')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/input-mask/jquery.inputmask.date.extensions.js')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/input-mask/jquery.inputmask.extensions.js')}}" type="text/javascript"></script>

    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>
    <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>



</head>
<body>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="">Qualidade Agricola</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
                <li>
                    <a href="{{asset('admin/home')}}">
                        <i class="fa fa-th"></i><span>Usuarios</span>
                    </a>
                </li>
                <li>
                    <a href="{{asset('admin/colheita')}}">
                        <i class="fa fa-th"></i><span>Colheita</span>
                    </a>
                </li>
                <li>
                    <a href="{{asset('admin/plantio')}}">
                        <i class="fa fa-th"></i><span>Plantio</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-th"></i><span>Tratos Culturais</span>
                    </a>
                </li>
                <li>
                    <a href="{{asset('admin/km')}}">
                        <i class="fa fa-th"></i><span>Controle de Km</span>
                    </a>
                </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  <div class="page">
    <div class="container">
        @yield('content')
    </div>   
  </div>
<!-- jQuery UI 1.11.2 -->
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>


</body>
</html>