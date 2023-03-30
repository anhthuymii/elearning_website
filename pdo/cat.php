<?php
    // include "connectdb.php";

    function getAllCat(){
        $conn = connect();
        $stm = $conn->prepare("SELECT * FROM categories");
        $stm->execute();
        $result = $stm->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stm->fetchAll();
        return $kq;
    }
?>