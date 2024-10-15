 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="">
          <i class="bi bi-grid"></i>
          <span>Admin</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Posts</span><i class="bi bi-chevron-down ms-auto"></i>
          <span
          class="badge badge badge-info badge-pill float-right mr-2 text-danger"></span>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li class="active"><a class="menu-item" href="{{ route('post.showall') }}"
                data-i18n="nav.dash.ecommerce">
                <i class="bi bi-circle"></i><span> Show_All</span>
            </a>
             </li>
          <li>
            <a href="{{ route('post.create') }}">
              <i class="bi bi-circle"></i><span>Add New Post</span>
            </a>

          </li>

        </ul>
      </li><!-- End Components Nav -->


  </aside><!-- End Sidebar-->
