<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
  <div class="nano">
    <div class="nano-content">
      <ul>
        <li class="label">Navivation</li>
        <li>
          <a class="sidebar-sub-toggle">
            <i class="ti-user"></i> Users
            <span class="sidebar-collapse-icon ti-angle-down"></span>
          </a>
          <ul>
            <li>
              <a href="#">Create New</a>
            </li>
            <li>
              <a href="#">List All</a>
            </li>
          </ul>
        </li>

        <li>
          <a class="sidebar-sub-toggle">
            <i class="ti-target"></i> Categories
            <span class="sidebar-collapse-icon ti-angle-down"></span>
          </a>
          <ul>
            <li>
              <a href="{{ route('admin.page-category.create') }}">Create New</a>
            </li>
            <li>
              <a href="{{ route('admin.page-category.index') }}">List All</a>
            </li>
          </ul>
        </li>

        <li>
          <a class="sidebar-sub-toggle">
            <i class="ti-target"></i> Pages
            <span class="sidebar-collapse-icon ti-angle-down"></span>
          </a>
          <ul>
            <li>
              <a href="{{ url('/adminpanel/pages/create') }}">Create New</a>
            </li>
            <li>
              <a href="{{ url('/adminpanel/pages') }}">List All</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="../documentation/index.html">
            <i class="ti-file"></i> Documentation</a>
        </li>
        <li>
          <a>
            <i class="ti-close"></i> Logout</a>
        </li>
      </ul>
    </div>
  </div>
</div>
