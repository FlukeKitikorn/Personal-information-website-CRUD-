<!-- <?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
?> -->



<?php include './admin/includes/head.php'; ?>

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
            <h1 class="m-0">Tables
                <span class="ml-2">
                    <button type="button" class="btn btn-success btn-md" data-bs-toggle="modal" data-bs-target="#userFormModal">Add 
                        <i class="fa-solid fa-plus" style="color: #ffffff;"></i>
                    </button>
                </span>
            </h1>

            <!-- Insert  -->
            <section>
                    <div class="modal fade" id="userFormModal" tabindex="-1" aria-labelledby="userFormModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg"> <!-- large modal -->
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="userFormModalLabel">Add User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form action="add_user.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']) ?>">
                            <div class="modal-body">
                            <div class="row g-3">
                                <!-- Left Column with placeholder -->
                                <div class="col-md-4 text-center d-flex flex-column align-items-center">
                                <div class="rounded-circle bg-light d-flex justify-content-center align-items-center mb-3" 
                                    style="width: 150px; height: 150px; overflow: hidden; position: relative;">
                                    <!-- icon placeholder -->
                                    <i class="fa-solid fa-user fa-4x text-secondary"></i>
                                    <img id="previewImg" src="#" alt="Preview" class="img-fluid rounded-circle position-absolute top-0 start-0 w-100 h-100 object-fit-cover" style="<?= empty($user['img']) ? 'display: none;' : '' ?>">
                                </div>

                                <input class="form-control" type="file" name="img" id="imgUpload" accept="image/*">
                                </div>

                                <!-- Right Column: Form Fields -->
                                <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="f_name" class="form-label">First Name</label>
                                    <input type="text" class="form-control" name="f_name" id="f_name" placeholder="Enter firstname" required>
                                </div>

                                <div class="mb-2">
                                    <label for="l_name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" name="l_name" id="l_name" placeholder="Enter lastname" required>
                                </div>

                                <div class="mb-2">
                                    <label for="age" class="form-label">Age</label>
                                    <input type="number" class="form-control" name="age" id="age" placeholder="Enter age" required>
                                </div>

                                <div class="mb-2">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Telephone number" required>
                                </div>

                                <div class="mb-2">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea class="form-control" name="address" id="address" rows="3" hight="200px" placeholder="Enter Address" required></textarea>
                                </div>

                                <div class="mb-2">
                                    <label for="country" class="form-label">Country</label>
                                    <input type="text" class="form-control" name="country" id="country" rows="3" placeholder="Enter country" required></input type="text">
                                </div>

                                </div>
                            </div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" name="submit" >Add</button>
                                <!-- <?php var_dump($_POST);?> -->
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal" >Cancel</button>
                            </div>
                        </form>
                        </div>
                    </div>
                    </div>
            </section>
            
            <!-- Edit -->
            <section>

            </section>
            <!-- End edit -->

          </div><!-- /.col -->
          <div class="col-sm-6">
            <?php include './admin/includes/breadcrumbs.php'; ?>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <?php include './admin/includes/data_table.php'; ?>
      </div>
    </section>
  </div>

  <?php include './admin/includes/footer.php'; ?>
</div>

<?php include './admin/includes/scripts.php'; ?>

</body>

<!-- find method -->
<script>
    // รอให้ DOM โหลดเสร็จก่อน
    document.addEventListener("DOMContentLoaded", function () {
        const imgUpload = document.getElementById("imgUpload");
        const previewImg = document.getElementById("previewImg");

        imgUpload.addEventListener("change", function () {
            const file = this.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    previewImg.src = e.target.result;
                    previewImg.style.display = "block"; // แสดงรูป
                }

                reader.readAsDataURL(file);
            } else {
                previewImg.src = "#";
                previewImg.style.display = "none"; // ซ่อนรูปถ้ายังไม่มีไฟล์
            }
        });
    });

    // เคลียร์ค่า form
    const userModal = document.getElementById('userFormModal');

    userModal.addEventListener('hidden.bs.modal', function () {
        const form = userModal.querySelector('form');
        form.reset();
        document.getElementById('previewImg').style.display = 'none';
    });

    // Edit page
    function editUser(id) {
        window.location.href = './edit_layout.php?id=' + id;
    }
    // Delete page
    function deleteUser(id) {
        window.location.href = './delete_layout.php?id=' + id;
    }
</script>



</html>


