<?php require('./config/conn.php'); ?>

<!-- Small boxes (Stat box) CPU-->
<div class="row">
    <div class="col-lg-3 col-sm-6 col-md-3">
    <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
        <div class="info-box-content">
        <span class="info-box-text">CPU Traffic</span>
        <span class="info-box-number">
            10
            <small>%</small>
        </span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- Ages -->
    <div class="col-lg-3 col-sm-6 col-md-3">
    <div class="info-box mb-3">
        <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-face-smile" style="color: #ffffff;"></i></i></span>

        <div class="info-box-content">
        <span class="info-box-text">Average Age</span>
        <?php
            $dash_query = "SELECT AVG(age) as avg_age FROM users";
            $stmt = $pdo->query($dash_query);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $avg_age = round($row['avg_age'], 2); // ปัดเศษทศนิยม 2 ตำแหน่ง

            echo '<span class="info-box-number">' . $avg_age . '</span>';
        ?>
        <!-- <span class="info-box-number"></span> -->
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <!-- Visitors -->
    <div class="col-lg-3 col-sm-6 col-md-3">
    <div class="info-box mb-3">
        <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-eye" style="color: #ffffff;"></i></span>

        <div class="info-box-content">
        <span class="info-box-text">Visitors</span>
        <span class="info-box-number">100</span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- members -->
    <div class="col-lg-3 col-sm-6 col-md-3">
    <div class="info-box mb-3">
        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">Total Users</span>
            <?php
                $dash_query = "SELECT COUNT(*) as total FROM users";
                $stmt = $pdo->query($dash_query);
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $member_total = $row['total'];
                
                echo '<span class="info-box-number">' . $member_total . '</span>';
            ?>
            <!-- <span class="info-box-number">2,000</span> -->
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
    </div>
    <!-- /.col -->
    </div>
    
    
    
</div>
<!-- /.row -->

<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-12 connectedSortable">
    <!-- Map card -->
    <div class="card bg-gradient-primary">
        <div class="card-header border-0">
        <h3 class="card-title">
            <i class="fas fa-map-marker-alt mr-1"></i>
            Visitors
        </h3>
        <!-- card tools -->
        <div class="card-tools">
            <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
            <i class="far fa-calendar-alt"></i>
            </button>
            <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
        </div>
        <!-- /.card-tools -->
        </div>
        <div class="card-body">
        <div id="world-map" style="height: 400px; width: 100%;"></div>
        </div>
        <!-- /.card-body-->
    </div>
    <!-- /.card -->

    <!-- /.card -->
    </section>
    <!-- right col -->
</div>

