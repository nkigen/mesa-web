<?php
define('DB_SERVER','terraform-20231002010411504000000008.ctjten6aavan.us-east-2.rds.amazonaws.com');
define('DB_USER','mesa_user');
define('DB_PASS' ,'ztX2JG3dL150');
define('DB_NAME','mesa');

$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>