<?php 
require_once('upload.php');
    if (isset($_POST['submit'])) {
        $notice = file_upload('uploads','file_upload');
        if(gettype($notice) == "array"){
            foreach ($notice as $key => $value) {
                echo $value.'<br>';
            }
        }else{
            echo "File name is: " . $notice; // Trả về tên file nếu upload thành công
            $data = array(
                'name' => $_POST['name_file'],
                'file_name' => basename( $_FILES["file_upload"]["name"])

            );
            $_SESSION['uploads'][] = $data;
        }
    }
?>