<?php 
require './config/conn.php'; 

$maxFileSize = 5 * 1024 * 1024; // 5MB
$allowedFileTypes = ['image/jpeg', 'image/png'];

if(isset($_POST['submit'])){
    $id = $_POST['id'] ?? 0;
    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $add = $_POST['address'];
    $country = $_POST['country'];
    $imgData = null;
    $updateImg = false;

    if (isset($_FILES['img']) && $_FILES['img']['error'] === 0) {
        $fileSize = $_FILES['img']['size'];
        $fileType = $_FILES['img']['type'];
        $fileTmpPath = $_FILES['img']['tmp_name'];
        $fileName = uniqid() . "_" . basename($_FILES['img']['name']);
        $filePath = "Upload/"  . $fileName;

        if ($fileSize > $maxFileSize) {
            echo "Error: File size exceeds 5MB.";
            exit;
        }

        if (!in_array($fileType, $allowedFileTypes)) {
            echo "Error: Only JPG and PNG files are allowed.";
            exit;
        }

        // $imgData = file_get_contents($_FILES['img']['tmp_name']);
        if(move_uploaded_file($fileTmpPath, $filePath)){
            $imgData = $filePath;
            $updateImg = true;
        }
    }

    // Prepare SQL
    if ($updateImg) {
        $update_query = "UPDATE users SET f_name = :f_name, l_name = :l_name, age = :age, phone = :phone,
                         address = :address, country = :country, img = :img WHERE id = :id";
    } else {
        $update_query = "UPDATE users SET f_name = :f_name, l_name = :l_name, age = :age, phone = :phone,
                         address = :address, country = :country WHERE id = :id";
    }

    $stmt = $pdo->prepare($update_query);
    $stmt->bindParam(':f_name', $fname);
    $stmt->bindParam(':l_name', $lname);
    $stmt->bindParam(':age', $age, PDO::PARAM_INT);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':address', $add);
    $stmt->bindParam(':country', $country);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
    if ($updateImg) {
        $stmt->bindParam(':img', $imgData, PDO::PARAM_STR);
    }

    if($stmt->execute()){
        echo '<script>
            setTimeout(function() {
                Swal.fire({
                    title: "Updated",
                    icon: "success",
                    timer: 1500,
                    showConfirmButton: false
                }).then(function() {
                    window.location = "./table.php";
                });
            }, 1000);
        </script>';
    } else {
        echo "Error updating user.";
    }

    $pdo = null;
}

include "./admin/includes/scripts.php";
?>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
