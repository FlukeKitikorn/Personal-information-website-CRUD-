<?php 
require './config/conn.php'; 

// กำหนดขนาดไฟล์สูงสุด (ในหน่วยไบต์)
$maxFileSize = 5 * 1024 * 1024; // 5 MB
// กำหนดประเภทไฟล์ที่อนุญาต (นามสกุลไฟล์)
$allowedFileTypes = ['image/jpeg', 'image/png' ]; // ชนิดไฟล์ที่อนุญาต

    if(isset($_POST['submit'])){
        $fname = $_POST['f_name'];
        $lname = $_POST['l_name'];
        $age = $_POST['age'];
        $phone = $_POST['phone'];
        $add = $_POST['address'];
        $country = $_POST['country'];
        $imgpath = null;

        // เช็คว่าได้อัพโหลดไฟล์หรือไม่
        if (isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
            $fileSize = $_FILES['img']['size'];
            $fileType = $_FILES['img']['type'];
            $fileTmpPath = $_FILES['img']['tmp_name'];
            $fileName = uniqid() . "_" . basename($_FILES['img']['name']);
            $filePath = "Upload/" . $fileName;

            if ($fileSize > $maxFileSize) {
                // echo "Error: File size exceeds the maximum limit of 5MB.";
                echo ' <script>
                    setTimeout(function() {
                        Swal.fire({
                            title: "Error",
                            icon: "error",
                            text: "File size exceeds the maximum limit of 5MB",
                            timer: 1500,
                            showConfirmButton: true
                        });
                    }, 1000);
                </script>';
                exit;
            }

            if (!in_array($fileType, $allowedFileTypes)) {
                // echo "Error: Only JPG and PNG files are allowed.";
                echo ' <script>
                    setTimeout(function() {
                        Swal.fire({
                            title: "Error",
                            icon: "error",
                            text: "Only JPG and PNG files are allowed",
                            timer: 1500,
                            showConfirmButton: true
                        });
                    }, 1000);
                </script>';
                exit;
            }
            // อ่านไฟล์ภาพเป็นข้อมูลไบนารี
            // $imgpath = file_get_contents($_FILES['img']['tmp_name']);
            if(move_uploaded_file($fileTmpPath, $filePath)){
                $imgpath = $filePath;
            }
             

        }

        
        // $imgpath = file_get_contents($_FILES['img']['tmp_name']);

        $insert_query = "INSERT INTO `users`(f_name, l_name, age, phone, address, country, img)
                         VALUES (:f_name, :l_name, :age, :phone, :address, :country, :img)";
        $stmt = $pdo->prepare($insert_query);
        $stmt->bindParam(':f_name', $fname, PDO::PARAM_STR);
        $stmt->bindParam(':l_name', $lname, PDO::PARAM_STR);
        $stmt->bindParam(':age', $age, PDO::PARAM_INT);
        $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
        $stmt->bindParam(':address', $add, PDO::PARAM_STR);
        $stmt->bindParam(':country', $country, PDO::PARAM_STR);
        $stmt->bindParam(':img', $imgpath, PDO::PARAM_STR);
        
        // $result = $stmt->execute();

        
        
        if($stmt->execute()){
            // echo "Succesful";
            // Success message
            echo '<script>
                setTimeout(function() {
                    Swal.fire({
                        title: "เพิ่มข้อมูลสำเร็จ",
                        icon: "success",
                        timer: 1500,
                        showConfirmButton: false
                    }).then(function() {
                        window.location = "./table.php" ;
                    });
                }, 1000);
            </script>';
            
        }else{
            echo "Error";
        }
        $pdo = null;
    }

    include "./admin/includes/scripts.php"
?>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
