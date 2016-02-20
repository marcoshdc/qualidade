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
<div class="wrapper">

        <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Qualidade Agrícola</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('/img/user2-160x160.jpg')}}" class="user-image" alt="User Image"/>
                            <span class="hidden-xs">Maros</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                                <p>
                                    Marcos - Admin
                                </p>
                            </li>

                            <!-- Menu Footer-->
                            <li class="user-footer">

                                <div class="pull-right">
                                    <a href="{{asset('/admin/deslogar')}}" class="btn btn-default btn-flat">Sair</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>Marcos Carvalho</p>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li>
                    <a href="{{asset('admin/home')}}">
                        <i class="fa fa-th"></i><span>Usuarios</span>
                    </a>
                </li>
                <li>
                    <a href="{{asset('admin/metas')}}">
                        <i class="fa fa-th"></i><span>Metas</span>
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
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

            <form class="form-inline" name="formBusca" method="post" action="{{asset('/admin/filtrar/home')}}">
                <div class="form-group">
                            <label for="selectUnidade">Selecionar Unidade</label>
                            <select id="selectUnidade" name="selectUnidade" class="form-control">
                               <option value="">Selecione</option>
                                <option value="211940">Junqueira</option>
                             </select>
                        </div>
                <button type="submit" class="btn btn-primary">Buscar</button>       
            </form>
        </section>
        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->


</div><!--wrap-->
  

<!-- jQuery UI 1.11.2 -->
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/app.min.js')}}" type="text/javascript"></script>



</body>
</html>