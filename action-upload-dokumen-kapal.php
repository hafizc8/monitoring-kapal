<?php
    include "koneksi.php";

    $id_input = $_POST['id_file'];
    $id_kapal = $_GET['id_kapal'];
    $filename = $id_kapal."_".$id_input."_".time()."_".$_FILES['file']['name'];

    /* Location */
    $location = "upload/".$filename;
    $uploadOk = 1;

    if($uploadOk == 0){
        echo 0;
    }else{
        /* Upload file */
        if(move_uploaded_file($_FILES['file']['tmp_name'], $location)){
            $query = "UPDATE data_kapal SET $id_input = '$filename' WHERE id_kapal = $id_kapal";

            if (mysqli_query($koneksi, $query)) {
                echo 1;
            } else {
                echo 0;
            }
        }else{
            echo 0;
        }
    }
?>