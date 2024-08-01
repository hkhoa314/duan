<?php
    function listall_danhmuc(){
        $sql = "SELECT * FROM danhmuc ORDER BY id ASC";
        return pdo_query($sql);
    };

    function listone_danhmuc($id){
        $sql = "SELECT * FROM danhmuc WHERE id = ".$id;
        return pdo_query_one($sql);
    };

    function insert_danhmuc($tendm, $hinh){
        $sql = "INSERT INTO danhmuc(name, img) VALUES('$tendm', '$hinh')";
        pdo_execute($sql);
    };

    function update_danhmuc($id, $tendm, $hinh){
        $sql = "UPDATE danhmuc SET name = '$tendm', img = '$hinh' WHERE id = '$id'";
        pdo_execute($sql);
    };

    function delete_danhmuc($id){
        $sql = "DELETE FROM danhmuc WHERE id = '$id'";
        pdo_execute($sql);
    }
?>