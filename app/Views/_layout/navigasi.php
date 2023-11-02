<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
    <?php $aktif = "active"; ?>
    <li class="nav-item ">
      <a href="<?= site_url() ?>" class="nav-link <?= uri_string(true) == '' ? 'active' : '' ?>">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p> Dashboard </p>
      </a>
    </li>
    <li class="nav-item ">
      <a href="<?= site_url() ?>member" class="nav-link <?= uri_string(true) == 'member' ? 'active' : '' ?>">
        <i class="nav-icon fas fa-table"></i>
        <p> Data Member </p>
      </a>
    </li>
    <li class="nav-item ">
      <a href="<?= site_url() ?>parkir" class="nav-link <?= uri_string(true) == 'parkir' ? 'active' : '' ?>">
        <i class="nav-icon fas fa-table"></i>
        <p> Data Parkir</p>
      </a>
    </li>
    <li class="nav-item <?= uri_string(true) == 'rstock' || uri_string(true) == 'rsuplier' || uri_string(true) == 'rkonsumen' || uri_string(true) == 'rtrx' || uri_string(true) == '1' ? 'menu-open' : '' ?>">
      <a href="#" class="nav-link <?= uri_string(true) == 'rstock' || uri_string(true) == 'rsupplier' || uri_string(true) == 'rkonsumen' || uri_string(true) == 'rtrx' || uri_string(true) == '1' ? 'active' : '' ?>">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Reporting
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="<?= site_url() ?>reportmember" class="nav-link <?= uri_string(true) == 'reportmember' ? 'active' : '' ?>">
            <i class="nav-icon fas fa-book"></i>
            <p>Report Member</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= site_url() ?>reportparkir" class="nav-link <?= uri_string(true) == 'reportparkir' ? 'active' : '' ?>">
            <i class="nav-icon fas fa-book"></i>
            <p>Report Parkir</p>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</nav>