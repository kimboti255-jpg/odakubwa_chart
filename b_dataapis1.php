<?php
// Ruhusu kodi ya JavaScript isome data hii
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Pata jina la sarafu kutoka kwenye link
$pea = $_GET['pair'] ?? 'BTC_USDT';

// Pata thamani ya min kutoka kwenye link (kama haipo, ipe thamani ya kawaida/default kama 15)
$min = $_GET['min'] ?? '5'; 

$symbol = isset($_GET['symbol']) ? $_GET['symbol'] : "$pea";

// 1. Vuta data kutoka kwenye faili la mfano.php
$mexcUrl = "http://localhost:8080/whale_orders_chart/mfano.php"; // Weka anwani sahihi ya hapo localhost yako

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $mexcUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
curl_close($ch);

if (!$response) {
    echo json_encode(["success" => false, "message" => "Failed to fetch data from source"]);
    exit();
}

// 2. Geuza JSON kuwa PHP Array
$rawData = json_decode($response, true);

// Kama data imewekwa kwenye array ya nje kabisa [0], ichukue kupitia index ya 0
if (isset($rawData[0])) {
    $rawData = $rawData[0];
}

// 3. Hakikisha data zipo na badilisha Strings kuwa Numbers/Floats
if (isset($rawData['data']) && isset($rawData['data']['time'])) {
   
    $open = isset($rawData['data']['realOpen']) ? $rawData['data']['realOpen'] : $rawData['data']['open'];
    $high = isset($rawData['data']['realHigh']) ? $rawData['data']['realHigh'] : $rawData['data']['high'];
    $low = isset($rawData['data']['realLow']) ? $rawData['data']['realLow'] : $rawData['data']['low'];
    $close = isset($rawData['data']['realClose']) ? $rawData['data']['realClose'] : $rawData['data']['close'];

    // Badilisha strings zote kuwa floats (Numbers)
    $cleanData = [
        "success" => true,
        "code" => 0,
        "data" => [
            "time" => $rawData['data']['time'],
            "open" => array_map('floatval', $open),
            "high" => array_map('floatval', $high),
            "low" => array_map('floatval', $low),
            "close" => array_map('floatval', $close),
        ]
    ];

    echo json_encode($cleanData);
} else {
    echo json_encode(["success" => false, "message" => "Invalid MEXC structure"]);
}
?>
