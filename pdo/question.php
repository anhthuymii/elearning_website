<?php
    function insertBt($question, $chid, $cid){
        $conn = connect();
        $stm = $conn->prepare("INSERT INTO question(question, chap_id, course_id) VALUES ('$question','$chid','$cid');");
        $stm->execute();
        $result = $stm->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stm->fetchAll();
        $kq= $conn->lastInsertId();
        return $kq;
    }
?>

