<?php

$arr = ['Enero', 'Febrero', 'Marzo', 'Abril'];

echo '<pre>' . print_r($arr, true) . '</pre>';

$arr2 = ['Jan' => 'Enero',
         'Feb' => 'Febrero',
         'Mar' => 'Marzo',
         'Abr' => 'Abril'];

echo date('M') . '<br />';
echo $arr2[date('M')] . '<br />';
echo $arr2['Feb'] . '<br />';

echo '--- Foreach 1 ---<br /><br />';

foreach($arr2 as $abr => $name) {
    echo "{$abr} = {$name}<br />";
}

echo '--- Foreach 2 ---<br /><br />';

foreach($arr2 as $name) {
    echo "{$name}<br />";
}

echo '--- For 1 ---<br /><br />';

for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . '<br />';
}

$employee = ['name' => 'Omar',
             'age' => 27,
             'town' => 'Ponce',
             'gpa' => 1.5,
             'skills' => ['PHP',
                          'Java',
                          'JavaScript'
                          ],
             ];

echo '<pre>' . print_r($employee, true) . '</pre>';
             
?>
<table border="1">
    <tr>
        <td><b>Field</b></td>
        <td><b>Value</b></td>
    </tr>
<?php

foreach ($employee as $f => $val) {
    /*if (is_array($val)) {
        $out = implode('; ', $val);
    }*/
    
    if (is_array($val)) {
        $out = '';
        
        foreach($val as $k => $v) {
            $out .= "(" . ($k + 1) . ") $v<br />";
        }
    } else {
        $out = $val;
    }
    
    echo "<tr>
        <td><b>$f</b></td>
        <td>$out</td>
    </tr>";
}

?>
    
</table>
<?php

$names = [0 => 'Omar'];

//$names[0] = 'Omar';
$names[1] = 'Miguel';
$names[2] = 'Sandra';

echo '<pre>' . print_r($names, true) . '</pre>';

$names[] = 'Joshua';
$names[] = 'Wilfredo';
$names[] = 'Eli';
$names['otro'] = 'Yamira';

echo '<pre>' . print_r($names, true) . '</pre>';

$employees = [];

$employees[] = ['name' => 'Omar',
             'age' => 27,
             'town' => 'Ponce',
             'gpa' => 1.5,
             'skills' => ['PHP',
                          'Java',
                          'JavaScript'
                          ],
             ];

$employees[] = ['name' => 'Jerry',
             'age' => 52,
             'town' => 'Ponce',
             'gpa' => 3.0,
             'skills' => ['Office',
                          'SPSS',
                          'Windows'
                          ],
             ];

echo '<pre>' . print_r($employees, true) . '</pre>';

echo implode('; ', $employee['skills']) . '<br />';

$line = 'Omar,25,19/Feb/89,omarpr@gmail.com';

$arr3 = explode(',', $line);

echo '<pre>' . print_r($arr3, true) . '</pre>';

$email = 'omar.soto2@upr.edu';
$split = explode('@', $email);
echo 'First part of email is: ' . $split[0]. '<br />';

$first = '';

for ($i = 0; $i < strlen($email); $i++) {
    //echo $email[$i] . <br />';
    if ($email[$i] == '@') {
        //echo substr($email, 0, $i) . '<br />';
        echo $first . '<br />';
        break;
    } else {
        $first .= $email[$i];
    }
}

echo substr($email, 0, strpos($email, '@')) . '<br />';

?>