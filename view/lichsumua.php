<!DOCTYPE html>
<html>
<head>
    <title>Lịch sử đặt hàng</title>
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #3D464C;
        }

        table {
            width: 70%;
            margin: auto;
            border-collapse: collapse;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            height: 100px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
        h3{
            margin: 50px 0 0 250px;
        }
    </style>
    <h3>Đơn mua</h3>
    <table>
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>TÊN SẢN PHẨM</th>
                                            <th>GIÁ</th>
                                            <th>SỐ LƯỢNG</th>
                                            <th>TRẠNG THÁI</th>
                                            <th>PHƯƠNG THỨC THANH TOÁN</th>
                                            <th>TỔNG</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($listdh as $dh) {
                                        ?>
                                            <tr onclick="window.location.href='index.php?act=chitietdonhang&&id=<?php echo $dh['id'] ?>'" style="cursor: pointer;">
                                                <td><a href="#"><?= $dh['id'] ?></a></td>
                                                <td><?= $dh['tensp'] ?></td>

                                                <td><?= $dh['giasp'] ?> VND</td>
                                                <td><?= $dh['soluong'] ?></td>
                                                <td><?php
                                                    if ($dh['status'] == 0) {
                                                        echo "Đang vận chuyển";
                                                    } else echo "Đơn đã hủy";
                                                    ?></td>
                                                <td><?php
                                                    if ($dh['pttt'] == 1) {
                                                        echo "Thanh toán khi nhận hàng";
                                                    } else echo "Chuyển khoản";
                                                    ?></td>
                                                <td><?php echo $dh['giasp'] * $dh['soluong'] ?> VND</td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
     </table>
</body>
</html>