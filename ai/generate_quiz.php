<?php
header('Content-Type: application/json');
echo json_encode([
  "quiz" => [
    ["q"=>"What did you learn from the video?","a"=>"Custom answer"],
    ["q"=>"Rate the difficulty level","a"=>"Easy/Medium/Hard"]
  ]
]);
?>