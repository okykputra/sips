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
            <li><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            @if(Auth::user()->is_admin == 1)
            <li><a href="{{url('/siswa')}}"><i class='fa fa-group'></i> <span>Data Siswa</span></a></li>
            <li><a href="{{url('pelanggaran/view')}}"><i class='fa fa-exclamation-triangle'></i> <span>Data Pelanggaran</span></a></li>
            <li><a href="{{url('kelas')}}"><i class='fa fa-book'></i> <span>Data Kelas</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-chevron-circle-down'></i> <span>Opsi Siswa</span></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/Tambah') }}"><i class='fa fa-plus-square-o'></i> <span>Tambah Data</span></a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-chevron-circle-down'></i><span>Pelanggaran</span></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/catatan')}}"><i class='fa fa-bookmark-o'></i> <span>Catatan Pelanggaran</span></a></li>
                    <li><a href="{{url('/Tulis')}}"><i class='fa fa-plus-square-o'></i> <span>Tambah Pelanggar</span></a></li>
                </ul>
            </li>
            @else
            <li><a href="{{url('Catat')}}"><i class='fa fa-edit'></i> <span>Catat Pelanggar</span></a></li>
            @endif

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>