<?php
    function loadall_thongke() {
        $sql="SELECT * FROM sanpham";
        $listtk=pdo_query($sql);
        return $listtk;
    }
    ?>