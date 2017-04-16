<!-- BARRA DE NAVEGACION EN LA PARTE IZQUIERDA DE LA PLANTILLA ADMINLTE-->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('Online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('Buscar') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('Encabezado') }}</li>
            
            <!--    SECCION 1: En esta seccion se ingresan todos los datos de las tablas de la base de datos -->
            <li class="treeview">
                <a href="#"><i class='glyphicon glyphicon-plus'></i> <span>{{ trans('Ingresar') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                
                <ul class="treeview-menu">
                    <li><a href="{{url('admin/baristas/create')}}">Baristas</a></li>
                    <li><a href="{{url('admin/productos/create')}}">Producto</a></li>
                    <li><a href="{{url('admin/metodos/create')}}">Metodo</a></li>
                    <li><a href="{{url('admin/ingredientes/create')}}">Ingrediente</a></li>
                </ul>
            </li>

            <!--    SECCION 2: En esta seccion se listan todos los datos de las tablas de la base de datos -->
            <li class="treeview">
                <a href="#"><i class='glyphicon glyphicon-list-alt'></i> <span>{{ trans('Listar') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('admin/baristas/index')}}">{{ trans('Barista') }}</a></li>
                    <li><a href="{{url('admin/productos/index')}}">{{ trans('Producto') }}</a></li>
                    <li><a href="{{url('admin/metodos/index')}}">{{ trans('Metodo') }}</a></li>
                    <li><a href="{{url('admin/ingredientes/index')}}">{{ trans('Ingrediente') }}</a></li>
                </ul>
            </li>

            <!--    SECCION 3: En esta seccion se pueden visualizar todos los datos en graficos de la base de datos y las historias de usuario importantes -->
            <li class="treeview">
                <a href="#"><i class='glyphicon glyphicon-usd'></i> <span>{{ trans('Visualizar') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('admin/tabla/index')}}">{{ trans('Tabla') }}</a></li>
                    <li><a href="{{url('admin/grafico/index')}}">{{ trans('Gráfico') }}</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#"><i class='glyphicon glyphicon-random'></i> <span>{{ trans('Analítica') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('admin/relacionarCafe/index')}}">{{ trans('Relacionar Café') }}</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
