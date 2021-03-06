  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav ml-auto">    
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            <p>Nama Agen</p>
          </li>
          <li class="user-footer">
            <a href="#" class="btn btn-default btn-flat">Profile</a>
            <a href="" class="btn btn-default btn-flat float-right">Sign out</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Aplikasi Agen</span>
    </a>
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false"> 
          <li class="nav-item">
            <a href="{{URL('/dashboard')}}" class="nav-link dashboard">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL('/order-view')}}" class="nav-link order">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Order
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL('/manifest-view')}}" class="nav-link manifest">
              <i class="nav-icon fas fa-truck-loading"></i>
              <p>
                Manifest
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL('/finance-view')}}" class="nav-link finance">
              <i class="nav-icon fas fa-comments-dollar"></i>
              <p>
                Finance
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL('/ticket-view')}}" class="nav-link ticket">
              <i class="nav-icon fas fa-ticket-alt"></i>
              <p>
                Ticket
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL('/report-view')}}" class="nav-link report">
              <i class="nav-icon fas fa-file-excel"></i>
              <p>
                Report
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL('/datamaster-view')}}" class="nav-link datamaster">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Data Master
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>


<script type="text/javascript">
      var parents = "<?=(!empty($res['modul'])&&$res['modul'])?$res['modul']:'dashboard'?>";
      $( "."+parents ).addClass( "active" ); 
</script>