<?php
$conn=mysqli_connect("localhost","root","") or die ("db select error");
mysqli_select_db($conn,"leave_message");
mysqli_query($conn,"set names utf8");
?>