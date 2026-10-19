<?php
header("Content-Type: application/json");

$data = [
    "status" => "success",
    "timestamp" => "2026-10-17T06:53:30.000Z",
    "bids_count" => 15,
    "asks_count" => 14,
    "bids" => [
        ["id" => "bid-81549.1", "type" => "bid", "price" => 81549.1, "amount" => 30.003, "value" => 2446717.6473, "value_formatted" => "$2.45M", "duration_minutes" => 159, "first_seen_iso" => "2026-10-17T06:53:25.000Z"],
        ["id" => "bid-81512.6", "type" => "bid", "price" => 81512.6, "amount" => 37.1295, "value" => 3026522.0817, "value_formatted" => "$3.03M", "duration_minutes" => 0, "first_seen_iso" => "2026-10-17T06:53:30.000Z"],
        ["id" => "bid-81465.1", "type" => "bid", "price" => 81465.1, "amount" => 17.1856, "value" => 1400026.62256, "value_formatted" => "$1.4M", "duration_minutes" => 0.8, "first_seen_iso" => "2026-10-17T06:52:40.000Z"],
        ["id" => "bid-81431.4", "type" => "bid", "price" => 81431.4, "amount" => 25.8318, "value" => 2103519.63852, "value_formatted" => "$2.1M", "duration_minutes" => 1.3, "first_seen_iso" => "2026-10-17T06:52:12.000Z"],
        ["id" => "bid-81422.3", "type" => "bid", "price" => 81422.3, "amount" => 12.7521, "value" => 1038305.31183, "value_formatted" => "$1.04M", "duration_minutes" => 0, "first_seen_iso" => "2026-10-17T06:53:29.000Z"],
        ["id" => "bid-81397.1", "type" => "bid", "price" => 81397.1, "amount" => 34.4009, "value" => 2800133.49739, "value_formatted" => "$2.8M", "duration_minutes" => 1.3, "first_seen_iso" => "2026-10-17T06:52:11.000Z"],
        ["id" => "bid-81306.7", "type" => "bid", "price" => 81306.7, "amount" => 28.5341, "value" => 2320013.50847, "value_formatted" => "$2.32M", "duration_minutes" => 0.1, "first_seen_iso" => "2026-10-17T06:53:27.000Z"],
        ["id" => "bid-81209", "type" => "bid", "price" => 81209, "amount" => 17.0062, "value" => 1381056.4958, "value_formatted" => "$1.38M", "duration_minutes" => 238.5, "first_seen_iso" => "2026-10-17T02:55:03.000Z"],
        ["id" => "bid-81184.8", "type" => "bid", "price" => 81184.8, "amount" => 37.9345, "value" => 3079704.7956, "value_formatted" => "$3.08M", "duration_minutes" => 0.1, "first_seen_iso" => "2026-10-17T06:53:27.000Z"],
        ["id" => "bid-81022.4", "type" => "bid", "price" => 81022.4, "amount" => 47.5141, "value" => 3849706.41584, "value_formatted" => "$3.85M", "duration_minutes" => 0.1, "first_seen_iso" => "2026-10-17T06:53:27.000Z"],
        ["id" => "bid-81000", "type" => "bid", "price" => 81000, "amount" => 281.2406, "value" => 22780488.6, "value_formatted" => "$22.78M", "duration_minutes" => 451.5, "first_seen_iso" => "2026-10-16T23:22:01.000Z"],
        ["id" => "bid-80978.5", "type" => "bid", "price" => 80978.5, "amount" => 24.6002, "value" => 1992087.2957, "value_formatted" => "$1.99M", "duration_minutes" => 378.9, "first_seen_iso" => "2026-10-17T00:34:39.000Z"],
        ["id" => "bid-80975.6", "type" => "bid", "price" => 80975.6, "amount" => 24.6026, "value" => 1992210.29656, "value_formatted" => "$1.99M", "duration_minutes" => 378.6, "first_seen_iso" => "2026-10-17T00:34:52.000Z"],
        ["id" => "bid-80955.3", "type" => "bid", "price" => 80955.3, "amount" => 29, "value" => 2347703.7, "value_formatted" => "$2.35M", "duration_minutes" => 446.3, "first_seen_iso" => "2026-10-16T23:27:12.000Z"],
        ["id" => "bid-80936.5", "type" => "bid", "price" => 80936.5, "amount" => 21.172, "value" => 1713587.578, "value_formatted" => "$1.71M", "duration_minutes" => 376, "first_seen_iso" => "2026-10-17T00:37:28.000Z"]
    ],
    "asks" => [
        ["id" => "ask-82222", "type" => "ask", "price" => 82222, "amount" => 14.3141, "value" => 1176933.9302, "value_formatted" => "$1.18M", "duration_minutes" => 48.3, "first_seen_iso" => "2026-10-17T06:05:15.000Z"],
        ["id" => "ask-82200", "type" => "ask", "price" => 82200, "amount" => 22.5187, "value" => 1851037.14, "value_formatted" => "$1.85M", "duration_minutes" => 142.2, "first_seen_iso" => "2026-10-17T04:31:18.000Z"],
        ["id" => "ask-82165.8", "type" => "ask", "price" => 82165.8, "amount" => 45.5973, "value" => 3746538.63234, "value_formatted" => "$3.75M", "duration_minutes" => 0.1, "first_seen_iso" => "2026-10-17T06:53:27.000Z"],
        ["id" => "ask-82001.8", "type" => "ask", "price" => 82001.8, "amount" => 35.3474, "value" => 2898550.42532, "value_formatted" => "$2.9M", "duration_minutes" => 0.1, "first_seen_iso" => "2026-10-17T06:53:27.000Z"],
        ["id" => "ask-82000", "type" => "ask", "price" => 82000, "amount" => 21.3084, "value" => 1747288.8, "value_formatted" => "$1.75M", "duration_minutes" => 701.6, "first_seen_iso" => "2026-10-16T19:11:57.000Z"],
        ["id" => "ask-81950", "type" => "ask", "price" => 81950, "amount" => 13.1788, "value" => 1080002.66, "value_formatted" => "$1.08M", "duration_minutes" => 42.5, "first_seen_iso" => "2026-10-17T06:10:58.000Z"],
        ["id" => "ask-81888", "type" => "ask", "price" => 81888, "amount" => 17.5281, "value" => 1435341.0528, "value_formatted" => "$1.44M", "duration_minutes" => 41.8, "first_seen_iso" => "2026-10-17T06:11:43.000Z"],
        ["id" => "ask-81879", "type" => "ask", "price" => 81879, "amount" => 27.5983, "value" => 2259721.2057, "value_formatted" => "$2.26M", "duration_minutes" => 0.1, "first_seen_iso" => "2026-10-17T06:53:27.000Z"],
        ["id" => "ask-81800", "type" => "ask", "price" => 81800, "amount" => 17.6761, "value" => 1445904.98, "value_formatted" => "$1.45M", "duration_minutes" => 189.3, "first_seen_iso" => "2026-10-17T03:44:13.000Z"],
        ["id" => "ask-81791.5", "type" => "ask", "price" => 81791.5, "amount" => 31.3639, "value" => 2565300.42685, "value_formatted" => "$2.57M", "duration_minutes" => 1.5, "first_seen_iso" => "2026-10-17T06:51:58.000Z"],
        ["id" => "ask-81760.4", "type" => "ask", "price" => 81760.4, "amount" => 25.685, "value" => 2100015.874, "value_formatted" => "$2.1M", "duration_minutes" => 1.4, "first_seen_iso" => "2026-10-17T06:52:06.000Z"],
        ["id" => "ask-81730.3", "type" => "ask", "price" => 81730.3, "amount" => 19.1503, "value" => 1565159.76409, "value_formatted" => "$1.57M", "duration_minutes" => 0.9, "first_seen_iso" => "2026-10-17T06:52:38.000Z"],
        ["id" => "ask-81669.8", "type" => "ask", "price" => 81669.8, "amount" => 30.7785, "value" => 2513673.9393, "value_formatted" => "$2.51M", "duration_minutes" => 0, "first_seen_iso" => "2026-10-17T06:53:30.000Z"],
        ["id" => "ask-81656.7", "type" => "ask", "price" => 81656.7, "amount" => 30.3797, "value" => 2480706.04899, "value_formatted" => "$2.48M", "duration_minutes" => 0.3, "first_seen_iso" => "2026-10-17T06:53:11.000Z"]
    ]
];

echo json_encode($data);
?>