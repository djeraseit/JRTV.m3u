<?php
// Your code here!
<?php
$url = "https://nffthex0kzt.xyz/rk/GjhccbbfddghjdfhhpoljgdsrtggvhgxvzBA/Mbcdfgssghcctsehhgghtdwwexcbnvddw/686.m3u8";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'User-Agent: NbF7LdU3b3QkP6DGgN92KmHAb8nkrbV6dwvCX2jkSZxeX4TgzSnxSCfgHLJvuZciAc9EXeYjDGmQwevVYQrcBuDV9uYXBGm6BtaxAGJ58B26Mgxb6qrzFPzGFzVCTkNRBPzZjNbpQCp7S2E4wpt9mwTwS9kaGNj8qK5TiEuxZK5zKdVdSXhCBuxTNwtiwRxL56M3QqZmdkhXmbZd7wScM6qEMYnKp5Eqy2gvfrcTpW2'
]);

$response = curl_exec($ch);
curl_close($ch);

header("Content-Type: application/vnd.apple.mpegurl");
echo $response;
?>

?>
