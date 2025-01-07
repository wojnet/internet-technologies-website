<?php

function createTimeString($minutes, $seconds) {
  $timeString = "";
  if ($minutes < 10) {
    $timeString = $timeString . "0";
  }

  $timeString = $timeString . $minutes;
  $timeString = $timeString . ":";

  if ($seconds < 10) {
    $timeString = $timeString . "0";
  }

  $timeString = $timeString . "$seconds";

  return $timeString;
}

?>