 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('/images/'.getsetting()->logo)}}" alt="{{getsetting()->site_name}}" class="brand-image img-circle elevation-7"
           style="opacity: .9">
      <span class="brand-text font-weight-light">{{getsetting()->site_name}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="{{url('/admin')}}" class="nav-link active">
                  <i class="fas fa-home nav-icon"></i>
                  <p>Accueil</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{url('/admin/sitesetting')}}" class="nav-link active bg-red">
                  <i class="fas fa-tachometer-alt"></i>
                  <p>  Parametres de site</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/admin')}}" class="nav-link active">
                  <i class="fa fa-user"></i>
                  <p>  Liste des Admins</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/membre')}}" class="nav-link active bg-green">
                  <i class="fa fa-user"></i>
                  <p>  Liste des Membres</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/category')}}" class="nav-link bg-red">
                  <i class="fa fa-connectdevelop"></i>
                  <p>   Categories des endroits</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{url('/admin/endroits')}}" class="nav-link active">
                  <i class="fa fa-connectdevelop"></i>
                  <p>   Liste des endroits</p>
                </a>
              </li>
          
        </ul>
      </nav>
    </div>
  </aside>
