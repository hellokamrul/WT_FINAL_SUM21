<?php
    include '../../models/db_config.php';
    $query = "SELECT EMAIL, NOTICEBYADMIN FROM SIGNUP WHERE NOTICEBYADMIN != '';";
    $result = get($query);


    if(count($result)  > 0) {
        foreach($result as $key => $value) {
            echo $value['EMAIL'] . "<br>";
            echo $value['NOTICEBYADMIN'] . "<br>";
            echo "<br>";
        }
    }

?>