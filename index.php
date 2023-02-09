<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="app-form">
        <form action="index.php" method="post" enctype="multipart/form-data">
            <label for="firstname">Firstname</label>
            <input type="text" id="firstname" name="firstname">
            <label for="lastname">Lastname</label>
            <input type="text" id="lastname" name="lastname">
            <label for="birthdate">Birthdate</label>
            <input type="text" id="birthdate" name="birthdate">
            <label for="file">Choose Picture</label>
            <input type="file" id="file" name="file" accept="image/png , image/jpeg">
            <input type="submit" id="submit" name="submit" value="Show">
        </form>
        
    </div>

    <div class="show">
        <?php 
        if(isset($_POST['submit'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $birthdate = $_POST['birthdate'];

            $file = $_FILES['file'];
            echo"$firstname";
            echo"$lastname";
            echo"$birthdate";
            echo"<img src=".$file."width=200 height=200";      
        }
        ?>

    </div>
</body>
</html>



