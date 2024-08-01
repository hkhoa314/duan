<?php
    function listall_taikhoan(){
        $sql = "SELECT * FROM taikhoan ORDER BY id ASC";
        return pdo_query($sql);
    }

    function insert_taikhoan($tentk, $user, $pass, $email, $address, $hinh, $tel, $role){
        $sql = "INSERT INTO taikhoan(name, user, pass, email, address, avatar, tel, role) VALUES('$tentk', '$user', '$pass', '$email', '$address', '$hinh', '$tel', '$role')";
        pdo_execute($sql);
    }

    function update_taikhoan($id, $tentk, $user, $pass, $email, $address, $hinh, $tel, $status, $role){
        if ($hinh != "") {
            $statusValue = !empty($status) ? $status : 'default_value'; 
            $sql = "UPDATE taikhoan SET name = '$tentk', user = '$user', pass = '$pass', email = '$email', address = '$address', avatar = '$hinh', tel = '$tel', role = '$role' WHERE id = '$id'";
        } else {
            $sql = "UPDATE taikhoan SET name = '$tentk', user = '$user', pass = '$pass', email = '$email', address = '$address', tel = '$tel', role = '$role' WHERE id = '$id'";
        }
        pdo_execute($sql);
    }
    function update_taikhoans($id, $tentk, $user, $email, $address, $hinh, $tel, $status, $role){
        if ($hinh != "") {
            $statusValue = !empty($status) ? $status : 'default_value'; 
            $sql = "UPDATE taikhoan SET name = '$tentk', user = '$user', email = '$email', address = '$address', avatar = '$hinh', tel = '$tel' WHERE id = '$id'";
        } else {
            $sql = "UPDATE taikhoan SET name = '$tentk', user = '$user', email = '$email', address = '$address', tel = '$tel' WHERE id = '$id'";
        }
        pdo_execute($sql);
    }

    function listone_taikhoan($id){
        $sql = "SELECT * FROM taikhoan WHERE id = '$id'";
        return pdo_query($sql);
    }
    
    function login($user, $pass){
        $sql = "SELECT * FROM taikhoan WHERE user = '$user' AND pass = '$pass'";
        if (is_array(pdo_query_one($sql))){
            return pdo_query_one($sql);
        } else {
            $sql = "SELECT * FROM taikhoan WHERE user = '$user'";
            if (is_array(pdo_query_one($sql))){
                return "Nhập sai mật khẩu! Vui lòng nhập lại!";
            }
            return "Tài khoản không tồn tại! Vui lòng đăng ký tài khoản tại đây!";
        }
    }

    function checkuser($user){
        $sql = "SELECT * FROM taikhoan WHERE user = '$user'";
        if (is_array(pdo_query_one($sql))){
            return "Tài khoản đã tồn tại!";
        }
    }
    
    function checkemail($email){
        $sql = "SELECT * FROM taikhoan WHERE email = '$email'";
        if (is_array(pdo_query_one($sql))){
            return "Email đã được liên kết với một tài khoản khác!";
        }
    }
    
    function dangky($user, $email, $pass){
        $sql = "INSERT INTO taikhoan(user, pass, email) VALUES('$user', '$pass', '$email')";
        pdo_execute($sql);
    };

    function repass($user, $email){
        $sql = "SELECT * FROM taikhoan WHERE user = '$user' AND email = '$email'";
        if (is_array(pdo_query_one($sql))){
            return pdo_query_one($sql);
        }
    }
?>