<?php
header("Content-Type: application/json");

$data = [
    "status" => "success",
    "timestamp" => "2026-10-17T06:54:38.905Z",
    "bids_count" => 237,
    "asks_count" => 109,
    "bids" => [
        ["id" => "bid-81491.3", "type" => "bid", "price" => 81491.3, "amount" => 14.279, "value" => 1163614.2727, "value_formatted" => "$1.16M", "duration_minutes" => 20.4, "first_seen_iso" => "2026-10-17T06:34:13.484Z"],
        ["id" => "bid-81490", "type" => "bid", "price" => 81490, "amount" => 76.033, "value" => 6195929.17, "value_formatted" => "$6.2M", "duration_minutes" => 20.4, "first_seen_iso" => "2026-10-17T06:34:13.484Z"],
        // ... (Endelea kuongeza vitu vingine hapa kwa mtindo huu)
        ["id" => "bid-80188", "type" => "bid", "price" => 80188, "amount" => 24.7, "value" => 1980643.5999999999, "value_formatted" => "$1.98M", "duration_minutes" => 0] 
    ],
    "asks" => [] // Hapa unaweza kuweka data za asks kama unazo
];

echo json_encode($data);
?>