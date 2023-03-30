<?php
    function getAllCourse(){
        $conn = connect();
        $stm = $conn->prepare("SELECT * FROM courses");
        $stm->execute();
        $result = $stm->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stm->fetchAll();
        return $kq;
    }

    function getCourseByUser($id){
        $conn = connect();
        $stm = $conn->prepare("SELECT * FROM courses WHERE user_id = '$id'");
        $stm->execute();
        $result = $stm->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stm->fetchAll();
        return $kq;
    }
    
function getCourseByQuery($query=""){
        $conn = connect();
        $stm = $conn->prepare("SELECT * FROM courses c JOIN account a ON c.user_id = a.user_id
        WHERE c.name LIKE '%$query%' OR a.fullname LIKE '%$query%'");
        $stm->execute();
        $result = $stm->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stm->fetchAll();
        return $kq;
    }


    //dung 
    function getcoursebyCat($id){
        $conn = connect();
        $stm = $conn->prepare("SELECT * FROM courses WHERE cat_id = '$id'");
        $stm->execute();
        $result = $stm->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stm->fetchAll();
        return $kq;
    }


    function getcoursebyLag($id){
        $conn = connect();
        $stm = $conn->prepare("SELECT * FROM courses WHERE lag_id = '$id'");
        $stm->execute();
        $result = $stm->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stm->fetchAll();
        return $kq;
    }
?>