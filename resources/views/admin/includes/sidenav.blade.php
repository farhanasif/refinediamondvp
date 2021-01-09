
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

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar text-sm flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a class="nav-link {{ request()->is('dashboard') ? 'active' :''}}" href="{{ route('dashboard') }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview {{ request()->is('category/*') ? ' menu-open' :''}}">
            <a href="#" class="nav-link {{ request()->is('category/*') ? 'active' :''}}">
              <i class="nav-icon fas fa-list text-green"></i>
              <p>
                Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('allCategory') }}" class="nav-link {{ request()->is('category/all-category') ? 'active' :''}}">
                  <i class="far fa-circle nav-icon text-green"></i>
                  <p>All Category</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('createCategory') }}" class="nav-link {{ request()->is('category/create-category') ? 'active' :''}}">
                  <i class="far fa-circle nav-icon text-green"></i>
                  <p>Create Category</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item has-treeview {{ request()->is('sub-category/*') ? ' menu-open' :''}}">
            <a href="#" class="nav-link {{ request()->is('sub-category/*') ? 'active' :''}}">
              <i class="nav-icon fas fa-list text-blue"></i>
              <p>
               Sub Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('allSubCategory') }}" class="nav-link {{ request()->is('sub-category/all-sub-category') ? 'active' :''}}">
                  <i class="far fa-circle nav-icon text-blue"></i>
                  <p>All Sub Category</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('createSubCategory') }}" class="nav-link {{ request()->is('sub-category/create-sub-category') ? 'active' :''}}">
                  <i class="far fa-circle nav-icon text-blue"></i>
                  <p>Create Sub Category</p>
                </a>
              </li>

            </ul>
          </li>
        
          <li class="nav-item has-treeview {{ request()->is('product/*') ? ' menu-open' :''}}">
            <a href="#" class="nav-link {{ request()->is('product/*') ? 'active' :''}}">
              <i class="nav-icon fas fa-shopping-cart text-red"></i>
              <p>
               Product
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('allProduct') }}" class="nav-link {{ request()->is('product/all-product') ? 'active' :''}}">
                  <i class="far fa-circle nav-icon text-red"></i>
                  <p>All Product</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('createProduct') }}" class="nav-link {{ request()->is('product/create-product') ? 'active' :''}}">
                  <i class="far fa-circle nav-icon text-red"></i>
                  <p>Create Product</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item has-treeview {{ request()->is('point/*') ? ' menu-open' :''}}">
            <a href="#" class="nav-link {{ request()->is('point/*') ? 'active' :''}}">
              <i class="nav-icon fas fa-list text-blue"></i>
              <p>
                Point
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/point/all-point') }}" class="nav-link {{ request()->is('point/all-point') ? 'active' :''}}">
                  <i class="far fa-circle nav-icon text-blue"></i>
                  <p>All Point</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/point/create-point') }}" class="nav-link {{ request()->is('point/create-point') ? 'active' :''}}">
                  <i class="far fa-circle nav-icon text-blue"></i>
                  <p>Create Point</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item has-treeview {{ request()->is('marketing-stuff/*') ? ' menu-open' :''}}">
            <a href="#" class="nav-link {{ request()->is('marketing-stuff/*') ? 'active' :''}}">
              <i class="nav-icon fas fa-list text-blue"></i>
              <p>
                Marketing Stuff
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/marketing-stuff/all-marketing-stuff') }}" class="nav-link {{ request()->is('marketing-stuff/all-marketing-stuff') ? 'active' :''}}">
                  <i class="far fa-circle nav-icon text-blue"></i>
                  <p>All Marketing Stuff</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/marketing-stuff/create-marketing-stuff') }}" class="nav-link {{ request()->is('marketing-stuff/create-marketing-stuff') ? 'active' :''}}">
                  <i class="far fa-circle nav-icon text-blue"></i>
                  <p>Create Marketing Stuff</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ request()->is('order/all-order') ? 'active' :''}}" href="{{ route('allOrder') }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                  Order
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ request()->is('user/*') ? 'active' :''}}" href="{{ route('allUser') }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                  User Management
              </p>
            </a>
          </li>


          <li class="nav-header">MISCELLANEOUS</li>
          {{-- <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li> --}}
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-desktop text-pink"></i>
              <p>
               Profile
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.profile') }}" class="nav-link">
                  <i class="far fa-circle nav-icon text-pink"></i>
                  <p>Update Profile</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin.change.password') }}" class="nav-link">
                  <i class="far fa-circle nav-icon text-pink"></i>
                  <p>Update Password</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-pink"></i>
                  <p>Transaction Password</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Balance Sheet</p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table text-pink"></i>
              <p>
                Manage Promoter
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-pink"></i>
                  <p>Set New Promoter</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-pink"></i>
                  <p>Promoter Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-pink"></i>
                  <p>Load To Prmoter</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-pink"></i>
                  <p>Load To Prmoter Report</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-pink"></i>
                  <p>Transaction Password</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table text-pink"></i>
              <p>
                Auto Board
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-pink"></i>
                  <p>All Autoboard</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-pink"></i>
                  <p>Bonus Autoboard</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table text-green"></i>
              <p>
                Loan Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-green"></i>
                  <p>Give Loan</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-green"></i>
                  <p>Give Loan Report</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-green"></i>
                  <p>Loan Paid Report</p>
                </a>
              </li>

            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table text-blue"></i>
              <p>
                Fun Request Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-blue"></i>
                  <p>Pending Request</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-blue"></i>
                  <p>Paid Report</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table text-warning"></i>
              <p>
                Member Transaction
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Hope Digital City</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>List Of Agent</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Old ID Registration</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Old ID List</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Re-Invest Old ID Registration</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-file text-danger"></i>
              <p>Testing Registration</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-file text-yellow"></i>
              <p>Pay Now</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-file text-green"></i>
              <p>Cp Top Up</p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-desktop text-pink"></i>
              <p>
                Package Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-pink"></i>
                  <p>Set New Package</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-pink"></i>
                  <p>Set Package Commission</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-desktop text-red"></i>
              <p>
                Offer Achiever
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-red"></i>
                  <p>Reffer Reward Achiever</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Country Offer</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Generation Offer</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Withdraw Setup</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Freeze Amount Setup</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>New Signup Setup</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Deactivation Setup</p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file text-pink"></i>
              <p>
                Member Daily Earns
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-pink"></i>
                  <p>Spot Income</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-pink"></i>
                  <p>Generation Income</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-pink"></i>
                  <p>Binary Income</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-pink"></i>
                  <p>Spilt Income</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-pink"></i>
                  <p>Transfer Bonus Report</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table text-green"></i>
              <p>
               Member Total Earns
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-green"></i>
                  <p>Total Sponsor Income</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-green"></i>
                  <p>Total Generation Report</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-green"></i>
                  <p>Total Binary Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-green"></i>
                  <p>Total Rank Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-green"></i>
                  <p>Total Incentive Report</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-green"></i>
                  <p>Transaction Bonus</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table text-blue"></i>
              <p>
                Transfered Report
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-blue"></i>
                  <p>Daily Report</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-blue"></i>
                  <p>Monthly Report</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-blue"></i>
                  <p>Total Transfered Report</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table text-green"></i>
              <p>
                Withdrawal Report
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-green"></i>
                  <p>Daily Report</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-green"></i>
                  <p>Monthly Report</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-green"></i>
                  <p>Total Transfered Report</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table text-red"></i>
              <p>
               Member
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-red"></i>
                  <p>Active/Inactive Member</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-red"></i>
                  <p>Member Edit</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Withdraw Access</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Active New Member</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Notice</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Send Email To Member</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Member Message</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Logout</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

