<?php
    function insert_donhang($name, $address, $mail, $tel, $pttt, $tong, $slg, $idpro, $iduser){
        $sql = "INSERT INTO donhang(name, address, mail, tel, pttt, soluong, tong, idpro, iduser) VALUES('$name', '$address', '$mail', '$tel', '$pttt', '$slg', '$tong', $idpro, $iduser)";
        pdo_execute($sql);
        $sql = "UPDATE sanpham SET kho = kho - $slg, daban = $slg WHERE id = $idpro";
        pdo_execute($sql);
    }

    function listall_donhang(){
        $sql = "SELECT dh.id, dh.name, dh.address, dh.mail, dh.tel, dh.pttt, dh.soluong, dh.tong, dh.status, sp.price as giasp, sp.name as tensp FROM donhang dh INNER JOIN sanpham sp ON dh.idpro = sp.id ORDER BY dh.id ASC";
        return pdo_query($sql);
    }

    function listone_donhang_user($id){
        $sql = "SELECT dh.id, dh.name, dh.address, dh.mail, dh.tel, dh.pttt, dh.pttt, dh.soluong, dh.status, sp.price as giasp, sp.name as tensp FROM donhang dh INNER JOIN sanpham sp ON dh.idpro = sp.id WHERE dh.iduser = '$id' ORDER BY dh.id ASC";
        return pdo_query($sql);
    }

    function listone_donhang($id){
        $sql = "SELECT dh.id, dh.name, dh.address, dh.mail, dh.tel, dh.soluong, dh.pttt, dh.ngaydathang, dh.status, sp.price as giasp, sp.img, sp.name as tensp FROM donhang dh INNER JOIN sanpham sp ON dh.idpro = sp.id WHERE dh.id = '$id'";
        return pdo_query_one($sql);
    }
    
    function lichsumua($iduser){
        $sql="SELECT * FROM donhang WHERE iduser = $iduser ORDER BY id DESC";
        $lichsumua=pdo_query($sql);
        return $lichsumua;
    }
?>