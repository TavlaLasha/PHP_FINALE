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
    <title>Company</title>
</head>
<body>
    <?php
        include "view/header.php";
    ?>
    <div class="admin-wrapper clearfix">
        <?php
            include "view/companySidebar.php";
        ?>
        <div class="admin-content clearfix">
            <h1 style="text-align: center;">Company Page</h1>
            <?php
                if(isset($_GET['cat']) && $_GET['cat']=='add'){
                    include "functions/company/add.php";
                }
                if(isset($_GET['cat']) && $_GET['cat']=='view'){
                    include "functions/company/vacations.php";
                }
            ?>
        </div>
    </div>
</body>
</html>