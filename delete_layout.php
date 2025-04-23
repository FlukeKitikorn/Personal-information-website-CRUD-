<?php include './admin/includes/head.php'; ?>
<?php require './config/conn.php' ?>

<?php
    // รับ id ที่ส่งมา
    $id = $_GET['id'] ?? 0;

    // query ข้อมูลจากฐานข้อมูล
    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
?>

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
            <h1 class="m-0">User Information (ID) : <?= htmlspecialchars($id) ?>
                <span class="ml-2">
                <button type="button" class="btn btn-danger btn-md" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">Delete
                    <i class='fa-solid fa-trash'></i>
                </button>
                </span>
            </h1>

            <!-- Userform modal -->
            <section>
                <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <form action="./delete_db.php" method="post">
                            <input type="hidden" name="id" value="<?= $user['id'] ?>">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Delete</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to delete this user?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger" name="submit">Delete</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Userform modal -->
            

          </div><!-- /.col -->
          <div class="col-sm-6">
            <?php include './admin/includes/breadcrumbs.php'; ?>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <?php include './admin/includes/data_table_show.php'; ?>
      </div>
    </section>
  </div>

  <?php include './admin/includes/footer.php'; ?>
</div>

<?php include './admin/includes/scripts.php'; ?>

</body>
</html>