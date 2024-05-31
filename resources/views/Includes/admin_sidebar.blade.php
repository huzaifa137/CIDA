  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ url('admin-dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Information</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('add-cause') }}">
              <i class="bi bi-circle"></i><span>Add Cause/ Blog</span>
            </a>
          </li>
          <li>
            <a href="{{ url('add-event') }}">
              <i class="bi bi-circle"></i><span>Add Event</span>
            </a>
          </li>
          <li>
            <a href="{{ url('all-events') }}">
              <i class="bi bi-circle"></i><span>All Events</span>
            </a>
          </li>
          <li>
            <a href="{{ url('all-causes') }}">
              <i class="bi bi-circle"></i><span>All Causes</span>
            </a>
          </li>
          <li>
            <a href="{{ url('admin-register') }}">
              <i class="bi bi-circle"></i><span>Add User</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>

  </aside><!-- End Sidebar-->
     