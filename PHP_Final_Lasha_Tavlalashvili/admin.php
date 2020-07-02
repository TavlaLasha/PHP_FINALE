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
    <div class="admin-wrapper clearfix">
        <?php
            include "view/adminSidebar.php";
        ?>
        <div class="admin-content clearfix">
            <h1 style="text-align: center;">Admin Page</h1>
            <?php
                if(isset($_GET['cat']) && $_GET['cat']=='add'){
                    include "functions/admin/add.php";
                }
                if(isset($_GET['cat']) && $_GET['cat']=='view'){
                    include "functions/admin/companies.php";
                }
            ?>
        </div>
    </div>
</body>
</html>