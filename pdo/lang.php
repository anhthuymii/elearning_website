<?php
    // include "connectdb.php";

    function getlangById($id){
        $conn = connect();
        $stm = $conn->prepare("SELECT * FROM languages WHERE cat_id='$id'");
        $stm->execute();
        $result = $stm->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stm->fetchAll();
        return $kq;
    }
?>