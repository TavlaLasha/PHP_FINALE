<?php
    $title="";
    $description="";
    $date="";

    if(isset($_POST['add'])){
        unset($_POST['add']);
        if($date==""){
            unset($_POST["date"]);
        }
        create("vacations", $_POST);
        header("location: company.php?cat=view");
        exit();
    }
?>
<form method="post">
    <h2>Add Vacation</h2>
    Title - <input type="text" value="<?=$title; ?>" name="title"><br>
    Description -<br> <textarea name="description" cols="30" rows="10"><?=$description; ?></textarea><br>
    Date - <input type="date" name="date" value="<?=$date; ?>"><br>
    
    <input type="submit" value="Add" name="add">
</form>