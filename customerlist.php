<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
</style>
<body>
<table border="0">
    <caption><h1>Danh sách khách hàng</h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php
    $customerlist = array(
        "1" => array("ten" => "The Joker",
            "ngaysinh" => "1988-03-20",
            "diachi" => "Hà Nội",
            "anh" => "the joker.jpg"),
        "2" => array("ten" => "Harley Quinn",
            "ngaysinh" => "1992-09-20",
            "diachi" => "Hà Nội",
            "anh" => "Harley Quinn.png"),
        "3" => array("ten" => "Boss Baby",
            "ngaysinh" => "1983-03-31",
            "diachi" => "20th Century Fox",
            "anh" => "boss-baby.jpg"),
        "4" => array("ten" => "Bunny",
            "ngaysinh" => "2017-03-31",
            "diachi" => "Hà Tây",
            "anh" => "bunny.jpg"),

    );
    ?>
    <?php
    foreach($customerlist as $key => $values){
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$values['ten']."</td>";
        echo "<td>".$values['ngaysinh']."</td>";
        echo "<td>".$values['diachi']."</td>";
        echo "<td><image src ='".$values['anh']."' width = '100px' height ='100px'/></td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>