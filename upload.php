<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>
</head>
<body>
<?php 

    if(isset($_FILES['image']) ){

        if(file_exists($_FILES['image']['tmp_name'])) {

           $path ='tttupl/';

           $path .= $_FILES['image']['name'];

           if (move_uploaded_file($_FILES['image']['tmp_name'], $path )){

                echo  $path;
           }else {
                echo 'no noice';
           }

        } else {

            echo 'NOT fing';
        }

    }else {
        
        echo 'file not find';
    }

?>


</body>
</html>
