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