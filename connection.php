/**
* Created by PhpStorm.
* User: 1513552
* Date: 02/03/2016
* Time: 16:14
*/
<?php
define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME', 'b048870873781f');
define('DB_PASSWORD', '8c7005da');
define('DB_DATABASE', 'Revenant');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>