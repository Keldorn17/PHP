<?php
    if (isset($_FILES['myImage'])) {
        // extenion:
        $extension = pathinfo($_FILES['myImage']['name'],PATHINFO_EXTENSION);
        // new filename, unique
        $new_name = time().'.'.$extension;
        // upload into folder
        move_uploaded_file($_FILES['myImage']['tmp_name'],'../images/'.$new_name);

        echo json_encode(['img_src' => '../images/'.$new_name]);
    }
?>