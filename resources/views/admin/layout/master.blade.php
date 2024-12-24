<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta
    name="keywords"
    content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
  />
  <meta
    name="description"
    content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
  />
  <meta name="robots" content="noindex,nofollow" />
  <title>Matrix Admin Lite Free Versions Template by WrapPixel</title>
  <!-- Favicon icon -->
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="{{asset('assets')}}/images/favicon.png"
  />
  <!-- Custom CSS -->
  <link href="{{asset('assets')}}/css/style.min.css" rel="stylesheet" />
    <link
      href="{{asset('assets')}}/css/dataTables.bootstrap4.css"
      rel="stylesheet"
    />
  </head>

  <body>
<style>
  .alert{
    color: green;
    border-color: green;
  }
</style>
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >

      <header class="topbar" data-navbarbg="skin5">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin5">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="#">
              <!-- Logo icon -->
              <b class="logo-icon ps-2">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img src="{{asset('assets')}}/images/logo-icon.png" alt="homepage" class="light-logo" width="25"/>
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text ms-2">
                <!-- dark Logo text -->
                <!-- <img src="{{asset('assets')}}/images/logo-text.png" alt="homepage" class="light-logo"/> -->
              </span>
            </a>
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5"
          >
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-start me-auto">
              <li class="nav-item d-none d-lg-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i class="mdi mdi-menu font-24"></i
                ></a>
              </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-end">
              <li class="nav-item dropdown">
                <a
                  class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  "
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <img
                    src="{{asset('assets')}}/images/users/1.jpg"
                    alt="user"
                    class="rounded-circle"
                    width="31"
                  />
                </a>
                <ul
                  class="dropdown-menu dropdown-menu-end user-dd animated"
                  aria-labelledby="navbarDropdown"
                >
                 @auth
                 <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="mdi mdi-account me-1 ms-1"></i>{{Auth::user()->name}}</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{route('Auth.logout')}}"
                  ><i class="fa fa-power-off me-1 ms-1"></i> Logout</a
                  >
                 @endauth
                </ul>
              </li> 
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
            </ul>
          </div>
        </nav>
      </header>
      <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{route('admin.index')}}"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Home</span></a>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-receipt"></i
                  ><span class="hide-menu">Requests </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="/admin/students" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu"> All Requests </span></a
                    >
                  </li>
                  <!-- <li class="sidebar-item">
                    <a href="/admin/students/create" class="sidebar-link"
                      ><i class="mdi mdi-note-plus"></i
                      ><span class="hide-menu"> Add request </span></a
                    >
                  </li> -->
                  <li class="sidebar-item">
                    <a href="/admin/students/archive" class="sidebar-link"
                      ><i class="mdi mdi-note-plus"></i
                      ><span class="hide-menu"> pending zone </span></a
                    >
                  </li>
                </ul>
              </li>
              <!-- <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-receipt"></i
                  ><span class="hide-menu">Department</span></a
                > -->
                <!-- <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="/admin/departments/show" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu"> All Department </span></a
                    >
                  </li>
                </ul> -->
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>

      <div class="page-wrapper">
        <!-- Bread crumb -->
        <!--  Bread crumb section -->
          @yield('breadcrumb') <!--بعرفه اني هبعتله حاجه يحطها هنا -->
        <!-- End Bread crumb -->
        <!-- Container fluid -->
        <div class="container-fluid " id="mohamed-menna">
          <!-- Start Page Content -->
          <div class="row">
            <div class="col-12">
                @yield('content')
               <!-- table or form section -->
          </div>
        </div>
          <!-- End Page Content -->

        </div>
        <!-- End Container fluid -->

        <!-- footer -->
        <footer class="footer text-center">
          All Rights Reserved   Developed by Menna, Mohamed , Abdelrahman and kareem
        </footer>
        <!-- End footer -->
        
      </div>
      <!-- End Page wrapper -->
    </div>
    <!-- End Wrapper -->

    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('assets')}}/js/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('assets')}}/js/bootstrap.bundle.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('assets')}}/js/perfect-scrollbar.jquery.min.js"></script>
<script src="{{asset('assets')}}/js/sparkline.js"></script>
<!--Wave Effects -->
<script src="{{asset('assets')}}/js/waves.js"></script>
<!--Menu sidebar -->
<script src="{{asset('assets')}}/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="{{asset('assets')}}/js/custom.min.js"></script>
    
    <!-- this page js -->
    <script src="{{asset('assets')}}/js/datatables.min.js"></script>
    <script>
      /****************************************
       *       Basic Table                   *
       ****************************************/
      $("#zero_config").DataTable();
    </script>
  </body>
</html>
