<?php
    $str = "abcdefghijklmnopqrstuvwxyz";
    $rand_len = rand(5, 10);
    $name="";
    $idn="";
    $date="";
    $password="";

    for($i=0; $i<=$rand_len; $i++){
        $randBool = rand(0, 1);
        if($randBool){
            $name .= strtoupper($str[rand(0, strlen($str)-1)]);
        }
        else{
            $name .= $str[rand(0, strlen($str)-1)];
        }
    }

    for($i=0; $i<9; $i++){
        $randNum = rand(0, 9);
        $idn .= $randNum;
    }

    $timestamp = mt_rand(1, time());
    $date = date("Y-m-d", $timestamp);

    for($i=0; $i<5; $i++){
        $randBool = rand(0, 1);
        if($randBool){
            $password .= rand(0, 9);
        }
        else{
            $password .= $str[rand(0, strlen($str)-1)];
        }
    }
    
    if(isset($_POST['submit'])){
        unset($_POST['submit']);
        $times=$_POST['select'];
        unset($_POST['select']);
        // for($i=0; $i<$times; $i++){
        //     create("company", $_POST);
        // }
        create("company", $_POST);
        header("location: admin.php?cat=view");
        exit();
    }
?>
<form method="post">
    How Much - 
    <select name="select" id="select">
        <?php for($i=3; $i<=30; $i++): ?>
            <option><?=$i; ?></option>
        <?php endfor; ?>
    </select>
    <h2>Add Company</h2>
    Name - <input type="text" value="<?=$name; ?>" name="name"><br>
    Id Number - <input type="text" value="<?=$idn; ?>" name="idn"><br>
    Date - <input type="date" name="date" value="<?=$date; ?>"><br>
    Password - <input type="password" name="password" value="<?=$password; ?>"><br>
    
    <input type="submit" value="Add" name="submit">
</form>