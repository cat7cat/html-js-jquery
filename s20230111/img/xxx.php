<?php 
    $data = $_POST;
    $startDate = $data['startDate'];//起始日期
    $endDate = $data['endDate'];//截止日期
    $sql = "SELECT * FROM table WHERE sqldate BETWEEN $startDate AND $endDate;"

?>