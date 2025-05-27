<?php

// $mahasiswa = [
//     [
//         "nama" => "Syifa Ainul Q",
//         "nim" => "2217020114",
//         "email" => "syfanulqlb@gmail.com"
//     ],
//     [
//         "nama" => "Byeon woo-seok",
//         "nim" => "2217020180",
//         "email" => "byeon woo seok@gmail.com"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=lppd_pariaman','root','');

$db = $dbh->prepare('SELECT * FROM user');
$db->execute();
$user = $db->fetchAll(PDO::FETCH_ASSOC);
$data = json_encode($user);
echo $data;


$data = json_encode($user);
echo $data;

?>