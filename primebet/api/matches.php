<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

$matches = [
  [
    "id" => 1,
    "league" => "Premier League",
    "time" => "Today, 20:00",
    "homeTeam" => "Chelsea",
    "awayTeam" => "Liverpool",
    "homeLogo" => "src/assets/images/icon/chealse.png", // Changed path
    "awayLogo" => "src/assets/images/icon/liverpool.png", // Changed path
    "odds" => ["homeWin" => 1.87, "draw" => 3.5, "awayWin" => 4.2]
  ],
  [
    "id" => 2,
    "league" => "Champions League",
    "time" => "Tomorrow, 21:00",
    "homeTeam" => "Bayern Munich",
    "awayTeam" => "PSG",
    "homeLogo" => "src/assets/images/icon/chealse.png",
    "awayLogo" => "src/assets/images/icon/liverpool.png",
    "odds" => ["homeWin" => 2.1, "draw" => 3.8, "awayWin" => 3.2]
  ]
];

echo json_encode(["matches" => $matches]);
?>