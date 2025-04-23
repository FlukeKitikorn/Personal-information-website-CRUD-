<?php require($_SERVER['DOCUMENT_ROOT'] . '/personal_CRUD/config/conn.php'); ?>

<?php
    // รับ id ที่ส่งมา
    $id = $_GET['id'] ?? 0;

    // query ข้อมูลจากฐานข้อมูล
    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<style>
    #pic{
        width: 250px;
        height: 250px;
        overflow: hidden;
        position: relative;
    }
    p{
        font-size: 18px;
    }
    /* แท็บเล็ต (ขนาดจอ <= 768px) */
    @media (max-width: 768px) {
        #pic {
            width: 200px;
            height: 200px;
        }
    }

    /* มือถือ (ขนาดจอ <= 480px) */
    @media (max-width: 480px) {
        #pic {
            width: 150px;
            height: 150px;
        }
    }

</style>

<!-- Main row -->
<div class="row shadow py-4" >
        <!-- Left column -->
        <div class="col-md-4 d-flex align-items-center justify-content-center">
            <div class="d-flex flex-column align-items-center">
                <!-- Profile Image -->
                <div id="pic" class="rounded-circle bg-light d-flex justify-content-center align-items-center mb-3 shadow">
                    <?php if (!empty($user['img'])): ?>
                        <img src='<?php echo "{$user['img']}" ?>' alt="User Image" class="img-fluid rounded-circle w-100 h-100 object-fit-cover">
                    <?php else: ?>
                        <i class="fa-solid fa-user fa-4x text-secondary"></i>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Right column -->
        <div class="col-md-8 flex-column text-center py-2">
            <p><strong>First Name:</strong> <?= htmlspecialchars($user['f_name']) ?></p><br>
            <p><strong>Last Name:</strong> <?= htmlspecialchars($user['l_name']) ?></p><br>
            <p><strong>Age:</strong> <?= htmlspecialchars($user['age']) ?></p><br>
            <p><strong>Phone:</strong> <?= htmlspecialchars($user['phone']) ?></p><br>
            <p><strong>Address:</strong> <?= nl2br(htmlspecialchars($user['address'])) ?></p><br>
            <p><strong>Country:</strong> <?= htmlspecialchars($user['country']) ?></p>
        </div>
    
</div><!-- End Main row -->