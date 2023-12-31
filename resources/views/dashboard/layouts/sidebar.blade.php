<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link text-dark" aria-current="page" href="/dashboard">
          <i class="bi bi-house-door"></i>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="/dashboard/posts">
          <i class="bi bi-file-text"></i>
          My Post
        </a>
      </li>
    </ul>

    @can('admin')
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span>Administrator</span>
    </h6>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link text-dark" href="/dashboard/categories">
          <i class="bi bi-boxes"></i>
          Post categories
        </a>
      </li>
    </ul>
    @endcan 
  </div>
</nav>