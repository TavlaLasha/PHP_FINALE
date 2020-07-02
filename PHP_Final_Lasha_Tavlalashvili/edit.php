<?php
    include "database/db.php";

    if(isset($_GET['del_id'])){
        $count = delete("vacations", $_GET['del_id']);
        header('location: company.php?cat=view');
        exit();
    }
    $title="";
    $description="";
    $date="";
    $id="";

    if(isset($_GET['id'])){
        $vacation = selectOne("vacations", ['id' => $_GET['id']]);
        $id = $vacation['id'];
        $title = $vacation['title'];
        $description = $vacation['description'];
        $date = $vacation['date'];
    }

    if(isset($_POST['edit'])){
        unset($_POST['edit']);
        if($date==""){
            unset($_POST["date"]);
        }
        $id = $_POST["id"];
        unset($_POST["id"]);
        update("vacations", $id, $_POST);
        header('location: company.php?cat=view');
        exit();
    }
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
            <form action="" method="post">
                <h2>Edit Vacation</h2>
                <input type="hidden" value="<?=$id; ?>" name="id">
                Title - <input type="text" name="title" value="<?=$title; ?>"><br>
                Description -<br><textarea name="description" id="" cols="30" rows="10"><?=$description; ?></textarea><br>
                Date - <input type="date" name="date" value="<?=$date; ?>"><br>

                <input type="submit" value="Edit" name="edit">
            </form>
        </div>
    </div>
</body>
</html>