<?php
$dbc=mysql_connect("sql113.freevnn.com","freev_22507043","25844ban") or die("khong the ket noi vao csdl".mysql_error());
mysql_set_charset('utf8', $dbc);
mysql_select_db("freev_22507043_quanlithanhvien",$dbc)or die("khong the chọn   csdl".mysql_error());
?>