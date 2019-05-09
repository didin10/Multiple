
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ url('1/img/icon.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin Satu</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
        </li>
        <li class="treeview">
          
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        <li>
          
          </a>
        </li>

       
        <li class="treeview">
          <a href="{{ url('/Admin/formadmin') }}">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('TambahBooking')}}"><i class="fa fa-circle-o"></i> Form Booking</a></li>
            <li><a href="{{ action('EventController@create') }}"><i class="fa fa-circle-o"></i> Form Event</a></li>
            <li><a href="{{ action('MemberController@create') }}"><i class="fa fa-circle-o"></i> Form Members</a></li>
            
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Form Lapangan</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
            
            
            <li><a href="{{ url('/Adminlfc/Data_Lapangan') }}"><i class="fa fa-circle-o"></i> Tabel Lapangan</a></li>
          </ul>
        </li>
        
        
       
          
       

        
          
        </li>

        
        <li><a href="{{ url('/Saran') }}"><i class="fa fa-book"></i> <span>Data Saran Dan Kritik</span></a></li>
        <li class="header">Data-data</li>
        <li><a href="{{ url('/Members') }}"><i class="fa fa-circle-o text-red"></i> <span>Data Member</span></a></li>
        <li><a href="{{ url('/DataBooking') }}"><i class="fa fa-circle-o text-yellow"></i> <span>Data Booking</span></a></li>
        <li><a href="{{ url('/Events') }}"><i class="fa fa-circle-o text-green"></i> <span>Data Event</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>