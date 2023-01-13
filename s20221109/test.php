<?php

// echo 單行輸出
echo '王小明<br>';
echo '王小明<br>';
echo '王小明<br>';

// for 輸出
for ($i = 1; $i <= 3; $i++) {
    echo '王小明 for <br>';
}

// function 印章刻好
function printName()
{
    echo '王小明 function <br>';
    for ($i = 1; $i <= 3; $i++) {
        echo '王小明 for + function <br>';
    }
}

// 印章(名字)
function printMyName($name)
{
    echo "$name function <br>";
    for ($i = 1; $i <= 3; $i++) {
        echo "$name for + function <br>";
    }
}

// 印章(名字,印幾次)
function printMyNameMyNum($name, $num)
{
    echo "$name function <br>";
    for ($i = 1; $i <= $num; $i++) {
        echo "$name for + function <br>";
    }
}

// 練習
// 印章(名字,印幾次,星星幾顆)
function printNameNumStarNum($name, $num, $starNum)
{
    
    echo "$name function <br>";
    for ($i = 1; $i <= $num; $i++) {
        for ($j = 1; $j <= $starNum; $j++) {
            // echo "*";
            echo "$i*$j";
        }
        echo "$name for + function <br>";
    }
}

// 呼叫印章
printName();
printMyName('魔獸');

printMyNameMyNum('魔獸好棒棒', 10);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello php</h1>
    <p>
        <?php
        printName();
        printMyName('魔獸');
        printMyNameMyNum('魔獸好棒棒', 10);
        echo "<hr><br>printNameNumStarNum('kai',3,5);";
        printNameNumStarNum('kai', 3, 5);
        ?>
    </p>
</body>

</html>         