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
    <?php
     session_start();
    if(isset($_POST['verify'])){
        $height = $_POST['height'];
        echo "<div class='div'><label class='label'>Result</label><a href='http:cancel.php'><button class='cancel' name='cancel'>x</button></a><p class='test'>Your height is $height cm!</p></div>";
        if (!empty($height)) {
            $_SESSION['confirm'] = $height;
        }
    }
    ?>
    <form action="" method="post">
        <div class="head"><h4>Height caculator tool</h4></div>
        <label for="">Input your height</label>
        <input type="text" name="height"> 
        <label for="">cm</label> <br> <br>
        <button name="verify" class="btn">Check</button>
    </form>
</body>
</html>