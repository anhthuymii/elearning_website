<?php
    function insertAnsw($answer, $isTrue, $qid){
        $conn = connect();
        $stm = $conn->prepare("INSERT INTO answer(answer, isTrue, question_id) VALUES ('$answer','$isTrue','$qid')");
        $stm->execute();
        $result = $stm->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stm->fetchAll();
        return $kq;
    }
?>