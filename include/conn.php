
<?php

try {
    $db = new pdo('mysql:localhost=localhost;dbname=car_rentall; charset=utf8', 'root', '');
$db->setAttribute(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
$db->setAttribute(pdo::ATTR_EMULATE_PREPARES, false);
    echo "good";
}
catch(Exception $e){
    echo "connection filed";
    echo $e->getMessage();
}


?>