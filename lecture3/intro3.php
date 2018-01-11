<?php

include_once 'config.php';

echo '<pre>' . print_r($_GET, true) . '</pre>';

echo '?a=VALOR&b=VALOR<br />';

if (isset($_GET['price'])) {
    $price = $_GET['price'] * 5;
    echo "Price x 5: $price<br>";
} else {
    echo 'No need to calculate price.<br>';
}

$page = (isset($_GET['page'])) ? $_GET['page'] : '';

if (empty($page)) {
    $page = 'home';
}

/*if ($page == 'home') {
    echo 'Welcome to home!<br>';
} else if ($page == 'form') {
    include 'form.php';
} else {
    echo 'You didnt selected any page!';
}*/

switch ($page) {
    case 'home':
        echo 'Welcome to home!<br>';
        break;
    case 'form':
        include 'form.phpa';
        break;
    default:
        echo 'You didnt selected any page!';
        break;
}

echo 'Despues del switch<br>';

$i = 0;
while (true) {
    echo "$i<br>";
    
    if ($i++ > 20) {
        break;
    }
}

$i = 0;
echo '<select>';
while ($i++ < 20) {
    $sel = ($i == 5) ? ' selected' : '';
    echo "<option$sel>Option $i</option><br>";
}
echo '</select>';

echo '<select>';
for ($i = 0; $i < 20; $i++) {
    $sel = ($i == 5) ? ' selected' : '';
    echo "<option$sel>Option $i</option><br>";
}
echo '</select>';

?>