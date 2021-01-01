
    <aside class="main-sidebar elevation-4 sidebar-light-teal">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          <img src="{{asset('assets/admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
               style="opacity: .8">
          <span class="brand-text font-weight-light">Refine Diamond</span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{asset('assets/admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block"> {{ Auth::user()->role }} </a>
            </div>
          </div>

          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar text-sm flex-column" data-widget="treeview" role="menu" data-accordion="false">

              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-project-diagram text-pink"></i>
                  <p>
                    My Account
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Edit your account information</p>
                    </a>
                  </li>
    
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Change your password</p>
                    </a>
                  </li>
                  
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Modify your wish list</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/my-account/user/privacy-policy') }}" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>View Privacy Policy</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-project-diagram text-pink"></i>
                  <p>
                   My Orders
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('allOrderHistory') }}" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>View your order history</p>
                    </a>
                  </li>
    
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p>Your Reward Points</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon text-pink"></i>
                      <p> View your return request</p>
                    </a>
                  </li>
    
                </ul>
              </li>
    
              <li class="nav-item">
                <a class="nav-link" href="">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                      Newsletter
                  </p>
                </a>
              </li>

              <li class="nav-header">MISCELLANEOUS</li>
              <li class="nav-item">
                <a href="https://adminlte.io/docs/3.0" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Documentation</p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
    
    