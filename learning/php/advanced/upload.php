<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="addfile" id="addfile">
        <input type="submit" value="submit">
    </form>
    <?php
    $target_div = 'uploads/';
    $target_file = $target_div . basename($_FILES['addfile']['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if(isset($_POST['submit'])){
        $check = getimagesize($_FILES['addfile']['tmp_name']);

        if($check !== false){
            echo "File is an image -" . $check['mime'] . '. ';
            $uploadOk = 1;
        } else {
            echo 'File is not an image.';
            $uploadOk = 0;
        }
    }
    ?>
</body>
</html>