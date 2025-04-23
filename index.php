
<?php include './admin/includes/head2.php'; ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <?php include './admin/includes/header.php'; ?>
  <?php include './admin/includes/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <!-- Fix resposive -->
          <div class="col-sm-6 hidden">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <?php include './admin/includes/breadcrumbs.php'; ?>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <?php include './admin/includes/dashboard.php'; ?>
      </div>
    </section>
  </div>

  <?php include './admin/includes/footer.php'; ?>
</div>

<?php include './admin/includes/scripts.php'; ?>
</body>
</html>
