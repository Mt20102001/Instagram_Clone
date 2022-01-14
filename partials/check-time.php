<?php
function time_stamp($session_time)
{

    $time_difference = time() - $session_time;
    $seconds = $time_difference;
    $minutes = round($time_difference / 60);
    $hours = round($time_difference / 3600);
    $days = round($time_difference / 86400);
    $weeks = round($time_difference / 604800);
    $months = round($time_difference / 2419200);
    $years = round($time_difference / 29030400);

    if ($seconds <= 60) {
        echo "$seconds GIÂY TRƯỚC";
    } else if ($minutes <= 60) {
        if ($minutes == 1) {
            echo "1 PHÚT TRƯỚC";
        } else {
            echo "$minutes PHÚT TRƯỚC";
        }
    } else if ($hours <= 24) {
        if ($hours == 1) {
            echo "1 GIỜ TRƯỚC";
        } else {
            echo "$hours GIỜ TRƯỚC";
        }
    } else if ($days <= 7) {
        if ($days == 1) {
            echo "1 NGÀY TRƯỚC";
        } else {
            echo "$days NGÀY TRƯỚC";
        }
    } else if ($weeks <= 4) {
        if ($weeks == 1) {
            echo "1 TUẦN TRƯỚC";
        } else {
            echo "$weeks TUẦN TRƯỚC";
        }
    } else if ($months <= 12) {
        if ($months == 1) {
            echo "1 THÁNG TRƯỚC";
        } else {
            echo "$months THÁNG TRƯỚC";
        }
    } else {
        if ($years == 1) {
            echo "1 NĂM TRƯỚC";
        } else {
            echo "$years NĂM TRƯỚC";
        }
    }
}
