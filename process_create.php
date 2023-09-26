<?php 
$conn =mysqli_connect('localhost','root','','php_mysql');
$sql = " select * from topic";
$result = mysqli_query($conn, $sql);


?>