<?php  

$domain = $_GET['domain'];
$domain = str_replace('.', '_', $domain);

$domain = "site_{$domain}";

$random_bot_name = file_get_contents("https://alreferal.ru/get_random_bot_hash.php?hash_id=2594b35dd89730592f7449fe64968bdf06bccdf76b5f56e9c3d0dbc4857dbbfc");

$url_redirect =  "https://t.me/{$random_bot_name}/?start={$domain}";
header("Location: {$url_redirect}");
die();
?>