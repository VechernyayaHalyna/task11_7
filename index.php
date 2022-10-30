<?php
// Переменные для первой таблицы
$a1 = 0;
$b1 = 0;
$a2 = 0;
$b2 = 1;
$a3 = 1;
$b3 = 0;
$a4 = 1;
$b4 = 1;

// Переменные для второй и третьей таблиц
$c1 = true;
$c2 = false;
$c3 = 1;
$c4 = 0;
$c5 = -1;
$c6 = "1";
$c7 = null;
$c8 = "php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 11.7</title>
</head>
<link rel="stylesheet" href="style.css" type="text/css"/>
<body>

    <!-- Первая таблица -->
    <div class="title">
        <h2>Таблица истинности PHP</h2>
    </div>

    <table>
        <thead>
            <tr>
                <th>
                    <strong>A</strong>
                </th>
                <th>
                    <strong>B</strong>
                </th>
                <th>
                    <strong>!A</strong>
                </th>
                <th>
                    <strong>A || B</strong>
                </th>
                <th>
                    <strong>A && B</strong>
                </th>
                <th>
                    <strong>A xor B</strong>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $a1; ?></td>
                <td><?php echo $b1; ?></td>
                <td><?php var_dump(!$a1); ?></td>
                <td><?php var_dump($a1 || $b1); ?></td>
                <td><?php var_dump($a1 && $b1) ?></td>
                <td><?php var_dump($a1 xor $b1) ?></td>
            </tr>
            <tr>
                <td><?php echo $a2; ?></td>
                <td><?php echo $b2; ?></td>
                <td><?php var_dump(!$a2); ?></td>
                <td><?php var_dump($a2 || $b2); ?></td>
                <td><?php var_dump($a2 && $b2) ?></td>
                <td><?php var_dump($a2 xor $b2) ?></td>
            </tr>
            <tr>
                <td><?php echo $a3; ?></td>
                <td><?php echo $b3; ?></td>
                <td><?php var_dump(!$a3); ?></td>
                <td><?php var_dump($a3 || $b3); ?></td>
                <td><?php var_dump($a3 && $b3) ?></td>
                <td><?php var_dump($a3 xor $b3) ?></td>
            </tr>
            <tr>
                <td><?php echo $a4; ?></td>
                <td><?php echo $b4; ?></td>
                <td><?php var_dump(!$a4); ?></td>
                <td><?php var_dump($a4 || $b4); ?></td>
                <td><?php var_dump($a4 && $b4) ?></td>
                <td><?php var_dump($a4 xor $b4) ?></td>
            </tr>
        </tbody>
    </table>

    <!-- Вторая таблица -->
    <div class="title">
    <h2>Гибкое сравнение в PHP</h2>
    </div>
    <div class="wrapper">
        <table style="table-layout: fixed; width: 900px; margin: auto;">
            <thead>
            <tr><th width="10px"></th><th width="10px">true</th><th width="10px">false</th><th width="10px">1</th><th width="10px">0</th><th width="10px">-1</th><th width="10px">"1"</th><th width="10px">null</th><th width="10px">"php"</th></tr>
            </thead>
            <tbody>
            <tr>
                <td style="background-color: #f5f5f5;"><strong>true</strong></td>
                <td><?php var_dump($c1 == $c1);?></td>
                <td><?php var_dump($c1 == $c2); ?></td>
                <td><?php var_dump($c1 == $c3); ?></td>
                <td><?php var_dump($c1 == $c4); ?></td>
                <td><?php var_dump($c1 == $c5); ?></td>
                <td><?php var_dump($c1 == $c6); ?></td>
                <td><?php var_dump($c1 == $c7); ?></td>
                <td><?php var_dump($c1 == $c8); ?></td>
            </tr>
            <tr>
                <td style="background-color: #f5f5f5;"><strong>false</strong></td>
                <td><?php var_dump($c2 == $c1);?></td>
                <td><?php var_dump($c2 == $c2);?></td>
                <td><?php var_dump($c2 == $c3);?></td>
                <td><?php var_dump($c2 == $c4);?></td>
                <td><?php var_dump($c2 == $c5);?></td>
                <td><?php var_dump($c2 == $c6);?></td>
                <td><?php var_dump($c2 == $c7);?></td>
                <td><?php var_dump($c2 == $c8);?></td>
            </tr>
            <tr>
                <td style="background-color: #f5f5f5;"><strong>1</strong></td>
                <td><?php var_dump($c3 == $c1);?></td>
                <td><?php var_dump($c3 == $c2);?></td>
                <td><?php var_dump($c3 == $c3);?></td>
                <td><?php var_dump($c3 == $c4);?></td>
                <td><?php var_dump($c3 == $c5);?></td>
                <td><?php var_dump($c3 == $c6);?></td>
                <td><?php var_dump($c3 == $c7);?></td>
                <td><?php var_dump($c3 == $c8);?></td>
            </tr>
            <tr>
                <td style="background-color: #f5f5f5;"><strong>0</strong></td>
                <td><?php var_dump($c4 == $c1);?></td>
                <td><?php var_dump($c4 == $c2);?></td>
                <td><?php var_dump($c4 == $c3);?></td>
                <td><?php var_dump($c4 == $c4);?></td>
                <td><?php var_dump($c4 == $c5);?></td>
                <td><?php var_dump($c4 == $c6);?></td>
                <td><?php var_dump($c4 == $c7);?></td>
                <td><?php var_dump($c4 == $c8);?></td>
            </tr>
            <tr>
                <td style="background-color: #f5f5f5;"><strong>1</strong></td>
                <td><?php var_dump($c5 == $c1);?></td>
                <td><?php var_dump($c5 == $c2);?></td>
                <td><?php var_dump($c5 == $c3);?></td>
                <td><?php var_dump($c5 == $c4);?></td>
                <td><?php var_dump($c5 == $c5);?></td>
                <td><?php var_dump($c5 == $c6);?></td>
                <td><?php var_dump($c5 == $c7);?></td>
                <td><?php var_dump($c5 == $c8);?></td>
            </tr>
            <tr>
                <td style="background-color: #f5f5f5;"><strong>"1"</strong></td>
                <td><?php var_dump($c6 == $c1);?></td>
                <td><?php var_dump($c6 == $c2);?></td>
                <td><?php var_dump($c6 == $c3);?></td>
                <td><?php var_dump($c6 == $c4);?></td>
                <td><?php var_dump($c6 == $c5);?></td>
                <td><?php var_dump($c6 == $c6);?></td>
                <td><?php var_dump($c6 == $c7);?></td>
                <td><?php var_dump($c6 == $c8);?></td>
            </tr>
            <tr>
                <td style="background-color: #f5f5f5;"><strong>null</strong></td>
                <td><?php var_dump($c7 == $c1);?></td>
                <td><?php var_dump($c7 == $c2);?></td>
                <td><?php var_dump($c7 == $c3);?></td>
                <td><?php var_dump($c7 == $c4);?></td>
                <td><?php var_dump($c7 == $c5);?></td>
                <td><?php var_dump($c7 == $c6);?></td>
                <td><?php var_dump($c7 == $c7);?></td>
                <td><?php var_dump($c7 == $c8);?></td>
            </tr>
            <tr>
                <td style="font-size: 16px; white-space: nowrap; background-color: #f5f5f5;"><strong>"php"</strong></td>
                <td><?php var_dump($c8 == $c1);?></td>
                <td><?php var_dump($c8 == $c2);?></td>
                <td><?php var_dump($c8 == $c3);?></td>
                <td><?php var_dump($c8 == $c4);?></td>
                <td><?php var_dump($c8 == $c5);?></td>
                <td><?php var_dump($c8 == $c6);?></td>
                <td><?php var_dump($c8 == $c7);?></td>
                <td><?php var_dump($c8 == $c8);?></td>
            </tr>
            </tbody>
        </table>
    </div>

    <!-- Третья таблица -->
    <div class="title">
        <h2>Жесткое сравнение в PHP</h2>
    </div>
    <table style="table-layout: fixed; width: 900px; margin: auto;">
        <thead>
        <tr><th width="10px"></th><th width="10px">true</th><th width="10px">false</th><th width="10px">1</th><th width="10px">0</th><th width="10px">-1</th><th width="10px">"1"</th><th width="10px">null</th><th width="10px">"php"</th></tr>
        </thead>
        <tbody>
        <tr>
            <td style="background-color: #f5f5f5;"><strong>true</strong></td>
            <td><?php var_dump($c1 === $c1);?></td>
            <td><?php var_dump($c1 === $c2);?></td>
            <td><?php var_dump($c1 === $c3);?></td>
            <td><?php var_dump($c1 === $c4);?></td>
            <td><?php var_dump($c1 === $c5);?></td>
            <td><?php var_dump($c1 === $c6);?></td>
            <td><?php var_dump($c1 === $c7);?></td>
            <td><?php var_dump($c1 === $c8);?></td>
        </tr>
        <tr>
            <td style="background-color: #f5f5f5;"><strong>false</strong></td>
            <td><?php var_dump($c2 === $c1);?></td>
            <td><?php var_dump($c2 === $c2);?></td>
            <td><?php var_dump($c2 === $c3);?></td>
            <td><?php var_dump($c2 === $c4);?></td>
            <td><?php var_dump($c2 === $c5);?></td>
            <td><?php var_dump($c2 === $c6);?></td>
            <td><?php var_dump($c2 === $c7);?></td>
            <td><?php var_dump($c2 === $c8);?></td>
        </tr>
        <tr>
            <td style="background-color: #f5f5f5;"><strong>1</strong></td>
            <td><?php var_dump($c3 === $c1);?></td>
            <td><?php var_dump($c3 === $c2);?></td>
            <td><?php var_dump($c3 === $c3);?></td>
            <td><?php var_dump($c3 === $c4);?></td>
            <td><?php var_dump($c3 === $c5);?></td>
            <td><?php var_dump($c3 === $c6);?></td>
            <td><?php var_dump($c3 === $c7);?></td>
            <td><?php var_dump($c3 === $c8);?></td>
        </tr>
        <tr>
            <td style="background-color: #f5f5f5;"><strong>0</strong></td>
            <td><?php var_dump($c4 === $c1);?></td>
            <td><?php var_dump($c4 === $c2);?></td>
            <td><?php var_dump($c4 === $c3);?></td>
            <td><?php var_dump($c4 === $c4);?></td>
            <td><?php var_dump($c4 === $c5);?></td>
            <td><?php var_dump($c4 === $c6);?></td>
            <td><?php var_dump($c4 === $c7);?></td>
            <td><?php var_dump($c4 === $c8);?></td>
        </tr>
        <tr>
            <td style="background-color: #f5f5f5;"><strong>-1</strong></td>
            <td><?php var_dump($c5 === $c1);?></td>
            <td><?php var_dump($c5 === $c2);?></td>
            <td><?php var_dump($c5 === $c3);?></td>
            <td><?php var_dump($c5 === $c4);?></td>
            <td><?php var_dump($c5 === $c5);?></td>
            <td><?php var_dump($c5 === $c6);?></td>
            <td><?php var_dump($c5 === $c7);?></td>
            <td><?php var_dump($c5 === $c8);?></td>
        </tr>
        <tr>
            <td style="background-color: #f5f5f5;"><strong>"1"</strong></td>
            <td><?php var_dump($c6 === $c1);?></td>
            <td><?php var_dump($c6 === $c2);?></td>
            <td><?php var_dump($c6 === $c3);?></td>
            <td><?php var_dump($c6 === $c4);?></td>
            <td><?php var_dump($c6 === $c5);?></td>
            <td><?php var_dump($c6 === $c6);?></td>
            <td><?php var_dump($c6 === $c7);?></td>
            <td><?php var_dump($c6 === $c8);?></td>
        </tr>
        <tr>
            <td style="background-color: #f5f5f5;"><strong>null</strong></td>
            <td><?php var_dump($c7 === $c1);?></td>
            <td><?php var_dump($c7 === $c2);?></td>
            <td><?php var_dump($c7 === $c3);?></td>
            <td><?php var_dump($c7 === $c4);?></td>
            <td><?php var_dump($c7 === $c5);?></td>
            <td><?php var_dump($c7 === $c6);?></td>
            <td><?php var_dump($c7 === $c7);?></td>
            <td><?php var_dump($c7 === $c8);?></td>
        </tr>
        <tr>
            <td style="font-size: 16px; white-space: nowrap; background-color: #f5f5f5;"><strong>"php"</strong></td>
            <td><?php var_dump($c8 === $c1);?></td>
            <td><?php var_dump($c8 === $c2);?></td>
            <td><?php var_dump($c8 === $c3);?></td>
            <td><?php var_dump($c8 === $c4);?></td>
            <td><?php var_dump($c8 === $c5);?></td>
            <td><?php var_dump($c8 === $c6);?></td>
            <td><?php var_dump($c8 === $c7);?></td>
            <td><?php var_dump($c8 === $c8);?></td>
        </tr>
        </tbody>
    </table>
</body>
</html>