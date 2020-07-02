<?php
    session_start();
    require('dbconnect.php');

    function executeQuery($sql, $data){
        global $conn;

        $stat = $conn -> prepare($sql);
        $values = array_values($data);
        $types = str_repeat('s', count($values));
        $stat -> bind_param($types, ...$values);
        $stat->execute();
        return $stat;
    }
    function selectOne($table, $conditions){
        global $conn;
        $sql = "SELECT * FROM $table";
        $i=0;
        foreach($conditions as $key => $value){
            if($i===0){
                $sql = $sql . " WHERE $key=?";
            }else{
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }
        $sql = $sql . " LIMIT 1";
        $stat = executeQuery($sql, $conditions);
        $records = $stat->get_result()->fetch_assoc();
        return $records;
    }
    function selectAll($table, $conditions = []){
        global $conn;
        $sql = "SELECT * FROM $table";
        if(empty($conditions)){
            $stat = $conn -> prepare($sql);
            $stat->execute();
            $records = $stat->get_result()->fetch_all(MYSQLI_ASSOC);
            return $records;
        }else{
            $i=0;
            foreach($conditions as $key => $value){
                if($i===0){
                    $sql = $sql . " WHERE $key=?";
                }else{
                    $sql = $sql . " AND $key=?";
                }
                $i++;
            }
            $stat = executeQuery($sql, $conditions);
            $records = $stat->get_result()->fetch_all(MYSQLI_ASSOC);
            return $records;
        }
    }
    function create($table, $data){
        global $conn;

        $sql = "INSERT INTO $table SET";

        $i=0;
        foreach($data as $key => $value){
            if($i===0){
                $sql = $sql . " $key=?";
            }else{
                $sql = $sql . ", $key=?";
            }
            $i++;
        }
        $stat = executeQuery($sql, $data);
        $id = $stat->insert_id;
        return $id;
    }
    function userLogin($user){
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['idn'] = $user['idn'];
        $_SESSION['message'] = "You are now logged in";
        $_SESSION['type'] = "Success";
        header('location: company.php?cat=view');
        exit();
    }
    function delete($table, $id){
        global $conn;

        $sql = "DELETE FROM $table WHERE id=?";

        $stat = executeQuery($sql, ['id' => $id]);
        return $stat->affected_rows;
    }
    function update($table, $id, $data){
        global $conn;

        $sql = "UPDATE $table SET";

        $i=0;
        foreach($data as $key => $value){
            if($i===0){
                $sql = $sql . " $key=?";
            }else{
                $sql = $sql . ", $key=?";
            }
            $i++;
        }
        $sql = $sql . " WHERE id=?";
        $data['id'] = $id;
        $stat = executeQuery($sql, $data);
        return $stat->affected_rows;
    }
?>