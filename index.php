<?php
$connection = mysqli_connect('localhost', 'root', '', 'ZOHO', '3306');
$sqlresult1 = "SELECT * FROM `zoho_subs_2`";

$fetchalldatabase = $connection->query($sqlresult1)->fetch_all();

var_dump($fetchalldatabase);
var_dump($fetchalldatabase[0]);
var_dump($fetchalldatabase[0][4]);
var_dump($fetchalldatabase[0][15]);

$sqlcreatetable2 = "CREATE TABLE zoho_subs2 (id INT(6)
                    UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    zip VARCHAR(255) NOT NULL,
                    city VARCHAR(255) NOT NULL,
                    phone VARCHAR(255) NOT NULL,
                    street VARCHAR(255),
                    attention VARCHAR(255),
                    street2 VARCHAR(255),
                    state VARCHAR(255),
                    phone TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

                    $zip = "";
                    $city = "";
                    $phone = "";
                    $street = "";
                    $attention = "";
                    $street2 = "";
                    $state = "";
                    $phone = "";

$sqlcreatetable2 = "INSERT INTO zoho_subs2 (zip, city, phone,street,attention,street2,state,phone) VALUES ({$zip}, {$city}, {$phone},{$street},{$attention},{$street2},{$state},{$phone})";

$fetchalldatabase = $connection->query($sqlcreatetable2);

$zip = "";
$country = "";
$city = "";
$street = "";
$attention = "";
$street2 = "";
$state = "";
$fax = "";

$queryinsert = "INSERT INTO zoho_subs2 ";
$connection->query($sqlcreatetable2);
$connection->query($sqlcreatetable2);
$connection->query("delete table zoho_subs22");
die();
//$result = $connection->query($sql1);