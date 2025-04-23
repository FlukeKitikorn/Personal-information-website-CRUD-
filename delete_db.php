<?php require('./config/conn.php'); ?>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id'])) {
    $id = (int)$_POST['id'];

    $stmt = $pdo->prepare("DELETE FROM users WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        echo '<script>
            setTimeout(function() {
                Swal.fire({
                    title: "Deleted",
                    icon: "success",
                    timer: 1500,
                    showConfirmButton: false
                }).then(function() {
                    window.location = "./table.php";
                });
            }, 1000);
        </script>';
    } else {
        echo "Error deleting user.";
    }

    $pdo = null;
}
?>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
