<?php
header("Content-Type: application/json");

// Data kamili ya Binance iliyorekebishwa
$data = [
    "status" => "success", 
    "timestamp" => "2026-10-17T06:56:19.000Z", 
    "bids_count" => 18, 
    "asks_count" => 16, 
    "bids" => [ 
        ["id" => "bid-81393.74", "type" => "bid", "price" => 81393.74, "amount" => 14.104105, "value" => 1147985.8553027, "value_formatted" => "$1.15M", "duration_minutes" => 2.3, "first_seen_iso" => "2026-10-17T06:54:04.000Z"],
        ["id" => "bid-81373.36", "type" => "bid", "price" => 81373.36, "amount" => 14.335967, "value" => 1166565.8036391, "value_formatted" => "$1.17M", "duration_minutes" => 7.3, "first_seen_iso" => "2026-10-17T06:49:00.000Z"],
        ["id" => "bid-81306.24", "type" => "bid", "price" => 81306.24, "amount" => 15.659473, "value" => 1273212.8700115, "value_formatted" => "$1.27M", "duration_minutes" => 7.3, "first_seen_iso" => "2026-10-17T06:49:02.000Z"],
        ["id" => "bid-81216.39", "type" => "bid", "price" => 81216.39, "amount" => 17.972832, "value" => 1459688.5331165, "value_formatted" => "$1.46M", "duration_minutes" => 91.1, "first_seen_iso" => "2026-10-17T05:25:16.000Z"],
        ["id" => "bid-81170.45", "type" => "bid", "price" => 81170.45, "amount" => 37.895597, "value" => 3076002.6615087, "value_formatted" => "$3.08M", "duration_minutes" => 0.1, "first_seen_iso" => "2026-10-17T06:56:11.000Z"],
        ["id" => "bid-80001", "type" => "bid", "price" => 80001, "amount" => 38.86735856, "value" => 3109427.5521586, "value_formatted" => "$3.11M", "duration_minutes" => 669.3, "first_seen_iso" => "2026-10-16T19:47:00.000Z"],
        ["id" => "bid-80000", "type" => "bid", "price" => 80000, "amount" => 22.68558354, "value" => 1814846.6832, "value_formatted" => "$1.81M", "duration_minutes" => 1156.1, "first_seen_iso" => "2026-10-16T11:40:15.000Z"],
        ["id" => "bid-79800", "type" => "bid", "price" => 79800, "amount" => 14.51745818, "value" => 1158493.162764, "value_formatted" => "$1.16M", "duration_minutes" => 1855.6, "first_seen_iso" => "2026-10-16T00:00:43.000Z"],
        ["id" => "bid-79500", "type" => "bid", "price" => 79500, "amount" => 21.41833641, "value" => 1702757.744595, "value_formatted" => "$1.7M", "duration_minutes" => 1521.9, "first_seen_iso" => "2026-10-16T05:34:28.000Z"],
        ["id" => "bid-79000", "type" => "bid", "price" => 79000, "amount" => 18.41465831, "value" => 1454758.00649, "value_formatted" => "$1.45M", "duration_minutes" => 5720.6, "first_seen_iso" => "2026-10-13T07:35:46.000Z"],
        ["id" => "bid-78500", "type" => "bid", "price" => 78500, "amount" => 20.86619156, "value" => 1637996.03746, "value_formatted" => "$1.64M", "duration_minutes" => 2193.3, "first_seen_iso" => "2026-10-15T18:23:01.000Z"],
        ["id" => "bid-78000", "type" => "bid", "price" => 78000, "amount" => 30.71928738, "value" => 2396104.41564, "value_formatted" => "$2.4M", "duration_minutes" => 5720.6, "first_seen_iso" => "2026-10-13T07:35:46.000Z"],
        ["id" => "bid-77500", "type" => "bid", "price" => 77500, "amount" => 36.65671124, "value" => 2840895.1211, "value_formatted" => "$2.84M", "duration_minutes" => 5720.6, "first_seen_iso" => "2026-10-13T07:35:46.000Z"],
        ["id" => "bid-77000", "type" => "bid", "price" => 77000, "amount" => 29.28587769, "value" => 2255012.58213, "value_formatted" => "$2.26M", "duration_minutes" => 5720.6, "first_seen_iso" => "2026-10-13T07:35:46.000Z"],
        ["id" => "bid-76500", "type" => "bid", "price" => 76500, "amount" => 32.18720222, "value" => 2462320.96983, "value_formatted" => "$2.46M", "duration_minutes" => 3986.3, "first_seen_iso" => "2026-10-14T12:30:02.000Z"],
        ["id" => "bid-76335", "type" => "bid", "price" => 76335, "amount" => 13.86250357, "value" => 1058194.210016, "value_formatted" => "$1.06M", "duration_minutes" => 843.6, "first_seen_iso" => "2026-10-16T16:52:44.000Z"],
        ["id" => "bid-76000", "type" => "bid", "price" => 76000, "amount" => 34.60178803, "value" => 2629735.89028, "value_formatted" => "$2.63M", "duration_minutes" => 3157.8, "first_seen_iso" => "2026-10-15T02:18:30.000Z"],
        ["id" => "bid-75500", "type" => "bid", "price" => 75500, "amount" => 19.50851173, "value" => 1472892.635615, "value_formatted" => "$1.47M", "duration_minutes" => 3152.7, "first_seen_iso" => "2026-10-15T02:23:36.000Z"]
    ],
    "asks" => [
        ["id" => "ask-90000", "type" => "ask", "price" => 90000, "amount" => 58.89411411, "value" => 5300470.2699, "value_formatted" => "$5.3M", "duration_minutes" => 189.8, "first_seen_iso" => "2026-10-17T03:46:30.000Z"],
        ["id" => "ask-89999", "type" => "ask", "price" => 89999, "amount" => 20.98529415, "value" => 1888655.4882059, "value_formatted" => "$1.89M", "duration_minutes" => 189.8, "first_seen_iso" => "2026-10-17T03:46:30.000Z"],
        ["id" => "ask-89000", "type" => "ask", "price" => 89000, "amount" => 113.84123245, "value" => 10131869.68805, "value_formatted" => "$10.13M", "duration_minutes" => 5720.6, "first_seen_iso" => "2026-10-13T07:35:46.000Z"],
        ["id" => "ask-88000", "type" => "ask", "price" => 88000, "amount" => 24.41828701, "value" => 2148809.25688, "value_formatted" => "$2.15M", "duration_minutes" => 5720.6, "first_seen_iso" => "2026-10-13T07:35:46.000Z"],
        ["id" => "ask-87000", "type" => "ask", "price" => 87000, "amount" => 54.22429732, "value" => 4717513.86684, "value_formatted" => "$4.72M", "duration_minutes" => 5720.6, "first_seen_iso" => "2026-10-13T07:35:46.000Z"],
        ["id" => "ask-86000", "type" => "ask", "price" => 86000, "amount" => 16.38533288, "value" => 1409138.62768, "value_formatted" => "$1.41M", "duration_minutes" => 5720.6, "first_seen_iso" => "2026-10-13T07:35:46.000Z"],
        ["id" => "ask-85000", "type" => "ask", "price" => 85000, "amount" => 15.01688784, "value" => 1276435.4664, "value_formatted" => "$1.28M", "duration_minutes" => 2448.6, "first_seen_iso" => "2026-10-15T14:07:44.000Z"],
        ["id" => "ask-84500", "type" => "ask", "price" => 84500, "amount" => 14.46037032, "value" => 1221901.29204, "value_formatted" => "$1.22M", "duration_minutes" => 5680.3, "first_seen_iso" => "2026-10-13T08:16:04.000Z"],
        ["id" => "ask-84000", "type" => "ask", "price" => 84000, "amount" => 16.93799218, "value" => 1422791.34312, "value_formatted" => "$1.42M", "duration_minutes" => 3184, "first_seen_iso" => "2026-10-15T01:52:21.000Z"],
        ["id" => "ask-83500", "type" => "ask", "price" => 83500, "amount" => 26.10546331, "value" => 2179806.186385, "value_formatted" => "$2.18M", "duration_minutes" => 3114.5, "first_seen_iso" => "2026-10-15T03:01:50.000Z"],
        ["id" => "ask-83000", "type" => "ask", "price" => 83000, "amount" => 16.53050261, "value" => 1372031.71663, "value_formatted" => "$1.37M", "duration_minutes" => 606.6, "first_seen_iso" => "2026-10-16T20:49:46.000Z"],
        ["id" => "ask-81810.88", "type" => "ask", "price" => 81810.88, "amount" => 61.079496, "value" => 4996967.3177165, "value_formatted" => "$5M", "duration_minutes" => 0.1, "first_seen_iso" => "2026-10-17T06:56:14.000Z"],
        ["id" => "ask-81740.01", "type" => "ask", "price" => 81740.01, "amount" => 21.042796, "value" => 1720038.355468, "value_formatted" => "$1.72M", "duration_minutes" => 47.3, "first_seen_iso" => "2026-10-17T06:09:02.000Z"],
        ["id" => "ask-81701.79", "type" => "ask", "price" => 81701.79, "amount" => 16.523295, "value" => 1349982.778198, "value_formatted" => "$1.35M", "duration_minutes" => 37.2, "first_seen_iso" => "2026-10-17T06:19:06.000Z"],
        ["id" => "ask-81650.7", "type" => "ask", "price" => 81650.7, "amount" => 14.62513, "value" => 1194152.102091, "value_formatted" => "$1.19M", "duration_minutes" => 12.2, "first_seen_iso" => "2026-10-17T06:44:06.000Z"],
        ["id" => "ask-81608.63", "type" => "ask", "price" => 81608.63, "amount" => 13.301303, "value" => 1085501.1150449, "value_formatted" => "$1.09M", "duration_minutes" => 4.9, "first_seen_iso" => "2026-10-17T06:51:27.000Z"]
    ]
];

echo json_encode($data);
?>