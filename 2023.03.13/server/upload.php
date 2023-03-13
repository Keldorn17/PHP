<?php
    if (isset($_FILES['myPDF'])) {
        // extenion:
        $extension = pathinfo($_FILES['myPDF']['name'],PATHINFO_EXTENSION);
        // new filename, unique
        $new_name = time().'.'.$extension;
        // upload into folder
        move_uploaded_file($_FILES['myPDF']['tmp_name'],'../docs/'.$new_name);

        echo json_encode(['pdf_src' => '../docs/'.$new_name]);
    }
?>