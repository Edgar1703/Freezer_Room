<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p style="overflow: hidden;text-overflow: ellipsis;max-width: 160px;" data-toggle="tooltip" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
           <!-- <li class="active"><a href="{{ url('temperatura') }}"><i class='fa fa-link'></i> <span>{{ trans('Temperaturas') }}</span></a></li> -->

            <!--<li class="active"><a href="{{ url('libro') }}"><i class='fa fa-link'></i> <span>{{ trans('Libros') }}</span></a></li> -->

            <li class="active" ><a href="{{ url('bitacora') }}" ><i class="fa fa-book" aria-hidden="true"></i>
            <span>{{ trans('Bitacora') }}</span></a></li>

         

            <li class="active"><a href="{{ url('temperatura') }}"><i class="fa fa-thermometer-empty" aria-hidden="true"></i> <span>{{ trans('Temperaturas') }}</span></a></li>

               <li class="active"><a href="{{ url('seccion') }}"><i class="fa fa-bars" aria-hidden="true"></i><span>{{ trans('Secciones') }}</span></a></li>


            <li class="treeview">
                <a href="#"><i class="fa fa-bars" aria-hidden="true"></i> <span>{{ trans('Secciones') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('carne') }}">{{ trans('Carnes') }}</a></li>
                    <li><a href="{{ url('marisco') }}">{{ trans('Mariscos') }}</a></li>
                    <li><a href="{{ url('fruta') }}">{{ trans('Frutas') }}</a></li>

                     <li><a href="{{ url('verdura') }}">{{ trans('Verduras') }}</a></li>
                </ul>
            </li>



            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('Empleados') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('empleado') }}">{{ trans('Empleados') }}</a></li>
                
                </ul>
            </li>


        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
