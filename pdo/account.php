<?php
    // include "connectdb.php";
    
    function validated($name, $pass){
        $conn = connect();
        $stm = $conn->prepare("SELECT * FROM account WHERE username='$name' AND password='$pass'");
        $stm->execute();       
        $result = $stm->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stm->fetchAll();
        return $kq;
    }

    function getUserByName($name){
        $conn = connect();
        $stm = $conn->prepare("SELECT * FROM account WHERE username='$name'");
        $stm->execute();
        $result = $stm->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stm->fetchAll();
        return $kq;
    }

    function getUserById($id){
        $conn = connect();
        $stm = $conn->prepare("SELECT * FROM account WHERE user_id = '$id'");
        $stm->execute();
        $result = $stm->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stm->fetchAll();
        return $kq;
    }

    function insertUser($name, $fname, $email, $pass){
        $conn = connect();
        $stm = $conn->prepare("INSERT INTO account(username, password, email, fullname) VALUES ('$name','$pass','$email','$fname')");
        $stm->execute();
        $result = $stm->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stm->fetchAll();
        return $kq;
    }
?>
