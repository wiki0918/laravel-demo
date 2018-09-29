<?php
$url ='http://api.openweathermap.org/data/2.5/weather?units=metric&q=Taipei,TW&appid=2dac4978aa2278e716f6f7895b632224&lang=zh_TW';
$json = file_get_contents($url);
$obj = json_decode($json);

?>
<?php
$method = $_SERVER['REQUEST_METHOD'];
echo "Method".($method)."<br>";
echo "Rquest".var_dump($_REQUEST)."<br>";
echo "Post".var_dump($_POST)."<br>";

$url = "";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_exec($ch);
?>

<form method="put" action="">
    <input name="a" value="1">
    <button>123</button>
</form>


