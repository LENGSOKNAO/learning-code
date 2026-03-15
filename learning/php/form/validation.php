<!-- $_SERVER['PHP_SELF'] is super global variable that returns the filename of the currently executing script -->
<!-- htmlspecialchars is function converts special characters into HTML entities -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>

    <?php

    $name = $email = $website = $comment = '';
    $nameErr  = $emailErr = $websiteErr = $commentErr = '';
        // if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //     echo $name = test_input($_POST['name']). "</br>";   
        //     echo $email = test_input($_POST['email']). "</br>";   
        //     echo $website = test_input($_POST['website']). "</br>";   
        //     echo $comment = test_input($_POST['comment']). "</br>";   
        // }
        
        // add required

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // if(empty($_POST['name'])){
            //     $nameErr = 'Name is required';
            // } else {    
            //     echo $name = test_input($_POST['name']). "</br>";   
            // }
            if(empty($_POST['name'])){
                $nameErr = 'Name is required';
            } else {    
                echo $name = test_input($_POST['name']). "</br>";  
                if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
                    $nameErr = 'Only letters and white space allowed';
                } 
            }
            // if(empty($_POST['email'])){
            //     $emailErr = 'email is required';
            //     } else {    
            //     echo $email = test_input($_POST['email']). "</br>";   
            // }
            if(empty($_POST['email'])){
                $emailErr = 'email is required';
                } else {    
                echo $email = test_input($_POST['email']). "</br>";
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $emailErr = 'Invalid email format';
                }   
            }
            if(empty($_POST['website'])){
                $websiteErr = 'website is required';
                } else {    
                echo $website = test_input($_POST['website']). "</br>";   
            }
            if(empty($_POST['comment'])){
                $commentErr = 'comment is required';
                } else {    
                echo $comment = test_input($_POST['comment']). "</br>";   
            }
        }
        
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        Name: <input type="text" name="name"> <br>
        <span class="error"> <?php echo $nameErr?> </span> <br>
        E-mail: <input type="text" name="email"> <br>
        <span class="error"> <?php echo $emailErr?> </span> <br>
        Website: <input type="text" name="website"> <br>
        <span class="error"> <?php echo $websiteErr?> </span> <br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea> <br>
        <span class="error"> <?php echo $commentErr?> </span> <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>