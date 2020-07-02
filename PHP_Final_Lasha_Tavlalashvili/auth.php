<?php
    include "database/db.php";
    $name="";
    $password="";
    $errors=[];
    if(isset($_POST['login'])){
        $company = selectOne("company", ['name' => $_POST['name']]);
        if ($company && $_POST['password']==$company['password']){
            userLogin($company);
        }else{
            array_push($errors, "Wrong credentials");
        }
        $name = $_POST['name'];
        $password = $_POST['password'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="assets/css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" /> <!-- es ese imitom davwere rom shecvlili stilebi droulad gamochndes brauzershi -->
    <title>Vacancy</title>
</head>
<body>
    <?php
        include "view/header.php";
    ?>
    <div id="container">
        <h1 style="text-align: center;">Log In</h2>
        <form action="" method="post">
            <?php
                include "functions/formErrors.php";
            ?>
            Name - <input type="text" name="name" value="<?=$name; ?>"><br>
            Password - <input type="password" name="password" value="<?=$password; ?>"><br>
            <input type="submit" name="login" value="Log In">
        </form>
    </div>
    <?php
        include "view/footer.php";
    ?>
</body>
</html>