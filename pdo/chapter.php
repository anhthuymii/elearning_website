<?php
    function insertChap($name, $ref, $video, $id){
        $conn = connect();
        $stm = $conn->prepare("INSERT INTO chapter(name, reference, video, course_id) VALUES ('$name','$ref','$video','$id')");
        $stm->execute();
        $result = $stm->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stm->fetchAll();
        return $kq;
    }

    //thuy
    function getAllchap(){
        $conn = connect();
        $stm = $conn->prepare("SELECT * FROM chapter");
        $stm->execute();
        $result = $stm->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stm->fetchAll();
        return $kq;
    }
    function getchapterbyCId($course){
        $conn = connect();
        $stm = $conn->prepare( "SELECT * FROM chapter WHERE course_id = '$course'");
        $stm->execute();
        $result = $stm->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stm->fetchAll();
        return $kq;
    }
    //

    function deleteChapByCId($cid){
        $conn = connect();
        $stm = $conn->prepare("DELETE FROM chapter WHERE chap_id='$cid'");
        $stm->execute();
        $result = $stm->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stm->fetchAll();
        return $kq;
    }

    function getChapByCid($id){
        $conn = connect();
        $stm = $conn->prepare("SELECT* FROM chapter WHERE course_id='$id'");
        $stm->execute();
        $result = $stm->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stm->fetchAll();
        return $kq;
    }


    function countChap($id){
        $conn = connect();
        $stm = $conn->prepare("SELECT COUNT(*) FROM chapter WHERE course_id='$id'");
        $stm->execute();
        $result = $stm->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stm->fetchAll();
        return $kq;
    }
?>