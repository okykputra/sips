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
                    <p>{{ Auth::user()->name }}</p>
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
        <ul class="sidebar-menu">
            
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            @if(Auth::user()->is_admin == 1)
            <li><a href="{{url('/siswa')}}"><i class='fa fa-link'></i> <span>Data Siswa</span></a></li>
            <li><a href="{{url('pelanggaran/view')}}"><i class='fa fa-link'></i> <span>Data Pelanggaran</span></a></li>
            <li><a href="{{url('kelas')}}"><i class='fa fa-link'></i> <span>Data Kelas</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Opsi Siswa</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/Tambah') }}">Tambah Data</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Opsi Pelanggaran</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('pelanggaran/index')}}">Tambah Data</a></li>
                </ul>
            </li>
            <li><a href="#"><i class='fa fa-link'></i> <span>Catatan Pelanggaran</span></a></li>
            @else
            <li><a href="#"><i class='fa fa-link'></i> <span>Catat Pelanggar</span></a></li>
            @endif

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
