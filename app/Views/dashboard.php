<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>Dashboard | AdminLTE 3</title>
  <!-- AdminLTE CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Google Fonts (Kanit) -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit&display=swap">
  <style>
    body {
      font-family: 'Kanit', sans-serif;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="/logout">
          <i class="fas fa-sign-out-alt"></i> ออกจากระบบ
        </a>
      </li>
    </ul>
  </nav>
  <!-- Sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
      <span class="brand-text font-weight-light">My Admin</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- User Info -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">👋 <?= esc(session('username') ?? 'ผู้ใช้งาน') ?></a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          
          <!-- เมนูทั่วไป -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>แดชบอร์ด</p>
            </a>
          </li>
          <!-- เมนูสำหรับ Admin -->
          <?php if (session('role_id') == 1): ?>
          <li class="nav-item">
            <a href="/manage/users" class="nav-link">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>จัดการผู้ใช้</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/settings" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>ตั้งค่าระบบ</p>
            </a>
          </li>
          <?php endif; ?>
          <!-- เมนูสำหรับ Admin และ Manager -->
          <?php if (in_array(session('role_id'), [1, 2])): ?>
          <li class="nav-item">
            <a href="/report" class="nav-link">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>รายงาน</p>
            </a>
          </li>
          <?php endif; ?>
          <!-- เมนูทุกคน -->
          <li class="nav-item">
            <a href="/profile" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>ข้อมูลส่วนตัว</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>ออกจากระบบ</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
  <!-- Content Wrapper -->
  <div class="content-wrapper p-4">
    <!-- Page Header -->
    <div class="content-header">
      <h1 class="m-0 text-dark">📊 แดชบอร์ดระบบจัดการสิทธิ์</h1>
    </div>
    <!-- Main Content -->
    <div class="content">
      <div class="row">
        <!-- ตัวอย่าง Card -->
        <div class="col-lg-4 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>10</h3>
              <p>ผู้ใช้ในระบบ</p>
            </div>
            <div class="icon">
              <i class="fas fa-user"></i>
            </div>
            <a href="/manage/users" class="small-box-footer">
              ดูเพิ่มเติม <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- เพิ่ม Card ได้อีกตามต้องการ -->
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="main-footer text-center">
    <strong>My Admin</strong> © <?= date('Y') ?> All rights reserved.
  </footer>
</div>
<!-- AdminLTE JS -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/plugins/jquery/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>