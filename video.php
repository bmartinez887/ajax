<?php
$videos = [
  1 => "kPWodVMtVOY",
  2 => "CrXIlcJR1uQ",
  3 => "vzPIlA8S22c"
];

$id = $_GET['id'] ?? 0;

if(!isset($videos[$id])){ echo "Not found"; exit; }

$yt = $videos[$id];

echo "<iframe width='100%' height='350' src='https://www.youtube.com/embed/$yt?autoplay=1' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>";
