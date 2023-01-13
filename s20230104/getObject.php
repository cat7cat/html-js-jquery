<?php
function dd($data)
{
    echo '<pre>';
    // print_r($data);
    var_dump($data);
    echo '</pre>';
}



// $data = $_GET;
$data = [
    's1' => 'amy',
    's2' => 'amy',
    's3' => 'amy',
];
dd($data);
$data_content = json_encode($data);
dd($data_content );
// echo json_encode($data);
    // echo "123";
    // $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
    // echo json_encode($data);
