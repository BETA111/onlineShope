<?php
include('config.php');

$errors = [];

if (isset($_POST['upload'])) {
    // التحقق من ملء الحقول
    if (empty($_POST['name']) || empty($_POST['price']) || empty($_FILES['image']['name'])) {
        $errors[] = 'يرجى ملء جميع الحقول';
    } else {
        // التحقق من النوع الصحيح للسعر
        $price = $_POST['price'];
        if (!is_numeric($price)) {
            $errors[] = 'السعر يجب أن يكون رقمًا';
        }

        // التحقق من نوع الصورة المرفوعة
        $image_type = $_FILES['image']['type'];
        if (!in_array($image_type, ['image/jpeg', 'image/png'])) {
            $errors[] = 'يجب أن تكون الصورة من نوع JPEG أو PNG';
        }

        // إذا لم يكن هناك أخطاء، قم بإدراج البيانات في قاعدة البيانات ونقل الملف المرفوع
        if (empty($errors)) {
            $NAME = $_POST['name'];
            $PRICE = $_POST['price'];
            $IMAGE = $_FILES['image'];
            $image_location = $_FILES['image']['tmp_name'];
            $image_name     = $_FILES['image']['name'];
            $image_UP       = "images/".$image_name;
            
            $insert = "INSERT INTO prod (name , price , image) VALUES ('$NAME','$PRICE','$image_UP') ";
            $query_result = mysqli_query($con, $insert);

            if ($query_result && move_uploaded_file($image_location, 'images/'.$image_name)) {
                echo "<script>
                setTimeout(function() {
                    alert('تم رفع المنتج بنجاح');
                    window.location.href = 'index.php';
                }, 1000);
            </script>"; 
            } else {
                $errors[] = 'حدث خطأ أثناء رفع المنتج';
            }
        }
    }

    // عرض الأخطاء إذا كانت موجودة
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<script>alert('$error');</script>";
        }
    }
}
?>