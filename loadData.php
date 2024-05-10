<?php
//khai bao thong tin ket noi CSDL
$svr="localhost"; $u="id22116301_hungnq2808"; $p="Abc@123456";$db="id22116301_hungnq2808";
$con=new mysqli($svr,$u,$p,$db);
//Thuc thi lenh
$kq=$con->query("select * from mytable");
//doc ket qua
while($row[]=$kq->fetch_assoc())//doc tung dong
{
    $json=json_encode($row);
}
//in ra man hinh
echo $json;
$con->close();