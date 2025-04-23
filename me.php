
<?php include './admin/includes/head.php'; ?>

<style>
  .copy-email:hover {
    font-weight: 700;
    transition: 0.2s;
  }
</style>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <?php include './admin/includes/header.php'; ?>
  <?php include './admin/includes/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <!-- <div class="content-wrapper">
    <div class="row">
      Picture
      <div class="col-12">

      </div>
      Info
      <div class="col-12">

      </div>
    </div>
  </div> -->
  <div class="content-wrapper p-4">
  <div class="row justify-content-center">
    <!-- Picture -->
    <div class="col-md-4 text-center mb-4 pe-3" >
      <div class="rounded-5 overflow-hidden shadow mx-auto " style="width: auto">
        <img src="./dist/img/IMG_4711 (2).JPG" alt="my pic" class="img-fluid w-100 h-100 object-fit-cover">
      </div>
      <h3 class="mt-3">นาย กิติกร ขันธะเสน (ฟลุ๊ค)</h3>
      <p class="text-muted">นักศึกษา | วิศวกรรมคอมพิวเตอร์และปัญญาประดิษฐ์ (ชั้นปีที่ 2)</p>
    </div>

    <!-- Info -->
    <div class="col-md-6">
      <div class="card shadow-sm">
        <div class="card-body">
          <h4 class="mb-3"><i class="fa-solid fa-user-graduate text-primary me-2"></i> ข้อมูลการศึกษา</h4>
          <ul class="list-unstyled mb-4">
            <li class="mb-2">
              <i class="fa-solid fa-building-columns me-2 text-info"></i>
              <strong>คณะ : </strong> วิศวกรรมศาสตร์
            </li>
            <li class="mb-2">
              <i class="fa-solid fa-microchip me-2 text-success"></i>
              <strong>สาขา : </strong> วิศวกรรมคอมพิวเตอร์และปัญญาประดิษฐ์
            </li>
            <li class="mb-2">
              <i class="fa-solid fa-id-card me-2 text-warning"></i>
              <strong>รหัสนักศึกษา : </strong> 2311310888
            </li>
          </ul>

          <h4 class="mb-3"><i class="fa-solid fa-address-card text-secondary me-2"></i> ติดต่อ</h4>
          <ul class="list-unstyled">
          <li class="mb-2 copy-email" style="cursor: pointer;" onclick="copyToClipboard('kh.kitikorn_st@tni.ac.th', this)">
            <i class="fa-solid fa-envelope me-2 text-danger"></i>
            <strong>อีเมล : </strong> <span>kh.kitikorn_st@tni.ac.th</span>
          </li>
            <li class="mb-2"><a id="github" href="https://github.com/FlukeKitikorn/FlukeKitikorn" target="_blank"><i class="fa-brands fa-github me-2"></i><strong>Github : FlukeKitikorn</strong></a></li>
          </ul>

          <hr>
          <h5><i class="fa-solid fa-quote-left text-muted me-2"></i> เกี่ยวกับฉัน</h5>
          <p>
          ผมเป็นนักศึกษาจากสถาบันเทคโนโลยีไทย-ญี่ปุ่น (Thai-Nichi Institute of Technology) 
          ที่มีความสนใจอย่างมากในด้าน DevOps, DevSecOps และเทคโนโลยีคลาวด์
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

</div>

  <?php include './admin/includes/footer.php'; ?>
</div>

<?php include './admin/includes/scripts.php'; ?>
</body>

<script>
  // Copy email
  function copyToClipboard(text, element) {
    navigator.clipboard.writeText(text).then(() => {
      const original = element.innerHTML;
      element.innerHTML = `<i class="fa-solid fa-check text-success me-2"></i> คัดลอกแล้ว!`;
      setTimeout(() => {
        element.innerHTML = original;
      }, 2000);
    });
  }
</script>

</html>
