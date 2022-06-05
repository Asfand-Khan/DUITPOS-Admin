<!-- Sidebar Start -->
<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span class="logo-name">DUITPOS</span>
      </a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header"></li>
      <li class="dropdown <?php if ($_SERVER["REQUEST_URI"] == "/DUITPOS%20Admin/index.php") {
                            echo ("active");
                          } ?>">
        <a href="index.php" class="nav-link fw-light" id="changetodashboard"><i class="fas fa-chart-line"></i><span>Dashboard</span></a>
      </li>
      <li class="dropdown <?php if ($_SERVER["REQUEST_URI"] == "/DUITPOS%20Admin/possales.php") {
                            echo ("active");
                          } ?>">
        <a href="possales.php" class="nav-link fw-light" id="changetopossales"><i class="fas fa-regular fa-store"></i><span>POS (Sales)</span></a>
      </li>
      <li class="dropdown <?php if ($_SERVER["REQUEST_URI"] == "/DUITPOS%20Admin/table.php") {
                            echo ("active");
                          } ?>">
        <a href="table.php" class="nav-link fw-light" id="changetotable"><i class="fas fa-table"></i><span>Table</span></a>
      </li>
      <li class="dropdown <?php if ($_SERVER["REQUEST_URI"] == "/DUITPOS%20Admin/purchase.php") {
                            echo ("active");
                          } ?>">
        <a href="purchase.php" class="nav-link fw-light" id="changetopurchase"><i class="fas fa-regular fa-basket-shopping"></i><span>Purchase</span></a>
      </li>
      <li class="dropdown <?php if ($_SERVER["REQUEST_URI"] == "/DUITPOS%20Admin/product.php") {
                            echo ("active");
                          } ?>">
        <a href="product.php" class="nav-link fw-light" id="changetoproduct"><i class="fas fa-regular fa-box"></i><span>Product</span></a>
      </li>
      <li class="dropdown <?php if ($_SERVER["REQUEST_URI"] == "/DUITPOS%20Admin/supplier.php") {
                            echo ("active");
                          } ?>">
        <a href="supplier.php" class="nav-link fw-light" id="changetosupplier"><i class="fas fa-boxes-packing"></i><span>Supplier</span></a>
      </li>
      <li class="dropdown <?php if ($_SERVER["REQUEST_URI"] == "/DUITPOS%20Admin/managesales.php") {
                            echo ("active");
                          } ?>">
        <a href="managesales.php" class="nav-link fw-light" id="changetomanagesales"><i class="fas fa-list-check"></i><span>Manage Sales</span></a>
      </li>
      <!-- <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Apps</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="chat.html">Chat</a></li>
                <li><a class="nav-link" href="portfolio.html">Portfolio</a></li>
                <li><a class="nav-link" href="blog.html">Blog</a></li>
                <li><a class="nav-link" href="calendar.html">Calendar</a></li>
              </ul>
      </li> -->

    </ul>
  </aside>
</div>
<!-- Sidebar End -->