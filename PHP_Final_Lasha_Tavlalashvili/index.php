<?php
    include "database/db.php";
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
        <h2>Please Choose:</h2>
        <a href="admin.php?cat=view"><div id="adminbtn">Admin</div></a>
        <?php if(isset($_SESSION['name'])): ?>
            <a href="company.php?cat=view"><div id="companybtn">Company</div></a>
        <?php else: ?>
            <a href="auth.php"><div id="companybtn">Company</div></a>
        <?php endif; ?>
    </div>
    <?php
        include "view/footer.php";
    ?>
</body>
</html>